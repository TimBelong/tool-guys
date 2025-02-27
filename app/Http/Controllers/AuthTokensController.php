<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class AuthTokensController extends Controller
{
    public function getTokens(Request $request)
    {
        try {
            $client = new Client([
                                     'base_uri' => 'https://api.rentinhand.ru/v2/', // Базовый URL API
                                     'headers' => [
                                         'Accept' => 'application/json',
                                         'Content-Type' => 'application/json',
                                     ],
                                 ]);

            $response = $client->post('login', [
                'json' => [
                    'login' => 'toolguys_Tim',
                    'password' => 'fjjkhdbflkqjwbrdn',
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

