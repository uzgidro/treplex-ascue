<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Power;
use common\models\Organization;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var $id */

$organization = Organization::findOne($id);
$session = Yii::$app->session;
$date = $session->get('date');

$this->title = "{$organization['name']}да {$date} санада ишлаб чиқариш";
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['power/index']) ?>">Ишлаб чиқариш</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= Html::encode($this->title) ?></li>
    </ol>
</nav>

<div class="d-flex justify-content-center">
    <?php $form = ActiveForm::begin(['options' => ['class' => 'row gy-2 gx-3 align-items-center']]); ?>
    <div class="col-auto">
        <input class="form-control" name="date" type="date" value="<?= $date ?>">
    </div>
    <div class="col-auto">
        <button class="btn btn-sm" type="submit"><svg class="svg-inline--fa fa-searchengin text-body fs-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="searchengin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460 512" data-fa-i2svg=""><path fill="currentColor" d="M220.6 130.3l-67.2 28.2V43.2L98.7 233.5l54.7-24.2v130.3l67.2-209.3zm-83.2-96.7l-1.3 4.7-15.2 52.9C80.6 106.7 52 145.8 52 191.5c0 52.3 34.3 95.9 83.4 105.5v53.6C57.5 340.1 0 272.4 0 191.6c0-80.5 59.8-147.2 137.4-158zm311.4 447.2c-11.2 11.2-23.1 12.3-28.6 10.5-5.4-1.8-27.1-19.9-60.4-44.4-33.3-24.6-33.6-35.7-43-56.7-9.4-20.9-30.4-42.6-57.5-52.4l-9.7-14.7c-24.7 16.9-53 26.9-81.3 28.7l2.1-6.6 15.9-49.5c46.5-11.9 80.9-54 80.9-104.2 0-54.5-38.4-102.1-96-107.1V32.3C254.4 37.4 320 106.8 320 191.6c0 33.6-11.2 64.7-29 90.4l14.6 9.6c9.8 27.1 31.5 48 52.4 57.4s32.2 9.7 56.8 43c24.6 33.2 42.7 54.9 44.5 60.3s.7 17.3-10.5 28.5zm-9.9-17.9c0-4.4-3.6-8-8-8s-8 3.6-8 8 3.6 8 8 8 8-3.6 8-8z"></path></svg></button>
    </div>
    <?php ActiveForm::end(); ?>
</div>
<h1 class="display-6 mb-3"><?= Html::encode($this->title) ?></h1>
<?php
// Получаем все данные для заданной организации, даты и агрегатов одним запросом
$powers = Power::find()
    ->where(['date' => $date, 'id_organization' => $id])
    ->andWhere(['id_aggregate' => [1, 2, 3, 4]])
    ->asArray()
    ->all();

// Организуем данные для удобного доступа
$data = [];
foreach ($powers as $power) {
    $hour = $power['time']; // Предполагается, что 'time' - это час в формате 1-24
    $aggregate = $power['id_aggregate'];
    $data[$hour][$aggregate] = [
        'power' => $power['power'] ?? '',
        'water' => $power['water'] ?? '',
        'pressure' => $power['pressure'] ?? '',
    ];
}

// Переменные для общего подсчета
$all = 0; $allAgg1 = 0; $allAgg2 = 0; $allAgg3 = 0; $allAgg4 = 0;
?>
<table class="table table-sm table-bordered table-hover fs-9 glow-table" style="background-color: #141824b0;">
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center; vertical-align: middle;color: #fff;width: 80px;">Соат</th>
        <th colspan="3" style="text-align: center; vertical-align: middle;color: #fff;">Агрегат-1</th>
        <th colspan="3" style="text-align: center; vertical-align: middle;color: #fff;">Агрегат-2</th>
        <th colspan="3" style="text-align: center; vertical-align: middle;color: #fff;">Агрегат-3</th>
        <th colspan="3" style="text-align: center; vertical-align: middle;color: #fff;">Агрегат-4</th>
        <th rowspan="2" style="text-align: center; vertical-align: middle;color: #fff;width: 125px;">Жами</th>
    </tr>
    <tr>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Ишлаб чиқариш (кВт)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Турбиналар орқали сув оқими (m3/c)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Сув босими (м)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Ишлаб чиқариш (кВт)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Турбиналар орқали сув оқими (m3/c)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Сув босими (м)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Ишлаб чиқариш (кВт)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Турбиналар орқали сув оқими (m3/c)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Сув босими (м)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Ишлаб чиқариш (кВт)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Турбиналар орқали сув оқими (m3/c)</th>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Сув босими (м)</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 1; $i <= 24; $i++):
        $hourData = $data[$i] ?? [];
        $power1 = $hourData[1] ?? ['power' => '', 'water' => '', 'pressure' => ''];
        $power2 = $hourData[2] ?? ['power' => '', 'water' => '', 'pressure' => ''];
        $power3 = $hourData[3] ?? ['power' => '', 'water' => '', 'pressure' => ''];
        $power4 = $hourData[4] ?? ['power' => '', 'water' => '', 'pressure' => ''];

        $allPower = ($power1['power'] ?: 0) + ($power2['power'] ?: 0) + ($power3['power'] ?: 0) + ($power4['power'] ?: 0);
        $all += $allPower;
        $allAgg1 += $power1['power'] ?: 0;
        $allAgg2 += $power2['power'] ?: 0;
        $allAgg3 += $power3['power'] ?: 0;
        $allAgg4 += $power4['power'] ?: 0;
        ?>
        <tr>
            <td style="text-align: center; vertical-align: middle;"><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>:00:00</td>
            <td style="text-align: center;"><?= $power1['power'] !== '' ? number_format($power1['power'], 0, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power1['water'] !== '' ? number_format($power1['water'], 2, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power1['pressure'] !== '' ? number_format($power1['pressure'], 2, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power2['power'] !== '' ? number_format($power2['power'], 0, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power2['water'] !== '' ? number_format($power2['water'], 2, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power2['pressure'] !== '' ? number_format($power2['pressure'], 2, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power3['power'] !== '' ? number_format($power3['power'], 0, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power3['water'] !== '' ? number_format($power3['water'], 2, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power3['pressure'] !== '' ? number_format($power3['pressure'], 2, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power4['power'] !== '' ? number_format($power4['power'], 0, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power4['water'] !== '' ? number_format($power4['water'], 2, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $power4['pressure'] !== '' ? number_format($power4['pressure'], 2, ',', ' ') : '' ?></td>
            <td style="text-align: center;"><?= $allPower > 0 ? number_format($allPower, 0, ',', ' ') : '' ?></td>
        </tr>
    <?php endfor; ?>
    </tbody>
    <tfoot>
    <tr>
        <th style="text-align: center; vertical-align: middle;color: #fff;">Жами</th>
        <th colspan="3" style="text-align: center;vertical-align: middle;color: #fff;"><?= $allAgg1 > 0 ? number_format($allAgg1, 0, ',', ' ') : '' ?></th>
        <th colspan="3" style="text-align: center;vertical-align: middle;color: #fff;"><?= $allAgg2 > 0 ? number_format($allAgg2, 0, ',', ' ') : '' ?></th>
        <th colspan="3" style="text-align: center;vertical-align: middle;color: #fff;"><?= $allAgg3 > 0 ? number_format($allAgg3, 0, ',', ' ') : '' ?></th>
        <th colspan="3" style="text-align: center;vertical-align: middle;color: #fff;"><?= $allAgg4 > 0 ? number_format($allAgg4, 0, ',', ' ') : '' ?></th>
        <th style="text-align: center;vertical-align: middle;color: #fff;"><?= $all > 0 ? number_format($all, 0, ',', ' ') : '' ?></th>
    </tr>
    </tfoot>
</table>

