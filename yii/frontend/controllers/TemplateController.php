<?php

namespace frontend\controllers;

class TemplateController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTwo()
    {
        return $this->render('two');
    }

    public function actionThree()
    {
        return $this->render('three');
    }

    public function actionSamarqand()
    {
        return $this->render('samarqand');
    }

    public function actionToshkent()
    {
        return $this->render('toshkent');
    }

    public function actionUrtaChirchiq()
    {
        return $this->render('urta-chirchiq');
    }
}
