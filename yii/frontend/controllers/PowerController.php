<?php

namespace frontend\controllers;
use Yii;

class PowerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $session = Yii::$app->session;
        $session->open();

        $date = Yii::$app->request->post('date');
        if (empty($date)){
            $real = $session->get('date');
            $real ?? $session->set('date', date('Y-m-d'));
        } else {
            $session->set('date', $date);
        }

        return $this->render('index');
    }

    /**
     * @param int $id ID
     */
    public function actionPower(int $id): string
    {
        $session = Yii::$app->session;
        $session->open();

        $date = Yii::$app->request->post('date');
        if (empty($date)){
            $real = $session->get('date');
            $real ?? $session->set('date', date('Y-m-d'));
        } else {
            $session->set('date', $date);
        }

        return $this->render('power', ['id' => $id]);
    }
}
