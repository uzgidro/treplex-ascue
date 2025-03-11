<?php
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = '"Қуйи Бўзсув ГЭСлар каскади" Филиалида электр энергия ишлаб чиқарилиши';

$dashboard = new Dashboard();
$power = new Day();

$array = [41, 42, 43, 44, 45, 46];

$power->getHour($array);
//$power->getDay($array);
?>
<div class="col-xl-12 col-xxl-12">
    <div class="card mb-3" style="backdrop-filter: blur(15px);">
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
<div class="row g-3 list mb-2">
    <div class="col-5 col-xl-5">
        <div class="row g-3 list">
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([41], 'ges14', 14) ?>
            </div>
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([42], 'ges18', 18) ?>
            </div>
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([43], 'ges19', 19) ?>
            </div>
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([44], 'ges23', 23) ?>
            </div>
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([45], 'ges22', 22) ?>
            </div>
            <div class="col-6 col-xl-6">
                <?= $dashboard->Ges([46], 'ges41', 41) ?>
            </div>
        </div>
    </div>
    <div class="col-7 col-xl-7">
        <?= $dashboard->AllResultGes(4) ?>
        <div class="card mt-2" style="backdrop-filter: blur(5px);">
            <div class="card-body">
                <div class="row g-1 g-sm-3 lh-1">
                    <canvas id="myLineChart" width="1100" height="450"></canvas>
                </div>
            </div>
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
    <?= $dashboard->GesDashboard([$array], "chartdiv2")?>

    <?php
    $yesterday = date("Y-m-d", strtotime("yesterday"));
    ?>
    const data14 = <?= $dashboard->YesterdayHourGes(41) ?>;
    const data18 = <?= $dashboard->YesterdayHourGes(42) ?>;
    const data19 = <?= $dashboard->YesterdayHourGes(43) ?>;
    const data23 = <?= $dashboard->YesterdayHourGes(44) ?>;
    const data22 = <?= $dashboard->YesterdayHourGes(45) ?>;
    const data41 = <?= $dashboard->YesterdayHourGes(46) ?>;

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
                    label: 'ГЭС-14',
                    data: data14,
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
                    label: 'ГЭС-18',
                    data: data18,
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
                    label: 'ГЭС-19',
                    data: data19,
                    borderColor: 'green',
                    backgroundColor: 'green',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'green',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'ГЭС-23',
                    data: data23,
                    borderColor: 'blue',
                    backgroundColor: 'blue',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'blue',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'ГЭС-22',
                    data: data22,
                    borderColor: 'white',
                    backgroundColor: 'white',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'white',
                        anchor: 'end',
                        align: 'top',
                    }
                },
                {
                    label: 'ГЭС-41',
                    data: data41,
                    borderColor: 'yellow',
                    backgroundColor: 'yellow',
                    borderWidth: 2,
                    tension: 0.4,
                    datalabels: {
                        color: 'yellow',
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

</script>
<script>
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
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/quyi-buzsuv/server', { signal: controller.signal })
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
                        const value = document.getElementById("active14");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 11) {
                        const value = document.getElementById("true14");
                        value.textContent = item.value;
                    } else if(item.id === 12) {
                        const value = document.getElementById("false14");
                        value.textContent = item.value;
                    } else if(item.id === 13) {
                        const value = document.getElementById("error14");
                        value.textContent = item.value;
                    }

                    else if(item.id === 14) {
                        const value = document.getElementById("active18");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 15) {
                        const value = document.getElementById("true18");
                        value.textContent = item.value;
                    } else if(item.id === 16) {
                        const value = document.getElementById("false18");
                        value.textContent = item.value;
                    } else if(item.id === 17) {
                        const value = document.getElementById("error18");
                        value.textContent = item.value;
                    }

                    else if(item.id === 18) {
                        const value = document.getElementById("active19");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 19) {
                        const value = document.getElementById("true19");
                        value.textContent = item.value;
                    } else if(item.id === 20) {
                        const value = document.getElementById("false19");
                        value.textContent = item.value;
                    } else if(item.id === 21) {
                        const value = document.getElementById("error19");
                        value.textContent = item.value;
                    }

                    else if(item.id === 22) {
                        const value = document.getElementById("active23");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 23) {
                        const value = document.getElementById("true23");
                        value.textContent = item.value;
                    } else if(item.id === 24) {
                        const value = document.getElementById("false23");
                        value.textContent = item.value;
                    } else if(item.id === 25) {
                        const value = document.getElementById("error23");
                        value.textContent = item.value;
                    }

                    else if(item.id === 26) {
                        const value = document.getElementById("active22");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 27) {
                        const value = document.getElementById("true22");
                        value.textContent = item.value;
                    } else if(item.id === 28) {
                        const value = document.getElementById("false22");
                        value.textContent = item.value;
                    } else if(item.id === 29) {
                        const value = document.getElementById("error22");
                        value.textContent = item.value;
                    }

                    else if(item.id === 30) {
                        const value = document.getElementById("active41");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 31) {
                        const value = document.getElementById("true41");
                        value.textContent = item.value;
                    } else if(item.id === 32) {
                        const value = document.getElementById("false41");
                        value.textContent = item.value;
                    } else if(item.id === 33) {
                        const value = document.getElementById("error41");
                        value.textContent = item.value;
                    }
                })
            })
            .catch(error => {
                if (error.name === 'AbortError') {
                    data = [];
                    console.log('Запрос был отменен из-за таймаута');
                    getServer();
                } else {
                    console.log('Произошла ошибка:', error);
                }
            })
            .finally(() => clearTimeout(timeoutId)); // Очистить таймаут
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

