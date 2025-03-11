<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Power;
use common\models\Organization;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */

$session = Yii::$app->session;
$date = $session->get('date');

$this->title = 'Ишлаб чиқариш';
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
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
// Получить все организации и подорганизации за один запрос
$organizations = Organization::find()
    ->select(['id', 'name', 'id_organization'])
    ->orderBy('id_organization')
    ->asArray()
    ->orderBy(['id'=> SORT_ASC])
    ->all();

// Создать массив для агрегации данных
$organizationData = [];
foreach ($organizations as $org) {
    if (!$org['id_organization']) {
        $organizationData[$org['id']] = [
            'name' => $org['name'],
            'sub' => []
        ];
    } else {
        $organizationData[$org['id_organization']]['sub'][$org['id']] = [
            'id' => $org['id'],
            'name' => $org['name'],
            'aggregates' => [1 => 0, 2 => 0, 3 => 0, 4 => 0],
            'total' => 0
        ];
    }
}

// Запрос для получения всех данных по мощности
$powerData = Power::find()
    ->select(['id_organization', 'id_aggregate', 'SUM(power) AS total_power'])
    ->where(['date' => $date])
    ->groupBy(['id_organization', 'id_aggregate'])
    ->asArray()
    ->all();

// Распределить данные мощности по организациям
foreach ($powerData as $power) {
    $orgId = $power['id_organization'];
    $aggregateId = $power['id_aggregate'];
    $totalPower = (int)$power['total_power'];

    foreach ($organizationData as &$parentOrg) {
        if (isset($parentOrg['sub'][$orgId])) {
            $parentOrg['sub'][$orgId]['aggregates'][$aggregateId] = $totalPower;
            $parentOrg['sub'][$orgId]['total'] += $totalPower;
        }
    }
}

// Отображение таблицы
$allAgg1 = $allAgg2 = $allAgg3 = $allAgg4 = $allPowers = 0;
?>
<table class="table table-sm table-bordered table-hover fs-9 glow-table"  style="background-color: #141824b0;">
    <thead>
    <tr>
        <th style="text-align: center;">ГЭС номи</th>
        <th style="text-align: center;">Агрегат-1</th>
        <th style="text-align: center;">Агрегат-2</th>
        <th style="text-align: center;">Агрегат-3</th>
        <th style="text-align: center;">Агрегат-4</th>
        <th style="text-align: center;width: 125px;">Жами</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($organizationData as $parentOrg): ?>
        <tr class="bg-primary bg-opacity-10 mb-1">
            <th style="text-align: center;" colspan="5"><?= $parentOrg['name'] ?></th>
            <th></th>
        </tr>
        <?php foreach ($parentOrg['sub'] as $subOrg): ?>
            <tr>
                <td><a href="<?= Url::to(['power', 'id' => $subOrg['id']]) ?>" style="color: #9fa6bc; padding-left: 10px;"><?= $subOrg['name'] ?></a></td>
                <td style="text-align: right;padding-right: 10px;"><?= number_format($subOrg['aggregates'][1], 0, ',', ' ') ?></td>
                <td style="text-align: right;padding-right: 10px;"><?= number_format($subOrg['aggregates'][2], 0, ',', ' ') ?></td>
                <td style="text-align: right;padding-right: 10px;"><?= number_format($subOrg['aggregates'][3], 0, ',', ' ') ?></td>
                <td style="text-align: right;padding-right: 10px;"><?= number_format($subOrg['aggregates'][4], 0, ',', ' ') ?></td>
                <td style="text-align: right;padding-right: 10px;"><?= number_format($subOrg['total'], 0, ',', ' ') ?></td>
            </tr>
            <?php
            $allAgg1 += $subOrg['aggregates'][1];
            $allAgg2 += $subOrg['aggregates'][2];
            $allAgg3 += $subOrg['aggregates'][3];
            $allAgg4 += $subOrg['aggregates'][4];
            $allPowers += $subOrg['total'];
            ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
    <tr>
        <th style="text-align: center;">Жами</th>
        <th style="text-align: center;"><?= number_format($allAgg1, 0, ',', ' ') ?></th>
        <th style="text-align: center;"><?= number_format($allAgg2, 0, ',', ' ') ?></th>
        <th style="text-align: center;"><?= number_format($allAgg3, 0, ',', ' ') ?></th>
        <th style="text-align: center;"><?= number_format($allAgg4, 0, ',', ' ') ?></th>
        <th style="text-align: center;"><?= number_format($allPowers, 0, ',', ' ') ?></th>
    </tr>
    </tfoot>
</table>
