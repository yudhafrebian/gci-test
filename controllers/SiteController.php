<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Dashboard;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $dashboard = Dashboard::getDashboard();

        return $this->render('index', [
            'program'  => $dashboard['baner-program']['data'] ?? [],
            'best'     => $dashboard['baner-best-seller']['data'] ?? [],
            'brand'    => $dashboard['brand']['data'] ?? [],
            'kategori' => Dashboard::getKategori()
        ]);
    }
}
