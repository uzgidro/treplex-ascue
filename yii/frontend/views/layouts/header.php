<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\web\YiiAsset;

YiiAsset::register($this);
?>
<nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim"
     data-navbar-appearance="darker"
style="box-shadow: 0px 1px 2px rgba(0,255,255,0.5),
              0px 1px 1px rgba(0,255,255,0.5),
              0px 0px 2px rgba(0,255,255,0.5),
              0px 5px 9px rgba(0,255,255,0.5);">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
                aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button>
        <a class="navbar-brand navbar-brand" href="<?= Url::to(['/']) ?>">
            <svg width="51" height="22" viewBox="0 0 51 22" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.141726 7.25409C0.148709 15.2372 0.137642 14.5435 0.268688 15.2191C0.498517 16.4038 1.0571 17.5383 1.92141 18.5758C2.14571 18.845 2.70907 19.4046 2.98439 19.6316C4.59804 20.9621 6.54571 21.7399 8.82405 21.9637C9.23904 22.0045 10.5166 21.9979 10.9374 21.9528C11.8481 21.8553 12.5899 21.6985 13.3876 21.435C14.8364 20.9563 16.0985 20.2074 17.1211 19.2196C17.7605 18.6019 18.2206 18.0141 18.614 17.3125C18.7547 17.0615 18.9618 16.6273 18.9618 16.5834C18.9618 16.5681 18.9209 16.4889 18.871 16.4075C18.4659 15.7467 18.0667 14.8645 17.8286 14.1038C16.847 10.968 17.4037 7.57364 19.3393 4.89158L19.5335 4.62246V2.31124V0H16.614H13.6944L13.6886 7.09233L13.6827 14.1847L13.6365 14.3831C13.5091 14.931 13.2449 15.4027 12.8357 15.813C12.2394 16.411 11.4422 16.793 10.4882 16.9378C10.1624 16.9873 9.48483 16.9872 9.16169 16.9376C8.20936 16.7914 7.39409 16.3966 6.81166 15.7995C6.41868 15.3966 6.17905 14.9845 6.04303 14.4777L5.98606 14.2655L5.98069 7.13277L5.9753 0H3.05533H0.135376L0.141726 7.25409ZM29.5079 0.0228289C24.5884 0.340027 20.3771 3.50067 18.9935 7.91405C18.386 9.85176 18.3678 11.9796 18.9421 13.9214C19.2448 14.9449 19.7277 15.9662 20.3294 16.8557C21.9373 19.2325 24.4577 20.9536 27.3558 21.6538C28.4372 21.915 29.3624 22.0133 30.5583 21.9939C31.244 21.9827 31.5717 21.9585 32.1418 21.8769C35.5342 21.3914 38.5436 19.5323 40.3711 16.7931C40.6462 16.3808 41.0179 15.7287 40.9921 15.7036C40.9871 15.6988 39.7334 15.3388 38.2061 14.9037C36.6788 14.4686 35.4045 14.1045 35.3744 14.0945C35.3203 14.0767 35.3177 14.0801 35.1967 14.328C34.8702 14.997 34.4686 15.56 33.9493 16.0772C33.1337 16.8894 32.2008 17.3809 31.1309 17.5623C30.8692 17.6066 30.1793 17.6241 29.9053 17.5933C28.965 17.4877 28.0918 17.1218 27.3045 16.5032C26.3774 15.7749 25.6216 14.6554 25.2068 13.3961C24.7996 12.16 24.7219 10.766 24.987 9.45307C25.2154 8.32121 25.6912 7.28319 26.3726 6.43011C26.5939 6.15295 27.1248 5.63225 27.3891 5.43314C28.0206 4.95737 28.7528 4.62012 29.4594 4.47956L29.7172 4.42828H31.9454H34.1737L34.1685 2.2192L34.1633 0.0101102L31.9683 0.00790621C30.7611 0.0067132 29.6539 0.0134264 29.5079 0.0228289ZM37.0116 3.15439C37.0116 4.88931 37.0157 6.30879 37.0206 6.30879C37.0292 6.30879 42.7421 7.89527 42.8156 7.91807C42.8494 7.92857 42.8513 7.84328 42.8513 6.32025V4.71137H46.2816H49.7119V2.35569V0H43.3618H37.0116V3.15439ZM41.4945 17.3138C41.4901 17.3277 41.4623 17.4255 41.4328 17.5312C41.067 18.8383 39.6766 20.2263 37.5654 21.392C37.3619 21.5044 36.7091 21.8275 36.4705 21.9339L36.3276 21.9977L42.9789 21.9988L49.6302 21.9999V19.6442V17.2885H45.5663C42.333 17.2885 41.5008 17.2937 41.4945 17.3138Z" fill="#FFFFFF"/>
                <path d="M36.4276 8.6207C36.2656 8.02191 36.133 7.52275 36.133 7.51146C36.133 7.50018 36.1445 7.49503 36.1585 7.5C36.1726 7.50495 39.406 8.36354 43.3439 9.40794C47.2818 10.4523 50.5021 11.3086 50.5 11.3108C50.4979 11.3129 47.9283 11.28 44.7898 11.2376C41.6513 11.1952 39.0808 11.1626 39.0777 11.1652C39.0745 11.1678 39.2522 11.8362 39.4725 12.6504C39.6928 13.4647 39.8693 14.1345 39.8649 14.139C39.8604 14.1434 36.8991 13.1759 33.2842 11.9889L26.7117 9.83075L31.7308 9.82566L36.7499 9.82056L36.7361 9.765C36.7285 9.73444 36.5897 9.21951 36.4276 8.6207Z" fill="#0AC341"/>
            </svg>

        </a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item">
                <a class="nav-link lh-1" href="<?= Url::to(['/']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-8 me-2 uil-chart-pie"></span>Бош саҳифа
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link lh-1" href="<?= Url::to(['power/index']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-8 me-2 uil-cube"></span>Кунлик
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link lh-1" href="<?= Url::to(['site/sample']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Образец
                </a>
            </li>
            <?php if (Yii::$app->user->identity->type != 9) : ?>
            <li class="nav-item">
                <a class="nav-link lh-1" href="<?= Url::to(['water/index']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Water
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <span class="uil fs-8 me-2 uil-chart-pie"></span>Информация
                </a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                    <li>
                        <a class="dropdown-item" href="<?= Url::to(['information/index']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown-item-wrapper">
                                <span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Информация для агрегата
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?= Url::to(['repair/index']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="uil fs-8 me-2 uil-setting"></span>Информация для ремонте
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?= Url::to(['transformer/index']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="uil fs-8 me-2 uil-setting"></span>Информация для трансформатора
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?= Url::to(['switchs/index']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="uil fs-8 me-2 uil-setting"></span>Информация для выключателя
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?= Url::to(['employee/index']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="uil fs-8 me-2 uil-user"></span>Информация о сотрудников
                        </a>
                    </li>
                </ul>
            </li>


            <?php endif; ?>

            <?php if (Yii::$app->user->identity->type == 9) : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <span class="uil fs-8 me-2 uil-chart-pie"></span>Шаблон
                    </a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['template/index']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-item-wrapper">
                                    <span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Шаблон 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= Url::to(['template/two']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-item-wrapper">
                                    <span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Шаблон 2
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                    data-theme-control="phoenixTheme" value="dark" checked="true"><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Switch theme"><span
                        class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-moon me-1 icon">
                  <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg></span><span class="fs-9 fw-bold">Dark</span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Switch theme"><span
                        class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-sun me-1 icon">
                  <circle cx="12" cy="12" r="5"></circle>
                  <line x1="12" y1="1" x2="12" y2="3"></line>
                  <line x1="12" y1="21" x2="12" y2="23"></line>
                  <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                  <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                  <line x1="1" y1="12" x2="3" y2="12"></line>
                  <line x1="21" y1="12" x2="23" y2="12"></line>
                  <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                  <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg></span><span class="fs-9 fw-bold">Light</span></label>
            </div>
        </li>
        <li class="nav-item">
            <?= Html::a('
                <span class="d-inline-block" style="height:12px;width:12px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out me-2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                </span>
            ', ['site/logout'], ['data-method' => 'post', 'class' => 'nav-link']) ?>
        </li>
    </ul>
</nav>
<script>
    var navbarTopShape = window.config.config.phoenixNavbarTopShape;
    var navbarPosition = window.config.config.phoenixNavbarPosition;
    var body = document.querySelector('body');
    var navbarDefault = document.querySelector('#navbarDefault');
    var navbarTop = document.querySelector('#navbarTop');
    var topNavSlim = document.querySelector('#topNavSlim');
    var navbarTopSlim = document.querySelector('#navbarTopSlim');
    var navbarCombo = document.querySelector('#navbarCombo');
    var navbarComboSlim = document.querySelector('#navbarComboSlim');
    var dualNav = document.querySelector('#dualNav');

    var documentElement = document.documentElement;
    var navbarVertical = document.querySelector('.navbar-vertical');

    if (navbarPosition === 'dual-nav') {
        topNavSlim?.remove();
        navbarTop?.remove();
        // navbarTopSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        navbarDefault?.remove();
        navbarVertical?.remove();
        dualNav.removeAttribute('style');
        document.documentElement.setAttribute('data-navigation-type', 'dual');

    } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
        navbarDefault?.remove();
        navbarTop?.remove();
        // navbarTopSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        topNavSlim.style.display = 'block';
        navbarVertical.style.display = 'inline-block';
        document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
        navbarDefault?.remove();
        navbarVertical?.remove();
        navbarTop?.remove();
        topNavSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        dualNav?.remove();
        navbarTopSlim.removeAttribute('style');
        document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
        navbarDefault?.remove();
        navbarTop?.remove();
        topNavSlim?.remove();
        navbarCombo?.remove();
        // navbarTopSlim?.remove();
        dualNav?.remove();
        // navbarComboSlim.removeAttribute('style');
        // navbarVertical.removeAttribute('style');
        document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
        navbarDefault?.remove();
        topNavSlim?.remove();
        navbarVertical?.remove();
        // navbarTopSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        dualNav?.remove();
        navbarTop.removeAttribute('style');
        document.documentElement.setAttribute('data-navigation-type', 'horizontal');
    } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
        topNavSlim?.remove();
        navbarTop?.remove();
        // navbarTopSlim?.remove();
        navbarDefault?.remove();
        navbarComboSlim?.remove();
        dualNav?.remove();
        // navbarCombo.removeAttribute('style');
        // navbarVertical.removeAttribute('style');
        document.documentElement.setAttribute('data-navigation-type', 'combo');
    } else {
        topNavSlim?.remove();
        navbarTop?.remove();
        // navbarTopSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        dualNav?.remove();
        // navbarDefault.removeAttribute('style');
        // navbarVertical.removeAttribute('style');
    }

    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
    var navbarTop = document.querySelector('.navbar-top');
    if (navbarTopStyle === 'darker') {
        navbarTop.setAttribute('data-navbar-appearance', 'darker');
    }

    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVerticalStyle === 'darker') {
        navbarVertical.setAttribute('data-navbar-appearance', 'darker');
    }
</script>