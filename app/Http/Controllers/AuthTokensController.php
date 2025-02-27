<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class AuthController extends Controller
{
    public function getTokens(Request $request)
    {
        try {
            $client = new Client([
                                     'base_uri' => 'https://api.rentinhand.com/', // Уточни базовый URL
                                     'headers' => [
                                         'Accept' => 'application/json',
                                         'Content-Type' => 'application/json',
                                     ],
                                 ]);

            // Отправка POST-запроса с логином и паролем
            $response = $client->post('v2/oauth/personal-access-tokens', [
                'json' => [
                    'login' => 'test',      // Укажи свои реальные данные
                    'password' => '123123', // Укажи реальные данные
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            return response()->json($data);
        } catch (RequestException $e) {
            return response()->json([
                                        'error' => 'Ошибка при получении токенов',
                                        'message' => $e->getMessage(),
                                    ], 500);
        }
    }
}
