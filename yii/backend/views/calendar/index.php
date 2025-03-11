<?php
use yii\helpers\Url;

$this->title = 'Starter Page';
$this->params['breadcrumbs'] = [['label' => $this->title]];

function Btn($id, $date): string
{
    return "
    <a class='btn btn-primary btn-sm' href='".Url::to(['calendar/day', 'id' => $id, 'date' => $date])."'><i class='nav-icon fas fa-download'></i></a>
    ";
}

function BtnError(): string
{
    return "
    <a class='btn btn-danger btn-sm' href='#'><i class='nav-icon fas fa-times'></i></a>
    ";
}
//$countDay = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));

?>
<?= Yii::$app->session->getFlash('msg') ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php
            // Массив данных об организациях
            $organizations = [
                ["id" => 1, "name" => "Ўрта Чирчиқ ГЭСлар каскади", "link" => "http://user:c8H_us3r@192.168.40.215:10006/crq?req=current"],
                ["id" => 2, "name" => "Чирчиқ ГЭСлар каскади", "link" => "http://user:hrU_s20r@192.168.40.215:10206/crq?req=current"],
                ["id" => 3, "name" => "Қодирия ГЭСлар каскади", "link" => "http://user:R_kSa_ir@192.168.40.215:10174/crq?req=current"],
                ["id" => 4, "name" => "Тошкент ГЭСлар каскади", "link" => "http://user:sU_sb07s@192.168.40.215:10178/crq?req=current"],
                ["id" => 5, "name" => "Қуйи Бўзсув ГЭСлар каскади", "link" => "http://user:N6_3jf8g@192.168.40.215:10190/crq?req=current"],
                ["id" => 6, "name" => "Фарход ГЭС", "link" => "http://user:ah_Rtnmi@192.168.40.215:10182/crq?req=current"],
                ["id" => 7, "name" => "Самарқанд ГЭСлар каскади", "link" => "http://user:usrG2b_h@192.168.40.215:10122/crq?req=current"],
                ["id" => 8, "name" => "Андижон ГЭС", "link" => "http://user:usrAn_Ge@192.168.40.215:10042/crq?req=current"],
                ["id" => 9, "name" => "Шахрихон ГЭСлар каскади", "link" => "http://user:usr_g3S4@192.168.40.215:10134/crq?req=current"],
                ["id" => 10, "name" => "КФК КГЭСлар каскади", "link" => "http://user:kdbsu_sr@192.168.40.215:10138/crq?req=current"],
                ["id" => 11, "name" => "Тўполанг ГЭСлар каскади", "link" => "http://user:rsuLa_tU@192.168.40.215:10018/crq?req=current"],
                ["id" => 12, "name" => "Оҳангарон ГЭС", "link" => "http://user:usr_Oh_ge@192.168.40.215:10034/crq?req=current"],
                ["id" => 13, "name" => "Ҳисорак ГЭС", "link" => "http://user:gh_us_91@192.168.40.215:10026/crq?req=current"],
                ["id" => 14, "name" => "Қамчиқ КГЭС", "link" => "http://user:kase_10w@192.168.40.215:10150/crq?req=current"],
            ];

            // Количество дней в текущем месяце
            $countDay = date("t");

            // Функция для генерации кнопки
            function generateButton($orgId, $date): string
            {
                return date("Y-m-d") >= $date ? Btn($orgId, $date) : BtnError();
            }

            ?>
            <table class="table table-hover table-sm table-bordered">
                <thead>
                <tr>
                    <th style="text-align: center;vertical-align: middle;" rowspan="2">№</th>
                    <th style="text-align: center;vertical-align: middle;" rowspan="2">Ташкилот номи</th>
                    <th style="text-align: center;vertical-align: middle;" colspan="<?= $countDay ?>"><?= date("F") ?></th>
                    <th style="text-align: center;vertical-align: middle;" rowspan="2">Link</th>
                </tr>
                <tr>
                    <?php for ($i = 1; $i <= $countDay; $i++): ?>
                        <td><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?></td>
                    <?php endfor; ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($organizations as $org): ?>
                    <tr>
                        <td><?= $org['id'] ?></td>
                        <td><?= $org['name'] ?></td>
                        <?php for ($i = 1; $i <= $countDay; $i++): ?>
                            <td><?= generateButton($org['id'], date("Y-m-" . str_pad($i, 2, '0', STR_PAD_LEFT))) ?></td>
                        <?php endfor; ?>
                        <td>
                            <a class="btn btn-sm btn-success" href="<?= $org['link'] ?>" target="_blank">
                                <i class="nav-icon fas fa-link"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>