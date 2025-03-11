<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ApiLogin $model */

$this->title = 'Update Api Login: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Api Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="api-login-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
