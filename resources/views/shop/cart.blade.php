@extends('layout.layout')
@section('content')
    <style>
        .date-validation-error {
            animation: fadeInShake 0.5s ease-in-out;
        }

        @keyframes fadeInShake {
            0% { opacity: 0; transform: translateY(-5px); }
            50% { opacity: 1; transform: translateY(0); }
            60% { transform: translateX(-2px); }
            70% { transform: translateX(2px); }
            80% { transform: translateX(-2px); }
            90% { transform: translateX(0); }
            100% { opacity: 1; }
        }

        .rental-date-range {
            transition: border-color 0.3s ease;
        }
    </style>

    <!-- ..::Cart Section Start Here::.. -->
    <div class="rts-cart-section">
        <div class="container">
            <h4 class="section-title">Список товаров</h4>
            <div class="row justify-content-between">
                <div class="col-xl-7">
                    <div class="cart-table-area">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            @if(count($inventories) > 0)
                                @foreach($inventories as $inventory)
                                    <tr>
                                        <td style="vertical-align: middle; text-align: center; width: 15%;">
                                            <div class="product-thumb">
                                                <img src="{{ asset($inventory->getAvatar()) }}"
                                                     alt="{{ $inventory->getTitle() }}"
                                                     style="max-width: 100px; max-height: 100px; object-fit: contain;">
                                            </div>
                                        </td>
                                        <td style="vertical-align: middle; width: 45%;">
                                            <div class="product-title-area">
                                                <span class="pretitle"
                                                      style="font-size: 0.85rem; color: #666;">Аренда</span>
                                                <h4 class="product-title"
                                                    style="margin-top: 5px; font-size: 1.1rem; font-weight: 600;">{{ $inventory->getTitle() }}</h4>

                                                <!-- Rental duration selector -->
                                                <div class="rental-duration-selector" style="margin-top: 10px;">
                                                    <div class="date-range-field"
                                                         style="display: flex; align-items: center; margin-bottom: 5px;">
                                                        <label style="margin-right: 10px; font-size: 0.9rem; color: #666;">Период
                                                            аренды:</label>
                                                        <input type="text" class="rental-date-range"
                                                               data-inventory-id="{{ $inventory->getId() }}"
                                                               data-daily-price="{{ $inventory->getBuyPrice() }}"
                                                               placeholder="Выберите даты"
                                                               style="flex-grow: 1; padding: 6px 10px; border: 1px solid #ddd; border-radius: 4px;">
                                                    </div>
                                                    <div class="rental-info" style="font-size: 0.85rem; color: #666;">
                                                        <span class="rental-days">0 дн.</span> ×
                                                        <span class="daily-price">{{ number_format($inventory->getBuyPrice(), 0, ',', ' ') }} ₽</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="vertical-align: middle; text-align: center; width: 20%;">
                                        <span class="product-price" data-base-price="{{ $inventory->getBuyPrice() }}"
                                              style="font-weight: bold; font-size: 1.1rem;">
                                            {{ number_format($inventory->getBuyPrice(), 0, ',', ' ') }} ₽
                                        </span>
                                        </td>
                                        <td style="vertical-align: middle; text-align: center; width: 20%;">
                                            <form action="{{ route('shop.remove-from-cart', ['id' => $inventory->getId()]) }}"
                                                  method="POST" class="remove-from-cart-form" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="rental_days" class="rental-days-input"
                                                       value="1">
                                                <input type="hidden" name="start_date" class="start-date-input"
                                                       value="">
                                                <input type="hidden" name="end_date" class="end-date-input" value="">
                                                <button type="submit" class="remove-btn"
                                                        style="padding: 8px 15px; border-radius: 4px;">Удалить
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center" style="padding: 30px 15px;">
                                        <p style="font-size: 1.1rem; color: #666;">Ваша корзина пуста</p>
                                        <a href="{{ route('indexFive') }}" class="btn btn-primary mt-3"
                                           style="padding: 10px 20px;">
                                            <i class="fal fa-long-arrow-left mr-2"></i>Начать покупки
                                        </a>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        <div class="coupon-apply"
                             style="margin-top: 20px; padding: 15px; background-color: #f9f9f9; border-radius: 5px;">
                            <span class="coupon-text" style="font-weight: 600; margin-right: 10px;">Промокод:</span>
                            <div class="apply-input" style="display: flex; align-items: center;">
                                <input type="text" placeholder="Введите промо код"
                                       style="flex-grow: 1; padding: 10px; border: 1px solid #ddd; border-radius: 4px 0 0 4px;">
                                <button type="submit" class="apply-btn"
                                        style="padding: 10px 15px; border-radius: 0 4px 4px 0;">Применить
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="checkout-box" style="border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                        <div class="checkout-box-inner" style="padding: 20px;">
                            <div class="subtotal-area"
                                 style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid #eee;">
                                <span class="title" style="font-size: 1rem; color: #666;">Стоимость товаров</span>
                                <span class="subtotal-price" style="font-weight: 600;">{{ number_format($totalPrice, 0, ',', ' ') }} ₽</span>
                            </div>

                            <!-- Способ доставки -->
                            <div class="shipping-check" style="padding: 15px 0; border-bottom: 1px solid #eee;">
                                <h6 style="font-size: 1rem; margin-bottom: 12px; color: #333;">Способ получения:</h6>
                                <div class="check-options">
                                    <div class="form-group"
                                         style="display: flex; align-items: center; margin-bottom: 10px;">
                                        <input type="radio" id="delivery" name="shipping_method" value="delivery" style="margin-right: 10px;">
                                        <label class="check-title" for="delivery"
                                               style="margin-bottom: 0; cursor: pointer;">Доставка</label>
                                    </div>
                                    <div class="form-group" style="display: flex; align-items: center;">
                                        <input type="radio" id="pickup" name="shipping_method" value="pickup" style="margin-right: 10px;" checked>
                                        <label class="check-title" for="pickup"
                                               style="margin-bottom: 0; cursor: pointer;">Самовывоз</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Стоимость доставки (показывается только при выборе доставки) -->
                            <div id="delivery-cost-row" class="delivery-cost" style="display: none; padding: 15px 0; border-bottom: 1px solid #eee;">
                                <div style="display: flex; justify-content: space-between;">
                                    <span class="title" style="font-size: 1rem; color: #666;">Доставка</span>
                                    <span class="delivery-price" style="font-weight: 600;">1 000 ₽</span>
                                </div>
                            </div>

                            <!-- Способ оплаты -->
                            <div class="payment-method" style="padding: 15px 0; border-bottom: 1px solid #eee;">
                                <h6 style="font-size: 1rem; margin-bottom: 12px; color: #333;">Способ оплаты:</h6>
                                <div class="payment-options">
                                    {{--                                    <div class="form-group" style="display: flex; align-items: center; margin-bottom: 10px;">--}}
                                    {{--                                        <input type="radio" name="payment_method" id="card" value="card" style="margin-right: 10px;" checked>--}}
                                    {{--                                        <label class="check-title" for="card" style="margin-bottom: 0; cursor: pointer;">--}}
                                    {{--                                            Банковской картой онлайн--}}
                                    {{--                                        </label>--}}
                                    {{--                                    </div>--}}

                                    <div class="form-group" style="display: flex; align-items: center; margin-bottom: 10px;">
                                        <input type="radio" name="payment_method" id="cash" value="cash" style="margin-right: 10px;" checked>
                                        <label class="check-title" for="cash" style="margin-bottom: 0; cursor: pointer;">
                                            Наличными при получении
                                        </label>
                                    </div>

                                    <div class="form-group" style="display: flex; align-items: center; margin-bottom: 10px;">
                                        <input type="radio" name="payment_method" id="transfer" value="transfer" style="margin-right: 10px;">
                                        <label class="check-title" for="transfer" style="margin-bottom: 0; cursor: pointer;">
                                            Банковским переводом
                                        </label>
                                    </div>

                                    <div class="form-group" style="display: flex; align-items: center; margin-bottom: 0;">
                                        <input type="radio" name="payment_method" id="company" value="company" style="margin-right: 10px;">
                                        <label class="check-title" for="company" style="margin-bottom: 0; cursor: pointer;">
                                            Счет для компании
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="total-area"
                                 style="display: flex; justify-content: space-between; padding: 20px 0; border-bottom: 1px solid #eee;">
                                <span class="title" style="font-size: 1.2rem; font-weight: 600;">Всего</span>
                                <span class="total-price" style="font-size: 1.2rem; font-weight: 700; color: #e63946;">{{ number_format($totalPrice, 0, ',', ' ') }} ₽</span>
                            </div>
                        </div>
                        <div style="padding: 20px;">
                            <form action="{{ route('checkOut') }}" method="POST" id="checkout-form">
                                @csrf
                                <input type="hidden" name="shipping_method" id="shipping_method_input" value="pickup">
                                <input type="hidden" name="payment_method" id="payment_method_input" value="cash">
                                <input type="hidden" name="delivery_cost" id="delivery_cost_input" value="0">
                                <input type="hidden" name="final_price" id="final_price_input" value="{{ $totalPrice }}">
                                <button type="submit" class="procced-btn"
                                        style="display: block; width: 100%; padding: 12px; text-align: center; background-color: #28a745; color: white; border-radius: 4px; margin-bottom: 15px; font-weight: 600; border: none; cursor: pointer;">Перейти к оплате</button>
                            </form>
                            <a href="{{ route('indexFive') }}" class="continue-shopping"
                               style="display: block; text-align: center; padding: 10px; color: #666; text-decoration: none;">
                                <i class="fal fa-long-arrow-left" style="margin-right: 5px;"></i>Вернуться к покупкам
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Cart Section End Here::.. -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Document loaded');
            const rentalDateRanges = document.querySelectorAll('.rental-date-range');

            // Константы
            const DELIVERY_COST = 1000;
            let subTotalPrice = {{ $totalPrice }}; // Начальная стоимость товаров
            let deliveryCost = 0; // Начальная стоимость доставки

            function calculateTotalPrice() {
                let itemsPrice = 0;

                document.querySelectorAll('.product-price').forEach(priceEl => {
                    const price = parseFloat(priceEl.textContent.replace(/\s+/g, '').replace('₽', '').replace(',', '.'));
                    itemsPrice += price;
                });

                // Обновляем подытог (только стоимость товаров)
                subTotalPrice = itemsPrice;
                document.querySelectorAll('.subtotal-price').forEach(el => {
                    el.textContent = new Intl.NumberFormat('ru-RU').format(subTotalPrice) + ' ₽';
                });

                // Рассчитываем и обновляем общую стоимость (товары + доставка)
                const totalPrice = subTotalPrice + deliveryCost;
                document.querySelectorAll('.total-price').forEach(el => {
                    el.textContent = new Intl.NumberFormat('ru-RU').format(totalPrice) + ' ₽';
                });

                // Обновляем скрытые поля формы
                document.getElementById('final_price_input').value = totalPrice;

                return totalPrice;
            }

            function updateCartItemDates(inventoryId, startDate, endDate, days) {
                const formData = new FormData();
                formData.append('inventory_id', inventoryId);
                formData.append('start_date', startDate);
                formData.append('end_date', endDate);
                formData.append('days', days);
                formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

                // Находим элемент dateRange
                const dateRangeEl = document.querySelector(`.rental-date-range[data-inventory-id="${inventoryId}"]`);
                const row = dateRangeEl.closest('tr');

                // Удаляем предыдущие сообщения об ошибках
                const existingError = row.querySelector('.date-validation-error');
                if (existingError) {
                    existingError.remove();
                }

                fetch('/shop/update-cart-dates', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log('Cart dates updated successfully');

                            // Обновляем отображение цены на странице
                            if (data.totalPrice !== undefined) {
                                document.querySelectorAll('.subtotal-price').forEach(el => {
                                    el.textContent = new Intl.NumberFormat('ru-RU').format(data.totalPrice) + ' ₽';
                                });

                                // Обновляем общую стоимость с учетом доставки
                                const deliveryCost = parseInt(document.getElementById('delivery_cost_input').value) || 0;
                                const totalPrice = data.totalPrice + deliveryCost;

                                document.querySelectorAll('.total-price').forEach(el => {
                                    el.textContent = new Intl.NumberFormat('ru-RU').format(totalPrice) + ' ₽';
                                });

                                document.getElementById('final_price_input').value = totalPrice;
                            }
                        } else {
                            console.error('Failed to update cart dates:', data.message);

                            // Добавляем сообщение об ошибке
                            const errorDiv = document.createElement('div');
                            errorDiv.className = 'date-validation-error';
                            errorDiv.style.color = '#e63946';
                            errorDiv.style.fontSize = '0.85rem';
                            errorDiv.style.marginTop = '5px';
                            errorDiv.textContent = data.message || 'Ошибка при выборе дат аренды';

                            // Вставляем сообщение об ошибке после поля с датами
                            const dateRangeField = dateRangeEl.closest('.date-range-field');
                            dateRangeField.parentNode.insertBefore(errorDiv, dateRangeField.nextSibling);
                        }
                    })
                    .catch(error => {
                        console.error('Error updating cart dates:', error);

                        // Добавляем общее сообщение об ошибке
                        const errorDiv = document.createElement('div');
                        errorDiv.className = 'date-validation-error';
                        errorDiv.style.color = '#e63946';
                        errorDiv.style.fontSize = '0.85rem';
                        errorDiv.style.marginTop = '5px';
                        errorDiv.textContent = 'Произошла ошибка при обновлении дат аренды';

                        // Вставляем сообщение об ошибке после поля с датами
                        const dateRangeField = dateRangeEl.closest('.date-range-field');
                        dateRangeField.parentNode.insertBefore(errorDiv, dateRangeField.nextSibling);
                    });
            }

            rentalDateRanges.forEach(dateRange => {
                const inventoryId = dateRange.dataset.inventoryId;
                const dailyPrice = parseFloat(dateRange.dataset.dailyPrice);
                const productPriceEl = dateRange.closest('tr').querySelector('.product-price');
                const rentalDaysEl = dateRange.closest('.rental-duration-selector').querySelector('.rental-days');
                const rentalDaysInput = dateRange.closest('tr').querySelector('.rental-days-input');
                const startDateInput = dateRange.closest('tr').querySelector('.start-date-input');
                const endDateInput = dateRange.closest('tr').querySelector('.end-date-input');

                const unavailableDates = [];

                flatpickr(dateRange, {
                    mode: "range",
                    minDate: "today",
                    locale: "ru",
                    dateFormat: "d.m.Y",
                    disable: unavailableDates,
                    onChange: function (selectedDates, dateStr) {
                        if (selectedDates.length === 2) {
                            const startDate = selectedDates[0];
                            const endDate = selectedDates[1];

                            const diffTime = Math.abs(endDate - startDate);
                            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;

                            rentalDaysEl.textContent = diffDays + ' дн.';

                            const newPrice = dailyPrice * diffDays;

                            productPriceEl.textContent = new Intl.NumberFormat('ru-RU').format(newPrice) + ' ₽';

                            rentalDaysInput.value = diffDays;
                            startDateInput.value = startDate.toISOString().split('T')[0];
                            endDateInput.value = endDate.toISOString().split('T')[0];

                            // Убираем красный бордер, если он был
                            dateRange.style.border = '1px solid #ddd';

                            // Удаляем сообщение об ошибке, если оно есть
                            const errorDiv = dateRange.closest('.rental-duration-selector').querySelector('.date-validation-error');
                            if (errorDiv) {
                                errorDiv.remove();
                            }

                            calculateTotalPrice();

                            updateCartItemDates(
                                inventoryId,
                                startDate.toISOString().split('T')[0],
                                endDate.toISOString().split('T')[0],
                                diffDays
                            );
                        }
                    }
                });
            });

            // Обработка выбора способа доставки
            const shippingMethods = document.querySelectorAll('input[name="shipping_method"]');
            const shippingMethodInput = document.getElementById('shipping_method_input');
            const deliveryCostRow = document.getElementById('delivery-cost-row');
            const deliveryCostInput = document.getElementById('delivery_cost_input');

            shippingMethods.forEach(method => {
                method.addEventListener('change', function() {
                    // Обновляем скрытое поле для формы
                    shippingMethodInput.value = this.value;

                    // Обновляем стоимость доставки
                    if (this.value === 'delivery') {
                        deliveryCost = DELIVERY_COST;
                        deliveryCostRow.style.display = 'block';
                        deliveryCostInput.value = deliveryCost;
                    } else {
                        deliveryCost = 0;
                        deliveryCostRow.style.display = 'none';
                        deliveryCostInput.value = 0;
                    }

                    // Пересчитываем общую стоимость
                    calculateTotalPrice();
                });
            });

            // Обработка выбора способа оплаты
            const paymentMethods = document.querySelectorAll('input[name="payment_method"]');
            const paymentMethodInput = document.getElementById('payment_method_input');

            paymentMethods.forEach(method => {
                method.addEventListener('change', function() {
                    // Обновляем скрытое поле для формы
                    paymentMethodInput.value = this.value;
                });
            });

            // Валидация формы перед отправкой
            document.getElementById('checkout-form').addEventListener('submit', function(event) {
                // Проверяем, есть ли товары в корзине с пустыми датами
                const emptyDates = [];

                // Сначала удаляем все существующие сообщения об ошибках
                document.querySelectorAll('.date-validation-error').forEach(errorDiv => {
                    errorDiv.remove();
                });

                // Находим все товары и проверяем даты
                document.querySelectorAll('.rental-date-range').forEach(dateRange => {
                    const row = dateRange.closest('tr');
                    const inventoryId = dateRange.dataset.inventoryId;
                    const startDateInput = row.querySelector('.start-date-input');
                    const endDateInput = row.querySelector('.end-date-input');

                    // Проверяем, что даты выбраны
                    if (!startDateInput.value || !endDateInput.value) {
                        emptyDates.push(inventoryId);

                        // Создаем сообщение об ошибке
                        const errorDiv = document.createElement('div');
                        errorDiv.className = 'date-validation-error';
                        errorDiv.style.color = '#e63946';
                        errorDiv.style.fontSize = '0.85rem';
                        errorDiv.style.marginTop = '5px';
                        errorDiv.style.fontWeight = '500';
                        errorDiv.textContent = 'Необходимо выбрать даты аренды';

                        // Добавляем визуальное выделение селектора
                        dateRange.style.border = '1px solid #e63946';

                        // Вставляем сообщение после поля с датами
                        const dateRangeField = dateRange.closest('.date-range-field');
                        dateRangeField.parentNode.insertBefore(errorDiv, dateRangeField.nextSibling);
                    }
                });

                // Если есть товары с пустыми датами, останавливаем отправку формы
                if (emptyDates.length > 0) {
                    event.preventDefault();

                    // Прокручиваем страницу к первому товару с пустыми датами
                    const firstEmptyDateRow = document.querySelector(`.rental-date-range[data-inventory-id="${emptyDates[0]}"]`).closest('tr');
                    firstEmptyDateRow.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        });
    </script>
@endsection