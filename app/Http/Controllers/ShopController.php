<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Rents;
use App\Models\UserHasPurchaseItems;
use App\Repositories\PurchaseListRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    private PurchaseListRepository $purchaseListRepository;

    public function __construct(PurchaseListRepository $purchaseListRepository)
    {
        $this->purchaseListRepository = $purchaseListRepository;
    }

    public function account()
    {
        return view('shop/account');
    }

    public function cart()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userId = Auth::id();

        $cartItems = $this->purchaseListRepository->all()
            ->where('user_id', $userId);

        $inventories = [];
        $totalPrice = 0;

        foreach ($cartItems as $item) {
            $inventory = Inventory::find($item->inventory_id);
            if ($inventory) {
                $inventories[] = $inventory;

                // Calculate price based on rental days
                $days = $item->rental_days ?? 1;
                $price = floatval($inventory->getBuyPrice() ?? 0) * $days;
                $totalPrice += $price;

                // Store rental dates for the view
                $inventory->rental_start_date = $item->start_date ?? null;
                $inventory->rental_end_date = $item->end_date ?? null;
                $inventory->rental_days = $days;
            }
        }

        return view('shop/cart', [
            'inventories' => $inventories,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function addToCart($id)
    {
        if (!Auth::check()) {
            return response()->json(
                [
                    'success' => false,
                    'redirect' => route('login'),
                ]
            );
        }

        $userId = Auth::id();

        $existingItems = $this->purchaseListRepository->all()
            ->where('user_id', $userId)
            ->where('inventory_id', $id);

        if ($existingItems->isEmpty()) {
            $this->purchaseListRepository->create(
                [
                    'user_id' => $userId,
                    'inventory_id' => $id,
                    'rental_days' => 1, // Default to 1 day
                    'start_date' => null,
                    'end_date' => null,
                ]
            );
        }

        $cartCount = $this->purchaseListRepository->all()
            ->where('user_id', $userId)
            ->count();

        return response()->json(
            [
                'success' => true,
                'message' => 'Товар добавлен в корзину',
                'cartCount' => $cartCount,
            ]
        );
    }

    public function updateCartDates(Request $request)
    {
        try {
            Log::info('Метод updateCartDates вызван', $request->all());

            // Проверка авторизации
            if (!Auth::check()) {
                Log::warning('Пользователь не авторизован');

                return response()->json([
                                            'success' => false,
                                            'message' => 'Необходимо авторизоваться',
                                        ]);
            }

            $userId = Auth::id();
            $inventoryId = $request->input('inventory_id');
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $days = $request->input('days', 1);

            // Простая валидация: даты не должны быть пустыми
            if (empty($startDate) || empty($endDate)) {
                return response()->json([
                                            'success' => false,
                                            'message' => 'Необходимо выбрать даты аренды',
                                        ], 422);
            }

            Log::info('Данные запроса', [
                'user_id' => $userId,
                'inventory_id' => $inventoryId,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'days' => $days,
            ]);

            // Поиск элемента корзины
            $cartItems = $this->purchaseListRepository->all()
                ->where('user_id', $userId)
                ->where('inventory_id', $inventoryId);

            Log::info('Найдено элементов корзины: ' . $cartItems->count());

            // Обновляем элементы корзины
            foreach ($cartItems as $item) {
                try {
                    $this->purchaseListRepository->update($item->id, [
                        'rental_days' => $days,
                        'start_date' => $startDate,
                        'end_date' => $endDate,
                    ]);
                    Log::info('Успешно обновлен элемент с ID: ' . $item->id);
                } catch (\Exception $updateEx) {
                    Log::error('Ошибка при обновлении элемента ' . $item->id . ': ' . $updateEx->getMessage());
                    throw $updateEx;
                }
            }

            // Пересчет общей стоимости
            $remainingItems = $this->purchaseListRepository->all()
                ->where('user_id', $userId);

            $totalPrice = 0;
            foreach ($remainingItems as $item) {
                $inventory = Inventory::find($item->inventory_id);
                if ($inventory) {
                    $rentalDays = $item->rental_days ?? 1;
                    $price = floatval($inventory->getBuyPrice() ?? 0) * $rentalDays;
                    $totalPrice += $price;
                }
            }

            // Возврат успешного ответа
            Log::info('Обновление завершено успешно, новая общая стоимость: ' . $totalPrice);

            return response()->json([
                                        'success' => true,
                                        'message' => 'Даты аренды обновлены',
                                        'totalPrice' => $totalPrice,
                                    ]);
        } catch (\Exception $e) {
            Log::error('Ошибка в updateCartDates: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return response()->json(
                [
                    'success' => false,
                    'message' => 'Произошла ошибка при обновлении дат',
                    'error' => $e->getMessage(),
                ],
                500
            );
        }
    }

    public function removeFromCart($id)
    {
        if (!Auth::check()) {
            return response()->json(
                [
                    'success' => false,
                    'redirect' => route('login'),
                ]
            );
        }

        $userId = Auth::id();

        $cartItems = $this->purchaseListRepository->all()
            ->where('user_id', $userId)
            ->where('inventory_id', $id);

        foreach ($cartItems as $item) {
            $this->purchaseListRepository->delete($item->id);
        }

        $remainingItems = $this->purchaseListRepository->all()
            ->where('user_id', $userId);

        $totalPrice = 0;
        foreach ($remainingItems as $item) {
            $inventory = Inventory::find($item->inventory_id);
            if ($inventory) {
                $totalPrice += floatval($inventory->getBuyPrice() ?? 0);
            }
        }

        $cartCount = $remainingItems->count();

        return response()->json(
            [
                'success' => true,
                'message' => 'Товар удален из корзины',
                'totalPrice' => $totalPrice,
                'cartCount' => $cartCount,
            ]
        );
    }

    public function checkOut(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userId = Auth::id();
        $user = Auth::user();

        // Получаем все товары из корзины пользователя
        $cartItems = $this->purchaseListRepository->all()
            ->where('user_id', $userId);

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Ваша корзина пуста');
        }

        // Обрабатываем POST запрос (отправка формы заказа)
        if ($request->isMethod('POST')) {
            // Проверяем выбранный способ доставки и оплаты
            $shippingMethod = $request->input('shipping_method', 'pickup');
            $paymentMethod = $request->input('payment_method', 'card');
            $deliveryCost = $request->input('delivery_cost', 0);
            $finalPrice = $request->input('final_price', 0);

            // Сохраняем данные в сессии для использования на странице оформления
            session([
                        'shipping_method' => $shippingMethod,
                        'payment_method' => $paymentMethod,
                        'delivery_cost' => $deliveryCost,
                        'final_price' => $finalPrice
                    ]);

            // Просто перенаправляем на GET метод
            return redirect()->route('checkOut');
        }

        // Обрабатываем GET запрос (отображение страницы)
        $inventories = [];
        $totalPrice = 0;
        $itemsCount = 0;

        // Получаем данные из сессии, если они есть
        $shippingMethod = session('shipping_method', 'pickup');
        $paymentMethod = session('payment_method', 'card');
        $deliveryCost = (int)session('delivery_cost', 0);

        foreach ($cartItems as $item) {
            $inventory = Inventory::find($item->inventory_id);
            if ($inventory) {
                // Рассчитываем стоимость аренды для каждого товара
                $days = $item->rental_days ?? 1;
                $price = floatval($inventory->getBuyPrice() ?? 0) * $days;

                $inventories[] = [
                    'id' => $inventory->getId(),
                    'title' => $inventory->getTitle(),
                    'days' => $days,
                    'price' => $price,
                    'start_date' => $item->start_date,
                    'end_date' => $item->end_date,
                    'avatar' => $inventory->getAvatar()
                ];

                $totalPrice += $price;
                $itemsCount++;
            }
        }

        // Общая стоимость с учетом доставки
        $finalPrice = $totalPrice + $deliveryCost;

        // Получаем данные пользователя, если есть
        $userData = [
            'name' => $user->name ?? '',
            'surname' => $user->surname ?? '',
            'email' => $user->email ?? '',
            'phone' => $user->phone ?? '',
            'address' => $user->address ?? ''
        ];

        return view('shop/checkOut', [
            'inventories' => $inventories,
            'itemsCount' => $itemsCount,
            'subtotalPrice' => $totalPrice,
            'deliveryCost' => $deliveryCost,
            'finalPrice' => $finalPrice,
            'shippingMethod' => $shippingMethod,
            'paymentMethod' => $paymentMethod,
            'userData' => $userData
        ]);
    }

    public function processOrder(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userId = Auth::id();

        // Валидация данных
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'shipping_method' => 'required|in:pickup,delivery',
            'payment_method' => 'required|in:card,cash,transfer,company'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Дополнительные проверки в зависимости от метода доставки и оплаты
        if ($request->input('shipping_method') == 'delivery') {
            $deliveryValidator = Validator::make($request->all(), [
                'city' => 'required|string|max:255',
                'postal_code' => 'required|string|max:20',
                'address' => 'required|string|max:255'
            ]);

            if ($deliveryValidator->fails()) {
                return redirect()->back()
                    ->withErrors($deliveryValidator)
                    ->withInput();
            }
        }

        if ($request->input('payment_method') == 'company') {
            $companyValidator = Validator::make($request->all(), [
                'company_name' => 'required|string|max:255',
                'inn' => 'required|string|max:20',
                'legal_address' => 'required|string|max:255'
            ]);

            if ($companyValidator->fails()) {
                return redirect()->back()
                    ->withErrors($companyValidator)
                    ->withInput();
            }
        }

        // Получаем все товары из корзины
        $cartItems = $this->purchaseListRepository->all()
            ->where('user_id', $userId);

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Ваша корзина пуста');
        }

        // Генерируем уникальный ID для заказа
        $rentInHandId = 'RH-' . time() . rand(100, 999);

        // Создаем записи аренды для каждого товара
        $totalAmount = 0;
        $inventoriesData = [];

        try {
            DB::beginTransaction();

            foreach ($cartItems as $item) {
                $inventory = Inventory::find($item->inventory_id);

                if (!$inventory) {
                    continue;
                }

                // Получаем даты аренды и количество дней
                $startDate = $item->start_date ? new \DateTime($item->start_date) : new \DateTime();
                $endDate = $item->end_date ? new \DateTime($item->end_date) : (new \DateTime())->modify('+1 day');
                $rentalDays = $item->rental_days ?? 1;

                // Рассчитываем стоимость аренды
                $itemPrice = floatval($inventory->getBuyPrice() ?? 0) * $rentalDays;
                $totalAmount += $itemPrice;

                // Создаем запись аренды
                $rent = new Rents();
                $rent->setTimeStart($startDate);
                $rent->setTimeEnd($endDate);
                $rent->setUserId($userId);
                $rent->setInventoryId($inventory->getId());
                $rent->setTotalAmount($itemPrice);
                $rent->save();

                $inventoriesData[] = [
                    'id' => $inventory->getId(),
                    'title' => $inventory->getTitle(),
                    'days' => $rentalDays,
                    'price' => $itemPrice
                ];
            }

            // Добавляем стоимость доставки
            $deliveryCost = $request->input('delivery_cost', 0);
            $finalPrice = $totalAmount + $deliveryCost;

            // Создаем запись заказа (в зависимости от вашей структуры БД)
            // Здесь вы можете использовать свою модель Order, если она есть

            // Очищаем корзину пользователя
            foreach ($cartItems as $item) {
                $this->purchaseListRepository->delete($item->id);
            }

            DB::commit();

            // Сохраняем данные заказа в сессии для отображения на странице "Спасибо"
            session([
                        'order_id' => $rentInHandId,
                        'order_total' => $finalPrice,
                        'order_items' => $inventoriesData,
                        'shipping_method' => $request->input('shipping_method'),
                        'payment_method' => $request->input('payment_method')
                    ]);

            // Перенаправляем на страницу "Спасибо"
            return redirect()->route('thankyou')->with('success', 'Заказ успешно оформлен');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Ошибка при оформлении заказа: ' . $e->getMessage(), [
                'user_id' => $userId,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()
                ->with('error', 'Произошла ошибка при оформлении заказа. Пожалуйста, попробуйте еще раз.')
                ->withInput();
        }
    }

    public function fullWidthShop()
    {
        return view('shop/fullWidthShop');
    }

    public function productDetails(int $id)
    {
        $product = Inventory::findOrFail($id);
        $rents = $product->rents()->get(['id', 'time_start', 'time_end']);

        return view('shop.productDetails', compact('product', 'rents'));
    }

    public function productDetails2()
    {
        return view('shop/productDetails2');
    }

    public function shop()
    {
        return view('shop/shop');
    }

    public function sidebarLeft()
    {
        return view('shop/sidebarLeft');
    }

    public function sidebarRight()
    {
        return view('shop/sidebarRight');
    }

    public function variableProducts()
    {
        return view('shop/variableProducts');
    }

    public function groupedProducts(?string $category = null)
    {
        // Получаем значения фильтров из запроса
        $priceMin = request('price_min');
        $priceMax = request('price_max');
        $inStock = request('in_stock');
        $sort = request('sort');

        // Дополнительные фильтры для специфических категорий
        $powerMin = request('power_min');
        $powerMax = request('power_max');
        $tankMin = request('tank_min');
        $tankMax = request('tank_max');
        $starterType = request('starter_type');
        $manufacturers = request('manufacturer', []);

        if ($category === 'market') {
            // Начинаем с базового запроса для рыночных продуктов
            $query = Product::query();

            // Применяем фильтр по цене
            if ($priceMin !== null && $priceMax !== null) {
                $query->whereBetween('price', [$priceMin, $priceMax]);
            }

            // Применяем фильтр "в наличии"
            if ($inStock) {
                $query->where('count', '>', 0);
            }

            // Применяем сортировку
            if ($sort) {
                switch ($sort) {
                    case 'price_asc':
                        $query->orderBy('price', 'asc');
                        break;
                    case 'price_desc':
                        $query->orderBy('price', 'desc');
                        break;
                    case 'name_asc':
                        $query->orderBy('title', 'asc');
                        break;
                    case 'name_desc':
                        $query->orderBy('title', 'desc');
                        break;
                    default:
                        // По умолчанию без сортировки
                        break;
                }
            }

            // Получаем отфильтрованные продукты с пагинацией
            $products = $query->paginate(12)->withQueryString();
            $totalCount = Product::count(); // Общее количество всех продуктов

            return view('shop.marketProducts', compact('products', 'category', 'totalCount'));
        }

        // Обработка для инвентаря по категориям
        $categoryModel = Categories::where('title', $category)->first();

        if (!$categoryModel) {
            abort(404);
        }

        // Начинаем с базового запроса для инвентаря
        $query = Inventory::where('category_id', $categoryModel->id);

        // Применяем фильтр по цене
        // Примечание: предполагается, что buy_price - это поле в таблице или вычисляемое значение
        // Если это не так, нужно адаптировать запрос под вашу структуру данных
        if ($priceMin !== null && $priceMax !== null) {
            // Примечание: если getBuyPrice - это метод, который не отображается напрямую на столбец,
            // вам может потребоваться изменить этот запрос
            $query->whereBetween('buy_price', [$priceMin, $priceMax]);
        }

        // Применяем фильтр "в наличии"
        if ($inStock) {
            // Предполагается, что есть поле count или аналогичное для отслеживания наличия
            $query->where('count', '>', 0);
        }

        // Применяем фильтр по мощности
        if ($powerMin !== null && $powerMax !== null) {
            $query->whereBetween('power', [$powerMin, $powerMax]);
        }

        // Применяем фильтр по объему бака
        if ($tankMin !== null && $tankMax !== null) {
            $query->whereBetween('tank_capacity', [$tankMin, $tankMax]);
        }

        // Применяем фильтр по типу стартера
        if ($starterType) {
            $query->where('starter_type', $starterType);
        }

        // Применяем фильтр по производителю
        if (!empty($manufacturers)) {
            $query->whereIn('manufacturer', $manufacturers);
        }

        // Применяем сортировку
        if ($sort) {
            switch ($sort) {
                case 'price_asc':
                    $query->orderBy('buy_price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('buy_price', 'desc');
                    break;
                case 'name_asc':
                    $query->orderBy('title', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('title', 'desc');
                    break;
                default:
                    // По умолчанию без сортировки
                    break;
            }
        }

        // Получаем отфильтрованные продукты с пагинацией
        // withQueryString сохраняет параметры запроса при пагинации
        $products = $query->paginate(12)->withQueryString();
        $totalCount = Inventory::where('category_id', $categoryModel->id)->count();

        // В зависимости от категории, можно возвращать разные представления
        // Например, для категорий с дополнительными фильтрами, можно вернуть другой шаблон
        $viewName = 'shop.sidebarLeft';

        return view($viewName, compact('products', 'category', 'totalCount'));
    }
}