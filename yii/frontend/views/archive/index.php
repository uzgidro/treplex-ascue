<?php
use yii\helpers\Url;

/** @var yii\web\View $this */
?>

<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-gradient-info">
            <div class="inner">
                <h3>Кунлик ишлаб чиқариш</h3>
            </div>
            <div class="icon">
                <i class="fa fa-bolt"></i>
            </div>
            <a href="<?= Url::to(['days'])?>" class="small-box-footer">батафсил <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-gradient-success">
            <div class="inner">
                <h3>Ойлик ишлаб чиқариш</h3>
            </div>
            <div class="icon">
                <i class="fa fa-bolt"></i>
            </div>
            <a href="<?= Url::to(['months'])?>" class="small-box-footer">батафсил <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
