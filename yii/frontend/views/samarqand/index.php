<?php
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = '"Самарқанд ГЭСлар каскади" Филиалида электр энергия ишлаб чиқарилиши';
$dashboard = new Dashboard();
$power = new Day();
$array = [49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 81, 82];
$power->getHour($array);
//$power->getDay($array);
?>
<div class="col-xl-12 col-xxl-12">
    <div class="card mb-3">
        <div class="card-body">
            <div class="row g-4 g-xl-1 g-xxl-3 justify-content-between">
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-info-dark"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Активноя мощность</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="active">0 МВт </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Реактивноя мощность</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="reactive">0 МВар </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize-2 text-info-dark"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Отдача</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="activeOut">0 МВт </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Приём</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="activeIn">0 МВт</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-info-dark"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Расход воды через турбины</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="water">0 м3/с</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <div class="d-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports">Собствинные нужды</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="ownNeeds">0 KВт</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar text-info-dark"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports"><?= date('Y-m-d') ?></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <p class="mb-0 fs-8 fw-semibold text-body-tertiary reports" id="clock"></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 list mb-3">
    <div class="col-12 col-xl-12">
        <div class="row g-3 list">
            <div class="col-3 col-xl-3">
                <?= $dashboard->Ges([49], 'ges2b', 2) ?>
            </div>
            <div class="col-3 col-xl-3">
                <?= $dashboard->Ges([50, 51], 'ges3b', 3) ?>
            </div>
            <div class="col-3 col-xl-3">
                <?= $dashboard->Ges([52, 53], 'ges1b', 1) ?>
            </div>
            <div class="col-3 col-xl-3">
                <?= $dashboard->Ges([54, 55], 'ges5b', 5) ?>
            </div>
        </div>
    </div>
    <div class="col-6 col-xl-6">
        <div class="row g-3 list">
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([56], 'urgut', 'urgut') ?>
            </div>
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([58], 'shaudar1', 'shaudar1') ?>
            </div>
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([57], 'shaudar2', 'shaudar2') ?>
            </div>
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([82], 'shaudar3', 'shaudar3') ?>
            </div>
        </div>
    </div>
    <div class="col-6 col-xl-6">
        <?= $dashboard->AllResultGes(9) ?>
    </div>
</div>

<div class="card mt-2" style="backdrop-filter: blur(5px);">
    <div class="card-body">
        <div class="row g-1 g-sm-3 lh-1">
            <canvas id="myLineChart" width="1500" height="300"></canvas>
        </div>
    </div>
</div>

<div class="card" style="backdrop-filter: blur(5px);">
    <div class="card-body">
        <div class="row g-1 g-sm-3 lh-1">
            <div id="chartdiv2" style="width: 100%; height: 300px;"></div>
        </div>
    </div>
</div>

<script>

    <?php
    $yesterday = date("Y-m-d", strtotime("yesterday"));
    ?>
    const data2b = <?= $dashboard->YesterdayHourGes(49) ?>;
    const data3b = <?= $dashboard->YesterdayHourGes(50) ?>;
    const data3bm = <?= $dashboard->YesterdayHourGes(51) ?>;
    const data1b = <?= $dashboard->YesterdayHourGes(52) ?>;
    const data1bm = <?= $dashboard->YesterdayHourGes(53) ?>;
    const data5b = <?= $dashboard->YesterdayHourGes(54) ?>;
    const data5bm = <?= $dashboard->YesterdayHourGes(55) ?>;
    const dataUrgut = <?= $dashboard->YesterdayHourGes(56) ?>;
    const dataShaudar1 = <?= $dashboard->YesterdayHourGes(58) ?>;
    const dataShaudar2 = <?= $dashboard->YesterdayHourGes(57) ?>;
    const dataShaudar3 = <?= $dashboard->YesterdayHourGes(82) ?>;

    const yesterday = '<?= $yesterday ?>';

    const ctx = document.getElementById('myLineChart').getContext('2d');
    const myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                '01:00', '02:00', '03:00', '04:00', '05:00', '06:00',
                '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00',
                '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00',
                '21:00', '22:00', '23:00', '00:00'
            ],
            datasets: [
                {
                    label: 'ГЭС-2Б Хишров ГЭС',
                    data: data2b,
                    borderColor: '#ff6384',
                    backgroundColor: '#ff6384',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: '#ff6384',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'ГЭС-3Б Иртишар ГЭС',
                    data: data3b,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(75, 192, 192, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'Микро ГЭС-3Б',
                    data: data3bm,
                    borderColor: 'rgba(75, 102, 192, 1)',
                    backgroundColor: 'rgba(75, 102, 192, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(75, 102, 192, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'ГЭС-1Б Талигулян-1',
                    data: data1b,
                    borderColor: 'rgba(175, 102, 192, 1)',
                    backgroundColor: 'rgba(175, 102, 192, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(175, 102, 192, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'Микро ГЭС-1Б',
                    data: data1bm,
                    borderColor: 'rgba(105, 102, 192, 1)',
                    backgroundColor: 'rgba(105, 102, 192, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(105, 102, 192, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'ГЭС-5Б Талигулян-3',
                    data: data5b,
                    borderColor: 'rgba(105, 202, 192, 1)',
                    backgroundColor: 'rgba(105, 202, 192, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(105, 202, 192, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'Микро ГЭС-5Б',
                    data: data5bm,
                    borderColor: 'rgba(105, 252, 192, 1)',
                    backgroundColor: 'rgba(105, 252, 192, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(105, 252, 192, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'Ургут ГЭСБ',
                    data: dataUrgut,
                    borderColor: 'rgba(105, 252, 92, 1)',
                    backgroundColor: 'rgba(105, 252, 92, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(105, 252, 92, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'Шаудар-1',
                    data: dataShaudar1,
                    borderColor: 'rgba(205, 252, 92, 1)',
                    backgroundColor: 'rgba(205, 252, 92, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(205, 252, 92, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'Шаудар-2 (ПК-135)',
                    data: dataShaudar2,
                    borderColor: 'rgba(205, 52, 92, 1)',
                    backgroundColor: 'rgba(205, 52, 92, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(205, 52, 92, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'Шаудар-3 (ПК-102)',
                    data: dataShaudar3,
                    borderColor: 'rgba(5, 52, 92, 1)',
                    backgroundColor: 'rgba(5, 52, 92, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'rgba(5, 52, 92, 1)',
                        anchor: 'end',
                        align: 'top',
                    }
                },
            ]
        },
        options: {
            responsive: true,
            layout: {
                padding: {
                    top: 30 // Легенда билан график орасидаги вертикал фосилани кўпайтириш
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        color: '#fff', // Цвет текста легенды
                        font: {
                            size: 12, // Размер шрифта (опционально)
                            // weight: 'bold' // Жирность шрифта (опционально)
                        }
                    }
                },
                datalabels: {
                    display: true,
                    color: '#fff',
                    font: {
                        size: 12,
                        weight: 'bold'
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: false,
                        text: yesterday,
                        color: '#fff' // Цвет заголовка оси X
                    },
                    ticks: {
                        color: '#fff' // Цвет меток оси X
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'кВт',
                        color: '#fff' // Цвет заголовка оси X
                    },
                    ticks: {
                        color: '#fff' // Цвет меток оси X
                    }
                }
            }
        },
        // plugins: [ChartDataLabels]
    });

    <?= $dashboard->GesDashboard([$array], "chartdiv2")?>

    function formatNumber(number, decimals, decimalSeparator, thousandSeparator) {
        // Ensure number is converted to a float and rounded to specified decimals
        number = parseFloat(number).toFixed(decimals);

        // Split the number into integer and fractional parts
        let parts = number.split('.');

        // Add thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {

        fetch('/samarqand/server')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text(); // Get response as text
            })
            .then(text => {
                // console.log('Response text:', text);
                const data = JSON.parse(text); // Parse the JSON string
                console.log('Parsed data:', data);

                data.forEach(item => {
                    if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 2) {
                        const value = document.getElementById("reactive");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВАр";
                    } else if(item.id === 3) {
                        const value = document.getElementById("activeOut");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 4) {
                        const value = document.getElementById("activeIn");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 5) {
                        const value = document.getElementById("ownNeeds");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " KВт";
                    } else if(item.id === 6) {
                        const value = document.getElementById("water");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " м3/с";
                    } else if(item.id === 7) {
                        const value = document.getElementById("activeTrue");
                        value.textContent = item.value;
                    } else if(item.id === 8) {
                        const value = document.getElementById("activeFalse");
                        value.textContent = item.value;
                    } else if(item.id === 9) {
                        const value = document.getElementById("activeError");
                        value.textContent = item.value;
                    }

                    else if(item.id === 10) {
                        const value = document.getElementById("active2");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 11) {
                        const value = document.getElementById("true2");
                        value.textContent = item.value;
                    } else if(item.id === 12) {
                        const value = document.getElementById("false2");
                        value.textContent = item.value;
                    } else if(item.id === 13) {
                        const value = document.getElementById("error2");
                        value.textContent = item.value;
                    }
                    else if(item.id === 14) {
                        const value = document.getElementById("active3");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 15) {
                        const value = document.getElementById("true3");
                        value.textContent = item.value;
                    } else if(item.id === 16) {
                        const value = document.getElementById("false3");
                        value.textContent = item.value;
                    } else if(item.id === 17) {
                        const value = document.getElementById("error3");
                        value.textContent = item.value;
                    }
                    else if(item.id === 18) {
                        const value = document.getElementById("active1");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 19) {
                        const value = document.getElementById("true1");
                        value.textContent = item.value;
                    } else if(item.id === 20) {
                        const value = document.getElementById("false1");
                        value.textContent = item.value;
                    } else if(item.id === 21) {
                        const value = document.getElementById("error1");
                        value.textContent = item.value;
                    }
                    else if(item.id === 22) {
                        const value = document.getElementById("active5");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 23) {
                        const value = document.getElementById("true5");
                        value.textContent = item.value;
                    } else if(item.id === 24) {
                        const value = document.getElementById("false5");
                        value.textContent = item.value;
                    } else if(item.id === 25) {
                        const value = document.getElementById("error5");
                        value.textContent = item.value;
                    }
                    else if(item.id === 26) {
                        const value = document.getElementById("activeurgut");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 27) {
                        const value = document.getElementById("trueurgut");
                        value.textContent = item.value;
                    } else if(item.id === 28) {
                        const value = document.getElementById("falseurgut");
                        value.textContent = item.value;
                    } else if(item.id === 29) {
                        const value = document.getElementById("errorurgut");
                        value.textContent = item.value;
                    }
                    else if(item.id === 30) {
                        const value = document.getElementById("activeshaudar1");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 31) {
                        const value = document.getElementById("trueshaudar1");
                        value.textContent = item.value;
                    } else if(item.id === 32) {
                        const value = document.getElementById("falseshaudar1");
                        value.textContent = item.value;
                    } else if(item.id === 33) {
                        const value = document.getElementById("errorshaudar1");
                        value.textContent = item.value;
                    }
                })
            })
            .catch(error => console.error('Error:', error));
    }

    document.addEventListener('DOMContentLoaded', function() {
        getServer();
    });

    var intervalTime = 180000; // Set the interval time in milliseconds (e.g., 1000ms = 1 second)

    var timer = setInterval(
        getServer, intervalTime
    );

    let realTime = setInterval(function() {
        const now = new Date();
        document.getElementById('clock').textContent = now.toLocaleTimeString();  // Display the time in an element with id "clock"
    }, 1000);
</script>

