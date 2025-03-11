<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ApiLogin $model */

$this->title = 'Create Api Login';
$this->params['breadcrumbs'][] = ['label' => 'Api Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="api-login-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
