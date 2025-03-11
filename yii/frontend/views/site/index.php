<?php
use frontend\controllers\Ges;
use frontend\controllers\Dashboard;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = '"Ўзбекгидроэнерго" акциядорлик жамияти таркибидаги ГЭСларнинг кун давомидаги кўрсаткичлари';
$this->params['breadcrumbs'][] = $this->title;

$dashboard = new Dashboard();
$ges = new Ges();

$allAggregate = 156;//5/*ohangaron*/ + 8/*tupolang*/ + 8/*andijon*/ + $ges->UrtaChirchiq() + 14/*chirchiq*/ + 6/*farxod*/  + 10/*qodiriya*/ + 4/*Qamchiq*/ + 13/*quyibuzsuv*/ + 9/*toshkent*/ + 2/*Hisorak*/ + 4/*Kfk*/ + 7/*Shaxrixon*/ + $ges->Samarqand()/*Samarqand*/ + 6/*tuyamuyin*/;

?>
<div class="col-xl-12 col-xxl-12">
    <div class="card mb-1">
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

                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">∑ Актив <br>кувват (Р)</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="active">0 МВт </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity text-info-dark"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">∑ Реактив <br>кувват (Q)</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="reactive">0 МВт </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-info-dark"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <table class="w-100 table-stats table-stats">
                            <tbody>
                            <tr>
                                <td class="py-1">
                                    <div class="d-inline-flex align-items-center">

                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">∑ Актив узатиш <br>(шундан транзит)</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="activeOut">0 МВт </p>
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

                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">∑ Актив <br>қабул (Р)</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="activeIn">0 МВт </p>
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
                                        <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">∑ Ўз эхтиёж <br>учун сарф (Р)</p>
                                    </div>
                                </td>
                                <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                <td class="py-1">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports" id="ownNeeds">0 МВт </p>
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
<div class="row g-1 list">
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(1, 'urta-chirchiq/', 1) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(2, 'chirchiq/', 2) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(3, 'qodiriya/', 3) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(4, 'toshkent/', 4) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(5, 'quyi-buzsuv/', 5) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(6, 'farxod/', 6) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(9, 'samarqand/', 7) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(15, 'tupolang/', 8) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(16, 'oxangaron/', 9) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(19, 'xisorak/', 10) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(23, 'qamchiq/', 11) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(22, 'kfk/', 12) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(10, 'andijon/', 13) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(13, 'shaxrixon/', 14) ?>
    </div>
    <div class="col-3 col-xl-3">
        <?= $dashboard->Cascade(14, 'tuyamuyin/', 15) ?>
    </div>
    <div class="col-3 col-xl-3">
        <div class="card h-100" style="backdrop-filter: blur(15px);">
            <div class="card-body">
                <div class="border-bottom border-translucent">
                    <p class="fs-9 fw-semibold text-body ms-1 text ps-2 mb-3">Гидроагрегатлар холати</p>
                </div>
                <div class="row g-1 g-sm-3 lh-1">
                    <table class="w-100 table-stats table-stats">
                        <tbody>
                        <tr>
                            <td class="py-2">
                                <div class="d-inline-flex align-items-center">
                                    <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Жами</p>
                                </div>
                            </td>
                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                            <td class="py-2">
                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports"><?= $allAggregate ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 fs-9 fw-semibold reports text-danger">Ишда</p>
                                </div>
                            </td>
                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                            <td class="py-2">
                                <p class="mb-0 fs-9 fw-semibold reports text-danger" id="activeTrue">0</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 fs-9 fw-semibold reports text-success">Захирада</p>
                                </div>
                            </td>
                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                            <td class="py-2">
                                <p class="mb-0 fs-9 fw-semibold reports text-success" id="activeFalse">0</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 fs-9 fw-semibold reports text-warning">Таъмирда</p>
                                </div>
                            </td>
                            <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                            <td class="py-2">
                                <p class="mb-0 fs-9 fw-semibold reports text-warning" id="activeError">0</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let realTime = setInterval(function() {
        const now = new Date();
        document.getElementById('clock').textContent = now.toLocaleTimeString();  // Display the time in an element with id "clock"
    }, 1000);

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
        const timeoutId = setTimeout(() => controller.abort(), 50000);
        fetch('/site/server', { signal: controller.signal })
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
                        const value = document.getElementById("activeTrue");
                        value.textContent = item.value;
                    } else if(item.id === 7) {
                        const value = document.getElementById("activeFalse");
                        value.textContent = item.value;
                    } else if(item.id === 8) {
                        const value = document.getElementById("activeError");
                        value.textContent = item.value;
                    }

                    else if(item.id === 16) {
                        const value = document.getElementById("active9");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 17) {
                        const value = document.getElementById("true9");
                        value.textContent = item.value;
                    } else if(item.id === 18) {
                        const value = document.getElementById("false9");
                        value.textContent = item.value;
                    } else if(item.id === 19) {
                        const value = document.getElementById("error9");
                        value.textContent = item.value;
                    }

                    else if(item.id === 20) {
                        const value = document.getElementById("active8");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 21) {
                        const value = document.getElementById("true8");
                        value.textContent = item.value;
                    } else if(item.id === 22) {
                        const value = document.getElementById("false8");
                        value.textContent = item.value;
                    } else if(item.id === 23) {
                        const value = document.getElementById("error8");
                        value.textContent = item.value;
                    }

                    else if(item.id === 24) {
                        const value = document.getElementById("active13");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 25) {
                        const value = document.getElementById("true13");
                        value.textContent = item.value;
                    } else if(item.id === 26) {
                        const value = document.getElementById("false13");
                        value.textContent = item.value;
                    } else if(item.id === 27) {
                        const value = document.getElementById("error13");
                        value.textContent = item.value;
                    }

                    else if(item.id === 28) {
                        const value = document.getElementById("active1");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 29) {
                        const value = document.getElementById("true1");
                        value.textContent = item.value;
                    } else if(item.id === 30) {
                        const value = document.getElementById("false1");
                        value.textContent = item.value;
                    } else if(item.id === 31) {
                        const value = document.getElementById("error1");
                        value.textContent = item.value;
                    }

                    else if(item.id === 32) {
                        const value = document.getElementById("active2");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 33) {
                        const value = document.getElementById("true2");
                        value.textContent = item.value;
                    } else if(item.id === 34) {
                        const value = document.getElementById("false2");
                        value.textContent = item.value;
                    } else if(item.id === 35) {
                        const value = document.getElementById("error2");
                        value.textContent = item.value;
                    }

                    else if(item.id === 36) {
                        const value = document.getElementById("active6");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 37) {
                        const value = document.getElementById("true6");
                        value.textContent = item.value;
                    } else if(item.id === 38) {
                        const value = document.getElementById("false6");
                        value.textContent = item.value;
                    } else if(item.id === 39) {
                        const value = document.getElementById("error6");
                        value.textContent = item.value;
                    }
                    else if(item.id === 40) {
                        const value = document.getElementById("active3");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 41) {
                        const value = document.getElementById("true3");
                        value.textContent = item.value;
                    } else if(item.id === 42) {
                        const value = document.getElementById("false3");
                        value.textContent = item.value;
                    } else if(item.id === 43) {
                        const value = document.getElementById("error3");
                        value.textContent = item.value;
                    }
                    else if(item.id === 44) {
                        const value = document.getElementById("active11");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 45) {
                        const value = document.getElementById("true11");
                        value.textContent = item.value;
                    } else if(item.id === 46) {
                        const value = document.getElementById("false11");
                        value.textContent = item.value;
                    } else if(item.id === 47) {
                        const value = document.getElementById("error11");
                        value.textContent = item.value;
                    }
                    else if(item.id === 48) {
                        const value = document.getElementById("active5");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 49) {
                        const value = document.getElementById("true5");
                        value.textContent = item.value;
                    } else if(item.id === 50) {
                        const value = document.getElementById("false5");
                        value.textContent = item.value;
                    } else if(item.id === 51) {
                        const value = document.getElementById("error5");
                        value.textContent = item.value;
                    }
                    else if(item.id === 52) {
                        const value = document.getElementById("active4");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 53) {
                        const value = document.getElementById("true4");
                        value.textContent = item.value;
                    } else if(item.id === 54) {
                        const value = document.getElementById("false4");
                        value.textContent = item.value;
                    } else if(item.id === 55) {
                        const value = document.getElementById("error4");
                        value.textContent = item.value;
                    }
                    else if(item.id === 56) {
                        const value = document.getElementById("active10");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 57) {
                        const value = document.getElementById("true10");
                        value.textContent = item.value;
                    } else if(item.id === 58) {
                        const value = document.getElementById("false10");
                        value.textContent = item.value;
                    } else if(item.id === 59) {
                        const value = document.getElementById("error10");
                        value.textContent = item.value;
                    }
                    else if(item.id === 60) {
                        const value = document.getElementById("active12");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 61) {
                        const value = document.getElementById("true12");
                        value.textContent = item.value;
                    } else if(item.id === 62) {
                        const value = document.getElementById("false12");
                        value.textContent = item.value;
                    } else if(item.id === 63) {
                        const value = document.getElementById("error12");
                        value.textContent = item.value;
                    }
                    else if(item.id === 64) {
                        const value = document.getElementById("active14");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 65) {
                        const value = document.getElementById("true14");
                        value.textContent = item.value;
                    } else if(item.id === 66) {
                        const value = document.getElementById("false14");
                        value.textContent = item.value;
                    } else if(item.id === 67) {
                        const value = document.getElementById("error14");
                        value.textContent = item.value;
                    }
                    else if(item.id === 68) {
                        const value = document.getElementById("active7");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 69) {
                        const value = document.getElementById("true7");
                        value.textContent = item.value;
                    } else if(item.id === 70) {
                        const value = document.getElementById("false7");
                        value.textContent = item.value;
                    } else if(item.id === 71) {
                        const value = document.getElementById("error7");
                        value.textContent = item.value;
                    }
                    else if(item.id === 72) {
                        const value = document.getElementById("active15");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " МВт";
                    } else if(item.id === 73) {
                        const value = document.getElementById("true15");
                        value.textContent = item.value;
                    } else if(item.id === 74) {
                        const value = document.getElementById("false15");
                        value.textContent = item.value;
                    } else if(item.id === 75) {
                        const value = document.getElementById("error15");
                        value.textContent = item.value;
                    }
                })
            })
            .catch(error => {
                if (error.name === 'AbortError') {
                    // data = [];
                    console.log('Запрос был отменен из-за таймаута');
                    getServer();
                } else {
                    console.log('Произошла ошибка:', error);
                }
            })
            .finally(() => clearTimeout(timeoutId)); // Очистить таймаут
    }

    document.addEventListener('DOMContentLoaded', function () {
        getServer();
    });

    const intervalTime = 180000; // Интервал времени в миллисекундах (например, 180000ms = 3 минуты)
    setInterval(getServer, intervalTime);

    // Сохраняем данные перед обновлением
    window.addEventListener('beforeunload', function () {
        localStorage.setItem('savedData', JSON.stringify({ key: 'value' }));
    });

    // Восстанавливаем данные после загрузки страницы
    window.addEventListener('load', function () {
        const savedData = localStorage.getItem('savedData');
        if (savedData) {
            const data = JSON.parse(savedData);
            console.log('Восстановленные данные:', data);
        }
    });
</script>