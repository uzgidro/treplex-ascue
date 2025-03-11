<?php
use yii\helpers\Url;
use yii\helpers\Html;
use common\models\Organization;
use frontend\controllers\Energy;
use common\models\SwitchName;

/** @var yii\web\View $this */
/** @var common\models\Switchs $model */

$switch = SwitchName::findOne($model->id_switch);

$this->title = $model->organization->name;
$organization = Organization::findOne($model->id_org);

switch ($organization['id']) {
    case 1 : $url = "urta-chirchiq"; break;//"Ўрта Чирчиқ ГЭСлар каскади" УК
    case 2 : $url = "chirchiq"; break;//"Чирчиқ ГЭСлар каскади" УК
    case 3 : $url = "qodiriya"; break;//"Қодирия ГЭСлар каскади" УК
    case 4 : $url = "toshkent"; break;//"Тошкент ГЭСлар каскади" УК
    case 5 : $url = "quyi-buzsuv"; break;//Қуйи Бўзсув ГЭСлар каскади" УК
    case 6 : $url = "farxod"; break;//"Фарход ГЭС" УК
    case 9 : $url = "samarqand"; break;//"Самарқанд ГЭСлар каскади" УК
    case 10 : $url = "andijon"; break;//"Андижон ГЭС" УК
    case 13 : $url = "shaxrixon"; break;//"Шахрихон ГЭСлар каскади" ФЛ
    case 14 : $url = "tuyamuyin"; break;//"Туямуйин ГЭС" УК (ГЭС-30)
    case 15 : $url = "tupolang"; break;//"Тўполанг ГЭСлар каскади" УК
    case 16 : $url = "oxangaron"; break;//"Оҳангарон ГЭС" УК
    case 19 : $url = "xisorak"; break;//"Ҳисорак ГЭС" УК (ГЭС-37)
    case 22 : $url = "kfk"; break;//"КФК КГЭСлар каскади" УК
    case 23 : $url = "qamchiq"; break;//"Қамчиқ КГЭС" УК (ГЭС-42)
    default: $url= null; break;
}
$energy = new Energy();

?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
            <li class="breadcrumb-item"><a href="<?= Url::to([$url.'/index']) ?>"><?= $organization['name'] ?></a></li>
            <li class="breadcrumb-item"><a href="<?= Url::to([$url.'/'.$energy->getUrl($model->id_organization)]) ?>"><?= Html::encode($this->title) ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $switch['name'] ?></li>
        </ol>
    </nav>

    <div class="pb-9">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center justify-content-between g-3 mb-3">
                    <div class="col-12 col-md-auto">
                        <h4 class="mb-0"><?= Html::encode($this->title. " / ".$switch['name']) ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0 g-md-4 g-xl-6">
            <div class="row g-0 g-md-4 g-xl-6">
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="sticky-leads-sidebar">
                        <div class="lead-details-offcanvas scrollbar phoenix-offcanvas phoenix-offcanvas-fixed">
                            <div class="card mb-3 h-100 w-100 overflow-hidden">
                                <div class="card-body">
                                    <div class="row align-items-center g-3 text-center text-xxl-start">
                                        <div class="col-12 col-xxl-auto">
                                            <img class="img-fluid h-100" src="<?= Url::to(['upload/switch/'.$model->photo]) ?>" alt="<?= $model->photo ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="lead-details-container">
                        <div class="scrollspy-example rounded-2" data-bs-spy="scroll">
                            <div class="mb-8" style="backdrop-filter: blur(5px);">
                                <h4 class="mb-4" id="scrollspyTask">Номинальные параметры генератора</h4>
                                <table class="table table-hover table-sm">
                                    <tbody>
                                    <tr>
                                        <td>Тип</td>
                                        <td><?= $model->type ?></td>
                                    </tr>
                                    <tr>
                                        <td>Год выпуска</td>
                                        <td><?= $model->year_of_issue ?> год.</td>
                                    </tr>
                                    <tr>
                                        <td>Год ввода в эксплуатацию</td>
                                        <td><?= $model->year_of_commissioning ?> год.</td>
                                    </tr>
                                    <tr>
                                        <td>Номинальное ток</td>
                                        <td><?= $model->nominal_current ?> A</td>
                                    </tr>
                                    <tr>
                                        <td>Номинальное напряжение</td>
                                        <td><?= $model->nominal_voltage ?> кВ</td>
                                    </tr>
                                    <tr>
                                        <td>Габаритные размеры, мм (дл. Х шир Х выс)</td>
                                        <td><?= $model->overall_dimensions ?></td>
                                    </tr>
                                    <tr>
                                        <td>Полная масса</td>
                                        <td><?= $model->gross_weight ?> кг</td>
                                    </tr>
                                    <tr>
                                        <td>Масса масла, (элегаза*)</td>
                                        <td><?= $model->gross_oil_weight ?> кг</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-xl-5">
                    <div class="lead-details-container">
                        <div class="scrollspy-example rounded-2" data-bs-spy="scroll">
                            <div class="mb-8">
                                <h3 class="mb-4">Информация о ремонте</h3>
                                <p class="mb-4">Информация не найдено!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
