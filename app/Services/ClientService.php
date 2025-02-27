<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ClientService
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
                                       'base_uri' => 'https://api.rentinhand.ru/v2/',
                                       'headers' => [
                                           'Accept' => 'application/json',
                                           'Content-Type' => 'application/json',
                                       ],
                                   ]);
    }

    public function getAccessToken(): ?string
    {
        try {
            $authResponse = $this->client->post('login', [
                'json' => [
                    'login' => 'toolguys_Tim',
                    'password' => 'fjjkhdbflkqjwbrdn',
                ],
            ]);

            $authData = json_decode($authResponse->getBody()->getContents(), true);
            return $authData['data']['access_token'] ?? null;
        } catch (RequestException $e) {
            return null;
        }
    }

    public function getClient(): Client
    {
        return $this->client;
    }
}
