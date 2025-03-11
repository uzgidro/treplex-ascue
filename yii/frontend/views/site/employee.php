<?php
use yii\helpers\Url;
use yii\helpers\Html;
use common\models\Organization;
use common\models\Employee;
use frontend\controllers\Energy;
use common\models\Position;

/** @var yii\web\View $this */
/** @var $id */

$organization = Organization::findOne($id);
$this->title = $organization['name'];

$org = Organization::findOne($organization['id_organization']);
switch ($org['id']) {
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
        <li class="breadcrumb-item"><a href="<?= Url::to([$url.'/index']) ?>"><?= $org['name'] ?></a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to([$url.'/'.$energy->getUrl($id)]) ?>"><?= Html::encode($this->title) ?></a></li>
        <li class="breadcrumb-item active" aria-current="page">Список сотрудников</li>
    </ol>
</nav>

<div class="card mb-3" style="backdrop-filter: blur(15px);">
    <div class="card-body">
        <div class="row align-items-center g-3 text-center text-xxl-start">
            <div class="pb-6">
                <h2 class="mb-4"><?= Html::encode($this->title) ?></h2>
                <div id="lealsTable" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;phone&quot;,&quot;contact&quot;,&quot;company&quot;,&quot;date&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        <?php
                        $employee = Employee::find()->where(['id_organization' => $id])->all();
                        if ($employee) : ?>
                        <table class="table fs-9 mb-0 leads-table border-top border-translucent">
                            <thead>
                            <tr>

                                <th class="sort white-space-nowrap align-middle text-uppercase ps-0" scope="col" data-sort="name" style="width:25%;">
                                    <div class="d-inline-flex flex-center">
                                        <div class="d-flex align-items-center px-1 py-1 bg-success-subtle rounded me-2">
                                            <span class="uil uil-user text-primary-dark"></span>
                                        </div>
                                        <span>ФИО</span>
                                    </div>
                                </th>
                                <th class="sort align-middle ps-4 pe-5 text-uppercase border-end border-translucent" scope="col" data-sort="email" style="width:15%;">
                                    <div class="d-inline-flex flex-center">
                                        <div class="d-flex align-items-center px-1 py-1 bg-success-subtle rounded me-2">
                                            <span class="uil uil-graduation-cap text-success-dark"></span>
                                        </div>
                                        <span>Лавозим</span>
                                    </div>
                                </th>
                                <th class="sort align-middle ps-4 pe-5 text-uppercase border-end border-translucent" scope="col" data-sort="phone" style="width:15%; min-width: 180px;">
                                    <div class="d-inline-flex flex-center">
                                        <div class="d-flex align-items-center px-1 py-1 bg-primary-subtle rounded me-2">
                                            <span class="uil uil-phone text-primary-dark"></span>
                                        </div>
                                        <span>Уяли тел.</span>
                                    </div>
                                </th>
                                <th class="sort align-middle ps-4 pe-5 text-uppercase border-end border-translucent" scope="col" data-sort="phone" style="width:15%; min-width: 180px;">
                                    <div class="d-inline-flex flex-center">
                                        <div class="d-flex align-items-center px-1 py-1 bg-primary-subtle rounded me-2">
                                            <span class="uil uil-headphones-alt text-primary-dark"></span>
                                        </div>
                                        <span>Ички тел.</span>
                                    </div>
                                </th>
                                <th class="sort align-middle ps-4 pe-5 text-uppercase" scope="col" data-sort="date" style="width:15%;">
                                    <div class="d-inline-flex flex-center">
                                        <div class="d-flex align-items-center px-1 py-1 bg-warning-subtle rounded me-2">
                                            <span class="uil uil-store-alt text-warning-dark"></span>
                                        </div><span>Ташкилот номи</span>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="list" id="leal-tables-body">

                            <?php $employeeOrg = Employee::find()->where(['id_organization' => $org['id']])->all();
                            if ($employeeOrg) :
                                foreach ($employeeOrg as $item) :
                                    $position = Position::findOne($item['id_position']);
                                    $orgName = Organization::findOne($item['id_organization']);
                            ?>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="name align-middle white-space-nowrap ps-0">
                                    <div class="d-flex align-items-center">
                                        <a href="#!">
                                            <div class="avatar avatar-xl me-3">
                                                <img class="rounded-circle" src="<?= Url::to(['upload/photo/'.$item['photo']]) ?>" alt="">
                                            </div>
                                        </a>
                                        <div>
                                            <a class="fs-8 fw-bold" href="#!"><?= $item['fio'] ?></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="email align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent"><a class="text-body-highlight"><?= $position['name'] ?></a></td>
                                <td class="phone align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent"><a class="text-body-highlight"><?= $item['phone'] ?></a></td>
                                <td class="contact align-middle white-space-nowrap ps-4 border-end border-translucent fw-semibold text-body-highlight"><?= $item['tel'] ?></td>
                                <td class="date align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4 text-body-tertiary"><?= $orgName['name'] ?></td>
                            </tr>
                            <?php endforeach; endif;
                            foreach ($employee as $item) :
                            $position = Position::findOne($item['id_position']);
                            $orgName = Organization::findOne($item['id_organization']);?>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="name align-middle white-space-nowrap ps-0">
                                    <div class="d-flex align-items-center">
                                        <a href="#!">
                                            <div class="avatar avatar-xl me-3">
                                                <img class="rounded-circle" src="<?= Url::to(['upload/photo/'.$item['photo']]) ?>" alt="">
                                            </div>
                                        </a>
                                        <div>
                                            <a class="fs-8 fw-bold" href="#!"><?= $item['fio'] ?></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="email align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent"><a class="text-body-highlight"><?= $position['name'] ?></a></td>
                                <td class="phone align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent"><a class="text-body-highlight"><?= $item['phone'] ?></a></td>
                                <td class="contact align-middle white-space-nowrap ps-4 border-end border-translucent fw-semibold text-body-highlight"><?= $item['tel'] ?></td>
                                <td class="date align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4 text-body-tertiary"><?= $orgName['name'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php else : ?>
                        <h4>Нет информация</h4>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

