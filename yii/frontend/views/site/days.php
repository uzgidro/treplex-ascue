<?php
use yii\helpers\Html;
use common\models\Organization;
use yii\helpers\Url;
use common\models\Month;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = '"Ўзбекгидроэнерго" АЖ тизимидаги гидроэлектростанцияларда электр энергия ишлаб чиқишнинг бориши тўғрисида кунлик мониторинг';
$this->params['breadcrumbs'][] = $this->title;

$date = Yii::$app->request->post('date');

if (empty($date)) {
    $date = date('Y-m-d');
}

$year = substr($date,0,4);
$month = substr($date,5,2);
$day = substr($date,8,2);
$day = $day < 10 ? substr($day, 1) : $day;

$monthName = Month::findOne($month);
?>
<div class="container-fluid">

    <div class="hero">
        <section class="hero-left">
            <div class="container-button">
                <?php $form = ActiveForm::begin(); ?>
                <div class="button-container">
                    <input type="date" id="date" name="date" value="<?= $date ?>">
                    <button class="btn btn-success" type="submit"><img src="<?= Url::to(['images/icons/search.png']) ?>" alt="search" width="25px;"></button>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="table-container">
                <table class="table table-hover table-bordered" border="1">
                    <thead>
                    <tr>
                        <td rowspan="3" style="vertical-align: middle;">ГЭСлар номи</td>
                        <td rowspan="3" style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ўрнатилган қуввати, МВт</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="3"><p class="rotate">Режа < ?= $reja_message ?></p></td>
                        <td colspan="19" style="vertical-align: middle;text-align: center;"><?= $year ?> йил</td>
                        <td colspan="9" style="vertical-align: middle;text-align: center;"><?= $year - 1 ?> йил</td>
                        <td rowspan="3" style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ўтган йилга нисбатан ўсиш суръати, %</p></td>
                        <td rowspan="3" style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">фарқи, +/-</p></td>
                        <td rowspan="3" style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">1 кВт * соат учун ўзига хос истеъмол</p></td>
                        <td rowspan="3" style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">сув омборидаги сув хажмини ўзгариши</p></td>
                    </tr>
                    <tr>
                        <td colspan="15" style="vertical-align: middle;text-align: -webkit-center;"><?= $day ?> <?= $monthName['month'] ?></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="2"><p class="rotate">Ой бошидан ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="2"><p class="rotate">Йил бошидан ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                        <td colspan="2" style="vertical-align: middle;text-align: center;">прогнозга<br /> нисбати</td>
                        <td colspan="7" style="vertical-align: middle;text-align: -webkit-center;"><?= $day ?> <?= $monthName['month'] ?></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="2"><p class="rotate">Ой бошидан ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="2"><p class="rotate">Йил бошидан ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Юқори бъефнинг сув сатҳи</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув сатҳининг ўзгариши, +/- см</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув омборидаги сув ҳажми, млн.м3</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув ҳажмининг ўзгариши, +/- млн.м3</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув босими, м</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув омборига келаётган сув м3/с</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув омборидан чиқаётган сув м3/с</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Агрегатлар орқали сув сарфи, м3/с</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Отбор, салт ташлама,  м3/с</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Агрегатлар сони</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ишлаётган агрегатлар сони</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Қуввати, МВт</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Қувват ўзгариши, +/- МВт</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">1 кунда ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">1 кунлик электр энергия ишлаб<br /> чиқарилишининг ўзгариши, +/-</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">фоизда, %</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">фарқи, +/-</p></td>

                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Юқори бъефнинг сув сатҳи</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув омборидаги сув ҳажми, млн.м3</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув босими, м</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув омборига келаётган сув м3/с</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Агрегатлар орқали сув сарфи, м3/с</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Қуввати, МВт</p></td>
                        <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">1 кунда ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $organizations = Organization::find()->where(['id_organization' => null])->all();
                    foreach ($organizations as $organization) :
                    ?>
                    <tr>
                        <td><?= $organization['name'] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    $childCount = Organization::find()->where(['id_organization' => $organization['id']])->count();
                    if ($childCount > 0) :
                    $child = Organization::find()->where(['id_organization' => $organization['id']])->all();
                    foreach ($child as $item) :
                    ?>
                    <tr>
                        <th><?= $item['name'] ?></th>
                        <th><?= $item['quwwat'] ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><?= $item['agregat'] ?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    endforeach;
                    endif;
                    endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>