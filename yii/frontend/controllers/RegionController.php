<?php

namespace frontend\controllers;

class RegionController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSamarqand()
    {
        return $this->render('samarqand');
    }

}
