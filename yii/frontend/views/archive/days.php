<?php
use yii\helpers\Html;
use common\models\Organization;
use yii\bootstrap4\ActiveForm;
use kartik\date\DatePicker;
use common\models\Month;
use common\models\Explotation;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$date = Yii::$app->request->post('date');
if (empty($date)) {
    $date = date('Y-m-d');
}

$year = substr($date,0,4);
$month = Month::findOne(substr($date,5,2));
$day = substr($date,8,2);
$dayAll = cal_days_in_month(CAL_GREGORIAN, $month['id'], $year);

$this->title = '"Ўзбекгидроэнерго" АЖ  тизимидаги гидроэлектростанцияларда электр энергия ишлаб чиқаришнинг бориши тўғрисида кунлик мониторинг.';
$this->params['breadcrumbs'][] = $this->title;


// Get the current date
try {
    $currentDate = new DateTime($date);
} catch (Exception $e) {

}
// Subtract one day from the current date to get yesterday's date
$yesterdayDate = $currentDate->modify('-1 day')->format('Y-m-d');
?>
<div class="container">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row justify-content-md-center">
        <div class="col-lg-2">
            <div class="form-group">
                <?php
                echo DatePicker::widget([
                    'name' => 'date',
                    'id' => 'date',
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'value' => $date,
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'yyyy-mm-dd'
                    ]
                ]);
                ?>
                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

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
                <td colspan="23" style="vertical-align: middle;text-align: center;"><?= $year ?> йил</td>
            </tr>
            <tr>
                <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="2"><p class="rotate">Режа <?= $year ?> йил Январ - <?= $month['month'] ?></p></td>
                <td colspan="18" style="vertical-align: middle;text-align: -webkit-center;"><?= $day ?> <?= $month['month'] ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="2"><p class="rotate">Ой бошидан ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;" rowspan="2"><p class="rotate">Йил бошидан ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                <td colspan="2" style="text-align: center;">прогнозга<br /> нисбати</td>
            </tr>
            <tr>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ҳарорат, об-ҳаво</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Юқори бъефнинг сув сатҳи</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув сатҳининг ўзгариши, +/- см</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув омборидаги сув ҳажми, млн.м3</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув ҳажмининг ўзгариши, +/- млн.м3</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув босими, м</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув омборига келаётган сув м3/с</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув омборига келаётган сув ўзгариши, +/- м3/с </p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Сув омборидан чиқаётган сув м3/с</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Шу жумладан ГЭСлар орқали, м3/с</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">ГЭСлар орқали сув сарфи ўзгариши, +/- м3/с</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Отбор, салт ташлама,  м3/с</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Агрегатлар сони</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Ишлаётган агрегатлар сони</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Қуввати, МВт</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">Қувват ўзгариши, +/- МВт</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">1 кунда ишлаб чиқарилган электр<br /> энергия, млн.кВт.соат</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">1 кунлик электр энергия ишлаб<br /> чиқарилишининг ўзгариши, +/-</p></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><p class="rotate">фоизда, %</p></td>
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
                    $sumAgregat = Organization::find()->where(['id_organization' => $item['id']])->sum('agregat');
                    $org = Organization::find()->where(['id_organization' => $item['id']])->all();
                    $allAgregat = 0; $allQuwwat = 0; $allQuwwatYesterday = 0; $allDayEnergy = 0; $allDayEnergyYesterday = 0; $allOyBoshidan = 0; $allYilBoshidan = 0;
                    foreach ($org as $value) {
                        $explotation = Explotation::find()->where(['id_organization' => $value['id']])->andWhere(['date' => $date])->one();
                        $explotationYesterday = Explotation::find()->where(['id_organization' => $value['id']])->andWhere(['date' => $yesterdayDate])->one();

                        $allAgregat += !empty($explotation['ishlayotgan_agregatlar_soni']) ? $explotation['ishlayotgan_agregatlar_soni'] : 0;
                        $allQuwwat += (!empty($explotation['day_energiya']) ? $explotation['day_energiya'] : 0) * 1000 / 24;
                        $allQuwwatYesterday += (!empty($explotationYesterday['day_energiya']) ? $explotationYesterday['day_energiya'] : 0) * 1000 / 24;
                        $allDayEnergy += !empty($explotation['day_energiya']) ? $explotation['day_energiya'] : 0;
                        $allDayEnergyYesterday += !empty($explotationYesterday['day_energiya']) ? $explotationYesterday['day_energiya'] : 0;
                        $allOyBoshidan += Explotation::find()->where(['id_organization' => $value['id']])->andWhere(['>=', 'date', $year."-".$month['id']."-01"])->andWhere(['<=', 'date', $year."-".$month['id']."-".$dayAll])->sum('day_energiya');
                        $allYilBoshidan += Explotation::find()->where(['id_organization' => $value['id']])->andWhere(['>=', 'date', $year."-01-01"])->andWhere(['<=', 'date', $year."-".$month['id']."-".$day])->sum('day_energiya');
                    }
                    $allquwwatUzgarishi = $allQuwwat - $allQuwwatYesterday;
                    $allEnergyUzgarish = $allDayEnergy - $allDayEnergyYesterday;

                    ?>
            <tr class="bg-secondary">
                <th><?= $item['name'] ?></th>
                <th style="text-align: center;"><?= number_format($sumQuwwat, 1, ',', ' ') ?></th>
                <th style="text-align: center;">0</th>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"></td>
                <th style="vertical-align: middle;text-align: -webkit-center;"><?= $sumAgregat ?></th>
                <th style="vertical-align: middle;text-align: -webkit-center;"><?= $allAgregat ?></th>
                <th style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($allQuwwat, 1, ',', ' ') ?></th>
                <th style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($allquwwatUzgarishi, 1, ',', ' ') ?></th>
                <th style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($allDayEnergy, 3, ',', ' ') ?></th>
                <th style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($allEnergyUzgarish, 3, ',', ' ') ?></th>
                <th style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($allOyBoshidan, 3, ',', ' ') ?></th>
                <th style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($allYilBoshidan, 3, ',', ' ') ?></th>
                <th style="vertical-align: middle;text-align: -webkit-center;">0</th>
                <th style="vertical-align: middle;text-align: -webkit-center;">0</th>
            </tr>
                <?php
                    $subOrganization = Organization::find()->where(['id_organization' => $item['id']])->all();
                    foreach ($subOrganization as $result):
                        $explotation = Explotation::find()->where(['id_organization' => $result['id']])->andWhere(['date' => $date])->one();
                        $explotationYesterday = Explotation::find()->where(['id_organization' => $result['id']])->andWhere(['date' => $yesterdayDate])->one();

                        $yesterday = date($date, strtotime("yesterday"));

                        switch ($explotation['obxavo_icon'] ?? 0) {
                            case 1 : $icon = 'skc_d.png'; break;
                            case 2 : $icon = 'ovc_ra.png'; break;
                            case 3 : $icon = 'bkn_d.png'; break;
                            default : $icon = null; break;
                        }
                        $obxavo = isset($explotation['obxavo']) && $explotation['obxavo'] != null ? number_format($explotation['obxavo'], 0)."ºС<img src='".Url::to(['images/icons/wather/'.$icon])."' alt='{$result['name']}' width='25'>" : null;

                        $suvSatxiningUzgarishi = ((!empty($explotation['yuqori_bef_suv_xajmi']) ? $explotation['yuqori_bef_suv_xajmi'] : 0) - (!empty($explotationYesterday['yuqori_bef_suv_xajmi']) ? $explotationYesterday['yuqori_bef_suv_xajmi'] : 0)) * 100;
                        $suvXajminingUzgarishi = (!empty($explotation['suv_ombori_suv_xajmi']) ? $explotation['suv_ombori_suv_xajmi'] : 0) - (!empty($explotationYesterday['suv_ombori_suv_xajmi']) ? $explotationYesterday['suv_ombori_suv_xajmi'] : 0);
                        $suvOmborKelayotganUzgarish = (!empty($explotation['suv_omboridan_kelayotgan_suv']) ? $explotation['suv_omboridan_kelayotgan_suv'] : 0) - (!empty($explotationYesterday['suv_omboridan_kelayotgan_suv']) ? $explotationYesterday['suv_omboridan_kelayotgan_suv'] : 0);
                        $gesOrqaliUzgarish = (!empty($explotation['geslar_orqali']) ? $explotation['geslar_orqali'] : 0) - (!empty($explotationYesterday['geslar_orqali']) ? $explotationYesterday['geslar_orqali'] : 0);

                        $quwwat = (!empty($explotation['day_energiya']) ? $explotation['day_energiya'] : 0) * 1000 / 24;
                        $quwwatUzgarishi = $quwwat - (!empty($explotationYesterday['day_energiya']) ? $explotationYesterday['day_energiya'] : 0) * 1000 / 24;
                        $oyBoshidan = Explotation::find()->where(['id_organization' => $result['id']])->andWhere(['>=', 'date', $year."-".$month['id']."-01"])->andWhere(['<=', 'date', $year."-".$month['id']."-".$dayAll])->sum('day_energiya');
                        $yilBoshidan = Explotation::find()->where(['id_organization' => $result['id']])->andWhere(['>=', 'date', $year."-01-01"])->andWhere(['<=', 'date', $year."-".$month['id']."-".$day])->sum('day_energiya');

                ?>
            <tr>
                <td><?= $result['name'] ?></td>
                <td style="text-align: center;"><?= str_replace('.', ',', $result['quwwat']) ?></td>
                <td style="text-align: center;">0</td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= $obxavo ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['yuqori_bef_suv_xajmi']) ? number_format($explotation['yuqori_bef_suv_xajmi'], 2, ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format($suvSatxiningUzgarishi, 0, ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['suv_ombori_suv_xajmi']) ? number_format($explotation['suv_ombori_suv_xajmi'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format($suvXajminingUzgarishi, 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['suv_bosimi']) ? number_format($explotation['suv_bosimi'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['suv_omboridan_kelayotgan_suv']) ? number_format($explotation['suv_omboridan_kelayotgan_suv'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format($suvOmborKelayotganUzgarish, 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['suv_omboridan_chiqayotgan_suv']) ? number_format($explotation['suv_omboridan_chiqayotgan_suv'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['geslar_orqali']) ? number_format($explotation['geslar_orqali'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format($gesOrqaliUzgarish, 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format(!empty($explotation['salt_tashlama']), 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= $result['agregat'] ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= !empty($explotation['ishlayotgan_agregatlar_soni']) ? $explotation['ishlayotgan_agregatlar_soni'] : 0 ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($quwwat, 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($quwwatUzgarishi, 1,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format(!empty($explotation['day_energiya']) ? $explotation['day_energiya'] : 0, 3,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format((!empty($explotation['day_energiya']) ? $explotation['day_energiya'] : 0) - (!empty($explotationYesterday['day_energiya']) ? $explotationYesterday['day_energiya'] : 0), 3,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($oyBoshidan, 3,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($yilBoshidan, 3,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;">0</td>
                <td style="vertical-align: middle;text-align: -webkit-center;">0</td>
            </tr>
                    <?php endforeach; ?>

                <?php else :
                    $explotation = Explotation::find()->where(['id_organization' => $item['id']])->andWhere(['date' => $date])->one();
                    $explotationYesterday = Explotation::find()->where(['id_organization' => $item['id']])->andWhere(['date' => $yesterdayDate])->one();

                    $yesterday = date($date, strtotime("yesterday"));

                    switch ($explotation['obxavo_icon'] ?? 0) {
                        case 1 : $icon = 'skc_d.png'; break;
                        case 2 : $icon = 'ovc_ra.png'; break;
                        case 3 : $icon = 'bkn_d.png'; break;
                        default : $icon = null; break;
                    }
                    $obxavo = isset($explotation['obxavo']) && $explotation['obxavo'] != null ? number_format($explotation['obxavo'], 0)."ºС<img src='".Url::to(['images/icons/wather/'.$icon])."' alt='{$item['name']}' width='25'>" : null;

                    $suvSatxiningUzgarishi = ((!empty($explotation['yuqori_bef_suv_xajmi']) ? $explotation['yuqori_bef_suv_xajmi'] : 0) - (!empty($explotationYesterday['yuqori_bef_suv_xajmi']) ? $explotationYesterday['yuqori_bef_suv_xajmi'] : 0)) * 100;
                    $suvXajminingUzgarishi = (!empty($explotation['suv_ombori_suv_xajmi']) ? $explotation['suv_ombori_suv_xajmi'] : 0) - (!empty($explotationYesterday['suv_ombori_suv_xajmi']) ? $explotationYesterday['suv_ombori_suv_xajmi'] : 0);
                    $suvOmborKelayotganUzgarish = (!empty($explotation['suv_omboridan_kelayotgan_suv']) ? $explotation['suv_omboridan_kelayotgan_suv'] : 0) - (!empty($explotationYesterday['suv_omboridan_kelayotgan_suv']) ? $explotationYesterday['suv_omboridan_kelayotgan_suv'] : 0);
                    $gesOrqaliUzgarish = (!empty($explotation['geslar_orqali']) ? $explotation['geslar_orqali'] : 0) - (!empty($explotationYesterday['geslar_orqali']) ? $explotationYesterday['geslar_orqali'] : 0);

                    $quwwat = (!empty($explotation['day_energiya']) ? $explotation['day_energiya'] : 0) * 1000 / 24;
                    $quwwatUzgarishi = $quwwat - (!empty($explotationYesterday['day_energiya']) ? $explotationYesterday['day_energiya'] : 0) * 1000 / 24;
                    $oyBoshidan = Explotation::find()->where(['id_organization' => $item['id']])->andWhere(['>=', 'date', $year."-".$month['id']."-01"])->andWhere(['<=', 'date', $year."-".$month['id']."-".$dayAll])->sum('day_energiya');
                    $yilBoshidan = Explotation::find()->where(['id_organization' => $item['id']])->andWhere(['>=', 'date', $year."-01-01"])->andWhere(['<=', 'date', $year."-".$month['id']."-".$day])->sum('day_energiya');
                    ?>
            <tr class="bg-secondary">
                <th><?= $item['name'] ?></th>
                <th style="text-align: center;"><?= number_format($item['quwwat'], 1, ',', ' ') ?></th>
                <th style="text-align: center;">0</th>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= $obxavo ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['yuqori_bef_suv_xajmi']) ? number_format($explotation['yuqori_bef_suv_xajmi'], 2, ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format($suvSatxiningUzgarishi, 0, ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['suv_ombori_suv_xajmi']) ? number_format($explotation['suv_ombori_suv_xajmi'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format($suvXajminingUzgarishi, 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['suv_bosimi']) ? number_format($explotation['suv_bosimi'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['suv_omboridan_kelayotgan_suv']) ? number_format($explotation['suv_omboridan_kelayotgan_suv'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format($suvOmborKelayotganUzgarish, 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['suv_omboridan_chiqayotgan_suv']) ? number_format($explotation['suv_omboridan_chiqayotgan_suv'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= !empty($explotation['geslar_orqali']) ? number_format($explotation['geslar_orqali'], 2,  ',', ' ') : 0 ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format($gesOrqaliUzgarish, 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: right;"><?= number_format(!empty($explotation['salt_tashlama']), 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= $item['agregat'] ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= !empty($explotation['ishlayotgan_agregatlar_soni']) ? $explotation['ishlayotgan_agregatlar_soni'] : 0 ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($quwwat, 2,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($quwwatUzgarishi, 1,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format(!empty($explotation['day_energiya']) ? $explotation['day_energiya'] : 0, 3,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format((!empty($explotation['day_energiya']) ? $explotation['day_energiya'] : 0) - (!empty($explotationYesterday['day_energiya']) ? $explotationYesterday['day_energiya'] : 0), 3,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($oyBoshidan, 3,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;"><?= number_format($yilBoshidan, 3,  ',', ' ') ?></td>
                <td style="vertical-align: middle;text-align: -webkit-center;">0</td>
                <td style="vertical-align: middle;text-align: -webkit-center;">0</td>
            </tr>
                <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

