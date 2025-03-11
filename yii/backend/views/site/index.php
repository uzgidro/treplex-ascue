<?php
use yii\helpers\Url;

$this->title = 'Starter Page';
$this->params['breadcrumbs'] = [['label' => $this->title]];

function Btn($id): string
{
    return "
    <div class='btn-group'>
        <a class='btn btn-primary btn-sm' href='".Url::to(['site/yesterday', 'id' => $id])."'><i class='nav-icon fas fa-download'></i></a>           
        <a class='btn btn-info btn-sm' href='".Url::to(['site/today', 'id' => $id])."'><i class='nav-icon fas fa-cloud-download-alt'></i></a>
    </div>
    ";
}

?>
<?= Yii::$app->session->getFlash('msg') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-hover table-sm">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Ташкилот номи</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>"Ўрта Чирчиқ ГЭСлар каскади" ФЛ</td>
                    <td><?= Btn(1) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:c8H_us3r@192.168.40.215:10006/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>"Чирчиқ ГЭСлар каскади" ФЛ</td>
                    <td><?= Btn(2) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:hrU_s20r@192.168.40.215:10206/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>"Қодирия ГЭСлар каскади" ФЛ</td>
                    <td><?= Btn(3) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:R_kSa_ir@192.168.40.215:10174/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>"Тошкент ГЭСлар каскади" ФЛ</td>
                    <td><?= Btn(4) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:sU_sb07s@192.168.40.215:10178/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>"Қуйи Бўзсув ГЭСлар каскади" ФЛ</td>
                    <td><?= Btn(5) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:N6_3jf8g@192.168.40.215:10190/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>"Фарход ГЭС" ФЛ</td>
                    <td><?= Btn(6) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:ah_Rtnmi@192.168.40.215:10182/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>"Самарқанд ГЭСлар каскади" ФЛ</td>
                    <td><?= Btn(7) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:usrG2b_h@192.168.40.215:10122/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>"Андижон ГЭС" ФЛ</td>
                    <td><?= Btn(8) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:usrAn_Ge@192.168.40.215:10042/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>"Шахрихон ГЭСлар каскади" ФЛ</td>
                    <td><?= Btn(9) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:usr_g3S4@192.168.40.215:10134/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>"КФК КГЭСлар каскади" ФЛ</td>
                    <td><?= Btn(10) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:kdbsu_sr@192.168.40.215:10138/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>"Тўполанг ГЭСлар каскади" ФЛ</td>
                    <td><?= Btn(11) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:rsuLa_tU@192.168.40.215:10018/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>"Оҳангарон ГЭС" ФЛ</td>
                    <td><?= Btn(12) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:usr_Oh_ge@192.168.40.215:10034/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>"Ҳисорак ГЭС" ФЛ</td>
                    <td><?= Btn(13) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:gh_us_91@192.168.40.215:10026/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>"Қамчиқ КГЭС" ФЛ</td>
                    <td><?= Btn(14) ?></td>
                    <td><a class="btn btn-sm btn-success" href="http://user:kase_10w@192.168.40.215:10150/crq?req=current" target="_blank"><i class="nav-icon fas fa-link"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>