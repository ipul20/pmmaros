<?php

namespace App\Services;

use GuzzleHttp\Client;

class AppSheetService
{
    protected $client;
    protected $apiKey;
    protected $appId;
    protected $baseUri;

    public function __construct()
    {
        $this->client = new Client([
           'base_uri' => 'https://api.appsheet.com/api/v2/apps/',
        ]);

        $this->apiKey = 'V2-MC9Af-HE5PD-z6tDn-hFX6V-agKbF-PUG7G-GGuNX-bQpeP';
        $this->appId = '4f6023d7-ec42-43e5-a6dc-e3f46bbafac7';
    }

    public function getData($tableName)
    {
        $response = $this->client->request('POST', "{$this->appId}/tables/{$tableName}/Action", [
            'headers' => [
                'ApplicationAccessKey' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
            "Action" => "Find",
            "Properties" => [],
            "Rows" => []
            ],
        ]);

        return $response;
    }

    public function addData($tableName, $data)
    {
        $response = $this->client->request('POST', "{$this->appId}/tables/{$tableName}/data", [
            'headers' => [
                'ApplicationAccessKey' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'Action' => 'Add',
                'Properties' => [],
                'Rows' => [$data]
            ]
        ]);

        return json_decode($response->getBody(), true);
    }

    public function updateData($tableName, $data)
    {
        $response = $this->client->request('POST', "{$this->appId}/tables/{$tableName}/data", [
            'headers' => [
                'ApplicationAccessKey' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'Action' => 'Edit',
                'Properties' => [],
                'Rows' => [$data]
            ]
        ]);

        return json_decode($response->getBody(), true);
    }

    public function deleteData($tableName, $keyColumn, $keyValue)
    {
        $response = $this->client->request('POST', "{$this->appId}/tables/{$tableName}/data", [
            'headers' => [
                'ApplicationAccessKey' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'Action' => 'Delete',
                'Properties' => [],
                'Rows' => [
                    [$keyColumn => $keyValue]
                ]
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}