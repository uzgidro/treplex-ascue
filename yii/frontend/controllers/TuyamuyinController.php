<?php

namespace frontend\controllers;

class TuyamuyinController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGes30()
    {
        return $this->render('ges30');
    }
}
