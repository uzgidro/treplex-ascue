<?php
use yii\helpers\Url;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::to(['/']) ?>" class="brand-link">
        <img src="<?= Url::to(['../images/logo/logo.png']) ?>" alt="UGE Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Узбекгидроэнерго</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Администратор</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Меню', 'header' => true],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    ['label' => 'Календар',  'icon' => 'calendar', 'url' => ['/calendar']],
                    ['label' => 'Организации',  'icon' => 'building', 'url' => ['/organization']],
                    ['label' => 'Пользователи',  'icon' => 'user', 'url' => ['/user']],
                    ['label' => 'Water',  'icon' => 'water', 'url' => ['/water']],
                    ['label' => 'Guides',  'icon' => 'water', 'url' => ['/guides']],
                    ['label' => 'Режа',  'icon' => 'water', 'url' => ['/plan']],
                    ['label' => 'Информация для агрегата',  'icon' => 'water', 'url' => ['/informations']],
                    ['label' => 'Имя трансформатора',  'icon' => 'setting', 'url' => ['/transformer-name']],
                    ['label' => 'Информация для трансформатора',  'icon' => 'water', 'url' => ['/transformer']],
                    ['label' => 'Имя выключателя',  'icon' => 'water', 'url' => ['/switch-name']],
                    ['label' => 'Информация для выключателя',  'icon' => 'water', 'url' => ['/switchs']],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>