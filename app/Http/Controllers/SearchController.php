<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Поиск по инвентарю
     *
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Если запрос меньше 3 символов, возвращаем пустой результат
        if (strlen($query) < 2) {
            return response()->json([]);
        }

        // Выполняем поиск по названию и описанию инвентаря
        $results = Inventory::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('article_number', 'LIKE', "%{$query}%")
            ->limit(8) // Ограничиваем количество результатов
            ->get(['id', 'title', 'avatar', 'buy_price', 'category_id']);

        // Дополняем результаты названиями категорий
        $results->map(function ($item) {
            $item->category_title = $item->category ? $item->category->getTitle() : 'Без категории';
            $item->avatar_url = $item->getAvatar();
            $item->price_formatted = number_format($item->getBuyPrice(), 0, ',', ' ');
            $item->url = route('productDetails', ['id' => $item->id]);
            return $item;
        });

        return response()->json($results);
    }
}