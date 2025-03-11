<?php

namespace frontend\controllers;

class ArchiveController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDays()
    {
        return $this->render('days');
    }

    public function actionMonths()
    {
        return $this->render('months');
    }

}
