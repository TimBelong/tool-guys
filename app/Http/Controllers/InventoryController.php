<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function getInventory(Request $request)
    {
        try {
            $client = new Client([
                                     'base_uri' => 'https://api.rentinhand.ru/v2/',
                                     'headers' => [
                                         'Accept' => 'application/json',
                                         'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9...' // Твой токен
                                     ],
                                 ]);

            // Параметры запроса
            $queryParams = [
                'page' => 1, // Первая страница
                'per_page' => 100, // Количество записей на страницу
                'search' => '12', // Поиск по строке
                'inventory_state_id' => [5709, 5708], // Массив ID состояний инвентаря
                'category_id' => [715027, 443442], // Массив ID категорий
                'point_id' => 141, // ID точки
                'empty_point_id' => true, // Фильтр по пустым точкам
            ];

            // Отправка GET-запроса
            $response = $client->get('inventory', ['query' => $queryParams]);

            // Декодируем ответ
            $data = json_decode($response->getBody(), true);

            // Возвращаем JSON
            return response()->json($data);
        } catch (RequestException $e) {
            return response()->json([
                                        'error' => 'Ошибка при получении инвентаря',
                                        'message' => $e->getMessage(),
                                    ], 500);
        }
    }
}

