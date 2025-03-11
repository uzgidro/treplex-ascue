<?php
use yii\helpers\Html;
use common\models\Organization;
use yii\bootstrap4\ActiveForm;
use common\models\Month;
use common\models\Year;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$date = Yii::$app->request->post('date');
if (empty($date)) {
    $date = date('Y-m-d');
}

$year = substr($date,0,4);
$month = Month::findOne(substr($date,6,2));
$day =substr($date,8,2);

$this->title = '"Ўзбекгидроэнерго" АЖ  тизимидаги гидроэлектростанцияларда электр энергия ишлаб чиқаришнинг бориши тўғрисида ойлик мониторинг.';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="container">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row justify-content-md-center">
        <div class="col-lg-2">
            <div class="form-group">
                <select class="custom-select" name="month">
                    <?php
                    $months = Month::find()->all();
                    foreach ($months as $item) {
                        if ($item['id'] == $month) {
                            echo "<option value='{$item['id']}' selected>{$item['month']}</option>";
                        } else {
                            echo "<option value='{$item['id']}'>{$item['month']}</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-lg-1">
            <div class="form-group">
                <select class="custom-select" name="year">
                    <?php
                    $years = Year::find()->all();
                    foreach ($years as $item) {
                        if ($year == $item['id']) {
                            echo "<option value='{$item['id']}' selected>{$item['year']}</option>";
                        } else {
                            echo "<option value='{$item['id']}'>{$item['year']}</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <?= Html::submitButton('<i class="fa fa-search"></i> Қидирув', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-bolt"></i> <?= Html::encode($this->title) ?></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                <i class="fas fa-expand"></i>
            </button>
        </div>
    </div>

    <div class="card-body p-0">
        <table class="table table-sm table-bordered table-hover">
            <thead class="bg-info">
            <tr>
                <td rowspan="3" style="vertical-align: middle;text-align: center;">ГЭСлар номи</td>
                <td rowspan="3" style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ўрнатилган қуввати, МВт</p></td>
                <td colspan="14" style="vertical-align: middle;text-align: center;"><?= $year ?> йил</td>
            </tr>
            <tr>
                <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="2"><p class="rotate">Режа</p></td>
                <td colspan="8" style="vertical-align: middle;text-align: -webkit-center;"><?= $month['month'] ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="2"><p class="rotate">Йил бошидан ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                <td colspan="2" style="text-align: center;">прогнозга<br /> нисбатан</td>
                <td colspan="2" style="text-align: center;">ўтган йилга<br /> нисбатан</td>
            </tr>
            <tr>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ой давомида сув сатҳининг ўзгариши, +/- см</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ой давомида сув омборидаги сув ҳажми, ўзгариши, +/- млн.м3 </p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">ой давомида сув омборига келган сув м3/с</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ой давомида сув омборидан чиқарилган сув м3/с </p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ой давомида ГЭС орқали чиқарилган сув млн м3/с</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ой давомида салт ташлама  сув млн м3/с</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">ишлаб чиқарилган электр энергия, млн.кВт.соат</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Тармоққа узатилган электр энергия, млн.кВт.соат</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">фоизда, %</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">фарқи, +/-</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">ўсиш суръати, %</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">фарқи, +/-</p></td>
            </tr>
            </thead>
            <tbody>
            <?php
            $organization = Organization::find()->where(['id_organization' => null])->orderBy(['sort' => SORT_ASC])->all();
            foreach ($organization as $item) :
                $subOrganizationCount = Organization::find()->where(['id_organization' => $item['id']])->count();

                if ($subOrganizationCount > 0) :
                    $sumQuwwat = Organization::find()->where(['id_organization' => $item['id']])->sum('quwwat');
                    ?>
                    <tr>
                        <th><?= $item['name'] ?></th>
                        <th style="text-align: center;"><?= number_format($sumQuwwat, 1, ',', ' ') ?></th>
                        <th style="text-align: center;">Reja</th>
                    </tr>
                    <?php
                    $subOrganization = Organization::find()->where(['id_organization' => $item['id']])->all();
                    foreach ($subOrganization as $result):
                        ?>
                        <tr>
                            <td><?= $result['name'] ?></td>
                            <td style="text-align: center;"><?= str_replace('.', ',', $result['quwwat']) ?></td>
                            <td style="text-align: center;">Reja</td>
                        </tr
                    <?php endforeach; ?>

                <?php else : ?>
                    <tr>
                        <th><?= $item['name'] ?></th>
                        <th style="text-align: center;"><?= number_format($item['quwwat'], 1, ',', ' ') ?></th>
                        <th style="text-align: center;">Reja</th>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

