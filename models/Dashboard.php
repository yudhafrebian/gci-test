<?php

namespace app\models;

use yii\base\Model;
use yii\httpclient\Client;

class Dashboard extends Model
{
    public static function getDashboard()
    {
        $client = new Client();
        $response = $client->get('https://gdaily.id/api-test/dashboard')->send();

        if (!$response->isOk) {
            return [];
        }

        return $response->data;
    }

    public static function getKategori()
    {
        $client = new Client();
        $response = $client->get('https://gdaily.id/api-test/dashboard-kategori')->send();

        if (!$response->isOk || !isset($response->data['data'])) {
            return [];
        }

        return $response->data['data'];
    }
}
