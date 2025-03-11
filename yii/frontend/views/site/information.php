<?php
use yii\helpers\Url;
use yii\helpers\Html;
use common\models\Organization;
use common\models\Repair;
use common\models\TypeRepair;
use frontend\controllers\Energy;

/** @var yii\web\View $this */
/** @var common\models\Informations $model */

switch ($model->aggregate) {
    case 1 : $mes = "Гидроагрегат-1"; break;
    case 2 : $mes = "Гидроагрегат-2"; break;
    case 3 : $mes = "Гидроагрегат-3"; break;
    case 4 : $mes = "Гидроагрегат-4"; break;
    case 5 : $mes = "Гидроагрегат-5"; break;
    case 6 : $mes = "Гидроагрегат-6"; break;
    default: $mes = null;
}

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
        <li class="breadcrumb-item active" aria-current="page"><?= $mes ?></li>
    </ol>
</nav>

<div class="pb-9">
    <div class="row">
        <div class="col-12">
            <div class="row align-items-center justify-content-between g-3 mb-3">
                <div class="col-12 col-md-auto">
                    <h3 class="mb-0"><?= Html::encode($this->title. " / ".$mes) ?></h3>
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
                                        <img class="img-fluid h-100" src="<?= Url::to(['upload/'.$model->phoro_aggregate]) ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="lead-details-container">
                    <div class="scrollspy-example rounded-2" data-bs-spy="scroll">
                        <div class="mb-8" style="backdrop-filter: blur(5px);">
                            <h3 class="mb-4" id="scrollspyTask">Номинальные параметры генератора</h3>
                            <table class="table table-hover table-sm">
                                <tbody>
                                <tr>
                                    <td>Тип генератора</td>
                                    <td><?= $model->type_generation ?></td>
                                </tr>
                                <tr>
                                    <td>Год выпуска</td>
                                    <td><?= $model->year_aggregate ?> год.</td>
                                </tr>
                                <tr>
                                    <td>Год ввода в эксплуатацию</td>
                                    <td><?= $model->year_exp ?> год.</td>
                                </tr>
                                <tr>
                                    <td>Активная мощность</td>
                                    <td><?= $model->active_power ?> МВт</td>
                                </tr>
                                <tr>
                                    <td>Напряжение генератора</td>
                                    <td><?= $model->naprijeniya_generator ?> кВ</td>
                                </tr>
                                <tr>
                                    <td>Частота генератора</td>
                                    <td><?= $model->chastota ?> Гц</td>
                                </tr>
                                <tr>
                                    <td>Ток статора</td>
                                    <td><?= $model->tok_statora ?> А</td>
                                </tr>
                                <tr>
                                    <td>Напряжение ротора</td>
                                    <td><?= $model->naprijeniya_rotora ?> В</td>
                                </tr>
                                <tr>
                                    <td>Ток ротора</td>
                                    <td><?= $model->tok_rotora ?> А</td>
                                </tr>
                                <tr>
                                    <td>Частота вращения генератора</td>
                                    <td><?= $model->vrasheniya_generatora ?> об/мин</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="sticky-leads-sidebar">
                    <div class="lead-details-offcanvas scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row align-items-center g-3 text-center text-xxl-start">
                                    <div class="col-12 col-xxl-auto">
                                        <img class="img-fluid" src="<?= Url::to(['upload/'.$model->photo_turbin]) ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="lead-details-container">
                    <div class="scrollspy-example rounded-2" data-bs-spy="scroll">
                        <div class="mb-8" style="backdrop-filter: blur(5px);">
                            <h3 class="mb-4" id="scrollspyTask">Номинальные параметры турбины</h3>
                            <table class="table table-hover table-sm">
                                <tbody>
                                <tr>
                                    <td>Тип Турбина</td>
                                    <td><?= $model->type_trubina ?></td>
                                </tr>
                                <tr>
                                    <td>Год выпуска</td>
                                    <td><?= $model->year_turbin ?> год.</td>
                                </tr>
                                <tr>
                                    <td>Год ввода в эксплуатацию</td>
                                    <td><?= $model->year_turbin_exp ?> год.</td>
                                </tr>
                                <tr>
                                    <td>Мощность</td>
                                    <td><?= $model->moshnost ?> МВт</td>
                                </tr>
                                <tr>
                                    <td>Расчетный напор</td>
                                    <td><?= $model->raschyot_napor ?> м</td>
                                </tr>
                                <tr>
                                    <td>Оборот</td>
                                    <td><?= $model->oborot ?> об/мин</td>
                                </tr>
                                <tr>
                                    <td>Колическтво лопастей</td>
                                    <td><?= $model->count_lopastey ?> шт.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0 g-md-4 g-xl-6">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="lead-details-container">
                <div class="scrollspy-example rounded-2" data-bs-spy="scroll">
                    <div class="mb-8" style="backdrop-filter: blur(5px);">
                        <h3 class="mb-4">Информация о ремонте</h3>
                        <?php
                        $repairs = Repair::find()->where(['id_organization' => $model->id_organization])->andWhere(['aggregate' => $model->aggregate])->orderBy(['first_date' => SORT_DESC])->all();

                        if ($repairs) :
                        ?>
                        <table class="table table-hover table-sm">
                            <tbody>
                            <tr>
                                <th>№</th>
                                <th>Гидроагрегат</th>
                                <th>Наименования оборудования (узел)</th>
                                <th>Вид ремонта</th>
                                <th>Дата начало ремонта</th>
                                <th>Дата окончания ремонта</th>
                                <th>Перечень работ</th>
<!--                                <th>Расход средств (млн.сум)</th>-->
                            </tr>
                        <?php $i = 1;
                        foreach ($repairs as $item) :
                            $type = TypeRepair::findOne($item['typy_repair']);
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $mes ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $type['name'] ?></td>
                                <td><?= $item['first_date'] ?></td>
                                <td><?= $item['last_date'] ?></td>
                                <td><a href="<?= Url::to(['files/'.$item['files']]) ?>"><span class="uil fs-7 me-2 uil-download-alt"></span></a> </td>
<!--                                <td>--><?php //= $item['expenditure_of_funds'] ?><!--</td>-->
                            </tr>
                        <?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                        <?php else : ?>
                            <h4 class="mb-4">Нет информация о ремонте</h4>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

