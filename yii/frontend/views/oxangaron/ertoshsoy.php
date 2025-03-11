<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\controllers\Energy;
use frontend\controllers\Dashboard;
use frontend\controllers\Day;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Эртошсой МГЭС';
$energy = new Energy();
$id = 75;
$dashboard = new Dashboard();
$power = new Day();
$power->getHour([$id]);
//$power->getDay([$id]);
$urlAggregate1 = $energy->getInformation($id, 1);
$urlAggregate2 = $energy->getInformation($id, 2);
$urlEmployee = Url::to(['site/employee/', 'id' => $id]);
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="<?= Url::to(['/']) ?>">Бош саҳифа</a></li>
        <li class="breadcrumb-item"><a href="<?= Url::to(['oxangaron/index']) ?>">"Охангарон ГЭС" Филиали</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= Html::encode($this->title) ?></li>
    </ol>
</nav>
<?= $dashboard->HeaderGes() ?>
<div class="card mb-2" style="backdrop-filter: blur(15px);">
    <div class="card-body">
        <div class="row align-items-center g-3">
            <div class="col-12 col-sm-auto flex-1">
                <svg
                        style="z-index: 1"
                        width="100%"
                        viewBox="0 0 1300 600"
                        height="100%"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        overflow="hidden"
                >
                    <defs>
                        <clipPath id="clip0">
                            <path
                                    d="M0 0 1280 0 1280 720 0 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip1">
                            <path
                                    d="M335.5 108.5 335.5 127.5 353.5 127.5 353.5 108.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="35"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAkCAMAAAA0AnPTAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADYUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFfwuloAAABIdFJOUwABAgMEBQYHCAkLDA0ODxASExQWFxkaGx4fISIjJC4vNDY3OD0/QEZHSFNUVVtcXV9gYW1ud3t8fYCKjo+QkZSZmpudnp+goep7BjYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF2SURBVDhP7ZTbboJAFEXlWgXBSxVFoFQRRVEEBVQEBUX7/3/UEbnaNtqkj12PZ1ZyJpm9p/Q7oCLxNOM6hIvceeAcQTG8CIYiwIsNoCBYmaDoWh6aIio4kkoQgpP1drfHCxk8xzINMpUgGCNfubfBUB5lyENJ5FskDscOUq5z7+PpXDeWCYauqUqfb1SQyIEglGi/jRcry15vEta2ZS4UkSHQaBkEYVR3MF1tnZ23T/B2ztZUJZbComUQjNO94dxyDn5wTAj8g2Npwx59uxBwarys265/Cs8J4cl3bV3ma5kjjIy1F4SXjDDw1sZIKDjLzf54vnwkXM7H/Wb57/y58/gtnnhTkA3t22xwqYNRrKSaW8fNZcwFGZuBjMUOyCojKgvzPqv6ROyQt6yCzFcafF9RtWLmZ5OB0Iwzf70Q2eJF6Ut3hFb1tuq6DHSwwbDcXQc7zepLWtSrVCGpuMQJNJnvMpAe/gmAH/6WvBIRDTPi6VOUSp+FP4yN7nyJ7gAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img2"
                        ></image>
                        <clipPath id="clip3">
                            <path d="M0 0 35 0 35 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip4">
                            <path
                                    d="M896.5 109.5 896.5 128.5 915.5 128.5 915.5 109.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADYUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFfwuloAAABIdFJOUwABAgMEBQYHCAkLDA0ODxASExQWFxkaGx4fISIjJC4vNDY3OD0/QEZHSFNUVVtcXV9gYW1ud3t8fYCKjo+QkZSZmpudnp+goep7BjYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF2SURBVDhP7ZTbboJAFEXlWgFBsd4QKFVQURRRuSiCgqL9/z/qiGREbFP70Leux5OVnElm71P6JUiBbHzjMkQLFEQgYDhBFiBwDIiZAhyMKNMsV72DY2mKxKCFYCRTa3a6kpxDEoUWz0ALQQnmVXzra4NhjoGmKlKDIdFMwso18X00mVmLJWRhmYbek3gKSyUEwenm22i+clxvDfFcx57rSovG030IQrCd/mS18bfhDhJu/Y1tqAJLpPsQlOS62szx91F8gMTR3ndMrctdHwWkqjSw3CA6JidIcowC1xpI1ZskDxdeGCfnHEkceouhfCct17vD6fwBOZ8Ou/XyX/o76YlveeaDQVTMr6MiQolgBdWwN36QD10AQjcFocskEN+Wos/th/haY6XNXOMLikDxUk83zEIRpuO+XM+KcHkU05AU9bFScqNy3XbZB8rJtwSxWM52vfICK3yxKIbN6g3hmHzNgfXzwQB8d3ryTko6zJGNn6NU+gQLt5LzqSfEQQAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img5"
                        ></image>
                        <clipPath id="clip6">
                            <path d="M0 0 36 0 36 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip7">
                            <path
                                    d="M424 471 518 471 518 561 424 561Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip8">
                            <path
                                    d="M424 483 518 483 518 574 424 574Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip9">
                            <path
                                    d="M424 496 518 496 518 587 424 587Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip10">
                            <path
                                    d="M424 509 518 509 518 600 424 600Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip11">
                            <path
                                    d="M424 522 518 522 518 612 424 612Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip12">
                            <path
                                    d="M424 535 518 535 518 625 424 625Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip13">
                            <path
                                    d="M715 471 809 471 809 561 715 561Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip14">
                            <path
                                    d="M715 483 809 483 809 574 715 574Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip15">
                            <path
                                    d="M715 496 809 496 809 587 715 587Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip16">
                            <path
                                    d="M715 509 809 509 809 600 715 600Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip17">
                            <path
                                    d="M715 522 809 522 809 612 715 612Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip18">
                            <path
                                    d="M715 535 809 535 809 625 715 625Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip19">
                            <path
                                    d="M457.5 277.5 457.5 296.5 476.5 296.5 476.5 277.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADYUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFfwuloAAABIdFJOUwABAgMEBQYHCAkLDA0ODxASExQWFxkaGx4fISIjJC4vNDY3OD0/QEZHSFNUVVtcXV9gYW1ud3t8fYCKjo+QkZSZmpudnp+goep7BjYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF2SURBVDhP7ZTbboJAFEXlWgFBsd4QKFVQURRRuSiCgqL9/z/qiGREbFP70Leux5OVnElm71P6JUiBbHzjMkQLFEQgYDhBFiBwDIiZAhyMKNMsV72DY2mKxKCFYCRTa3a6kpxDEoUWz0ALQQnmVXzra4NhjoGmKlKDIdFMwso18X00mVmLJWRhmYbek3gKSyUEwenm22i+clxvDfFcx57rSovG030IQrCd/mS18bfhDhJu/Y1tqAJLpPsQlOS62szx91F8gMTR3ndMrctdHwWkqjSw3CA6JidIcowC1xpI1ZskDxdeGCfnHEkceouhfCct17vD6fwBOZ8Ou/XyX/o76YlveeaDQVTMr6MiQolgBdWwN36QD10AQjcFocskEN+Wos/th/haY6XNXOMLikDxUk83zEIRpuO+XM+KcHkU05AU9bFScqNy3XbZB8rJtwSxWM52vfICK3yxKIbN6g3hmHzNgfXzwQB8d3ryTko6zJGNn6NU+gQLt5LzqSfEQQAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img20"
                        ></image>
                        <clipPath id="clip21">
                            <path d="M0 0 36 0 36 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip22">
                            <path
                                    d="M751.5 278.5 751.5 297.5 769.5 297.5 769.5 278.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="35"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAkCAMAAAA0AnPTAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADYUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFfwuloAAABIdFJOUwABAgMEBQYHCAkLDA0ODxASExQWFxkaGx4fISIjJC4vNDY3OD0/QEZHSFNUVVtcXV9gYW1ud3t8fYCKjo+QkZSZmpudnp+goep7BjYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF2SURBVDhP7ZTbboJAFEXlWgXBSxVFoFQRRVEEBVQEBUX7/3/UEbnaNtqkj12PZ1ZyJpm9p/Q7oCLxNOM6hIvceeAcQTG8CIYiwIsNoCBYmaDoWh6aIio4kkoQgpP1drfHCxk8xzINMpUgGCNfubfBUB5lyENJ5FskDscOUq5z7+PpXDeWCYauqUqfb1SQyIEglGi/jRcry15vEta2ZS4UkSHQaBkEYVR3MF1tnZ23T/B2ztZUJZbComUQjNO94dxyDn5wTAj8g2Npwx59uxBwarys265/Cs8J4cl3bV3ma5kjjIy1F4SXjDDw1sZIKDjLzf54vnwkXM7H/Wb57/y58/gtnnhTkA3t22xwqYNRrKSaW8fNZcwFGZuBjMUOyCojKgvzPqv6ROyQt6yCzFcafF9RtWLmZ5OB0Iwzf70Q2eJF6Ut3hFb1tuq6DHSwwbDcXQc7zepLWtSrVCGpuMQJNJnvMpAe/gmAH/6WvBIRDTPi6VOUSp+FP4yN7nyJ7gAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img23"
                        ></image>
                        <clipPath id="clip24">
                            <path d="M0 0 35 0 35 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip25">
                            <path
                                    d="M335.5 216.5 335.5 235.5 353.5 235.5 353.5 216.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="35"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAkCAMAAAA0AnPTAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADYUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFfwuloAAABIdFJOUwABAgMEBQYHCAkLDA0ODxASExQWFxkaGx4fISIjJC4vNDY3OD0/QEZHSFNUVVtcXV9gYW1ud3t8fYCKjo+QkZSZmpudnp+goep7BjYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF2SURBVDhP7ZTbboJAFEXlWgXBSxVFoFQRRVEEBVQEBUX7/3/UEbnaNtqkj12PZ1ZyJpm9p/Q7oCLxNOM6hIvceeAcQTG8CIYiwIsNoCBYmaDoWh6aIio4kkoQgpP1drfHCxk8xzINMpUgGCNfubfBUB5lyENJ5FskDscOUq5z7+PpXDeWCYauqUqfb1SQyIEglGi/jRcry15vEta2ZS4UkSHQaBkEYVR3MF1tnZ23T/B2ztZUJZbComUQjNO94dxyDn5wTAj8g2Npwx59uxBwarys265/Cs8J4cl3bV3ma5kjjIy1F4SXjDDw1sZIKDjLzf54vnwkXM7H/Wb57/y58/gtnnhTkA3t22xwqYNRrKSaW8fNZcwFGZuBjMUOyCojKgvzPqv6ROyQt6yCzFcafF9RtWLmZ5OB0Iwzf70Q2eJF6Ut3hFb1tuq6DHSwwbDcXQc7zepLWtSrVCGpuMQJNJnvMpAe/gmAH/6WvBIRDTPi6VOUSp+FP4yN7nyJ7gAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img26"
                        ></image>
                        <clipPath id="clip27">
                            <path d="M0 0 35 0 35 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip28">
                            <path
                                    d="M895.5 218.5 895.5 237.5 914.5 237.5 914.5 218.5ZM1.90735e-05 1.07288e-05 1280 1.07288e-05 1280 720 1.90735e-05 720Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="36"
                                height="36"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADYUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFfwuloAAABIdFJOUwABAgMEBQYHCAkLDA0ODxASExQWFxkaGx4fISIjJC4vNDY3OD0/QEZHSFNUVVtcXV9gYW1ud3t8fYCKjo+QkZSZmpudnp+goep7BjYAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAF2SURBVDhP7ZTbboJAFEXlWgFBsd4QKFVQURRRuSiCgqL9/z/qiGREbFP70Leux5OVnElm71P6JUiBbHzjMkQLFEQgYDhBFiBwDIiZAhyMKNMsV72DY2mKxKCFYCRTa3a6kpxDEoUWz0ALQQnmVXzra4NhjoGmKlKDIdFMwso18X00mVmLJWRhmYbek3gKSyUEwenm22i+clxvDfFcx57rSovG030IQrCd/mS18bfhDhJu/Y1tqAJLpPsQlOS62szx91F8gMTR3ndMrctdHwWkqjSw3CA6JidIcowC1xpI1ZskDxdeGCfnHEkceouhfCct17vD6fwBOZ8Ou/XyX/o76YlveeaDQVTMr6MiQolgBdWwN36QD10AQjcFocskEN+Wos/th/haY6XNXOMLikDxUk83zEIRpuO+XM+KcHkU05AU9bFScqNy3XbZB8rJtwSxWM52vfICK3yxKIbN6g3hmHzNgfXzwQB8d3ryTko6zJGNn6NU+gQLt5LzqSfEQQAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img29"
                        ></image>
                        <clipPath id="clip30">
                            <path d="M0 0 36 0 36 36 0 36Z" fill-rule="evenodd" clip-rule="evenodd" />
                        </clipPath>
                        <clipPath id="clip31">
                            <path
                                    d="M863 6 948 6 948 96 863 96Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip32">
                            <path
                                    d="M863 19 948 19 948 110 863 110Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP8AAP0AAP0AAP4AAP4AAP4AAP4AAP4AAP8AAMVaHOIAAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA6klEQVRIS+3XaxKDIAwE4OCjvkB6/9NWdJUEgr1Avl+W7EwtKzOVmOkrfbBe6DDOOkykAdNswESynOUSy1kusZzlEstZLrGc+kfMbZhmwWF2WDxEDLmImV8JK//QjIt3K5HH5Zv9uNFOu7HCuUEjPrTN5y+mekOkcMXIvX9z7JFTmuAmpA4LljQemcTtWKxF1h1Rj9XaiAS0atkwfwQMpFSEpNeiPKnl20KCIqT6gbiLkKrNifp7RVULK0KStVRbkvHNkUVIvJaiCClvzoKVhntz6iKku5bn2Wy5TotahJROi16E5AI7EUD0A7L3auODNhWvAAAAAElFTkSuQmCC"
                                preserveAspectRatio="none"
                                id="img33"
                        ></image>
                        <clipPath id="clip34">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="39"
                                height="91"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbCAMAAADHnWy9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAzUExURQAAACDfECDXGCXaFSTbFCPZFiPaFSLbFCTbFiTbFSPcEyLcFCHaFSLbFCPcEyPaFSPbFdh6Az4AAAAQdFJOUwAQIDBAUGBwgI+fr7/P3+8jGoKKAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAA60lEQVRIS+3Xaw6EIAwEYPCxvnDp/U+7VkehUtgL9PuFMIlJR5JdV+gj7R7rlp2INqwb5iNGNOKpqj9jFDs8V/jvlaOAjYoFMaIJO6oRIdZjT+EjMmzHpmJD5LJgtzAhcBuw/9Llb2VfvRYuQlKHcxUhKcMZcCSUtTxFSMVw5EiSGeeQFyGJWkQRkhhOwKYmq+VdhPTUctyIlni/uSxCwm3RipDO26IWIXEtlSKk44NYsWybHRb/uDWANpyIs5AN25fj2dQP+oPTRL8g5YAsxyxnOWY5yzHLWY5ZznKsw2lS+dP1/iGW/i049wN/6mrjj3LfTQAAAABJRU5ErkJggg=="
                                preserveAspectRatio="none"
                                id="img35"
                        ></image>
                        <clipPath id="clip36">
                            <path
                                    d="M0 0 5.14286 0 5.14286 12 0 12Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip37">
                            <path
                                    d="M308 5 393 5 393 95 308 95Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip38">
                            <path
                                    d="M308 18 393 18 393 109 308 109Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip39">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip40">
                            <path
                                    d="M0 0 5 0 5 11.6667 0 11.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <image
                                width="156"
                                height="76"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJwAAABMCAYAAACYht5iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABqpSURBVHhe7V0JVFRXmk73TE93umemz/TMnD7T0zM9p8+ZnnO6J53uGJdEE2NiUKPEqEjUGMUlxiUmre0SEzfcAQUX9oKCojb2fXFDkE0odhVwQaEKF9yFAjSZ6Df/f+sVFsVDUMCF1M/5znvvvvduvffux7/c+9/3XniS4uzs/O6qFSsUb7755ku8vWTRop2RGv1FvVZ3yR5r1qypBvADcaJDHPI4snnzZlVDQwOGDBkysaSk5EdbtmwJb21pgT1aCDqdrslBOIf0SpRKZT0T7rVhw3bpdToQ4QS55OAgnEN6JdOmTftVRkbG/QtEuKGvDva+ceMG4mJjZcnGIMLdkk51yEAUw/mm/ykytnoWN5hHsbkThaRhTKb7L55oaHm5tL51SqWx7Y3jxtZXj58z//J4owWl52/+pqShaVhxfdP4sot33q24fP9n4lwS1lAl527+vMzUPHL+gqVLGxsvQxBu8GDv69evI1YQrrUT2RhardZBuIEoJaaWFcX15gtFxpb7JQ1tKCaUGFu+KzGaBYrrW+6VmNpgaLhj2UdL3haQtosF7goYjC33DKa2SwZTa02JqbXJUN9yv9h0F74h2vvmFnMHwsXFxcmSjeHQcANUSkx3VBbC9B+YlGFqPRGJCXcBg3tAOIeGG6BCWogIx9pJnix9gfwz1xEZbTGfFy9exCuvvJIufLjvuYZbtmzZi06jR6+m1e9PcNTfhGPTq0nLw6lTNUQki7928OBBODTcCy9Mnjz5N5s3uiMqKupFqWjgy5PQcB6+4YiNjiTECOzYvr1bwiUkJFySLnHAyqhRowaplGFYtWrVr6WigS/9T7g2bPTYh/jEZEIK4pOS4em1SxBOq9YgLTUVTU1NnQhXUVFRn5qaOiglJeXlpKSkP1qRlpb2Epfv3r178PTp0/9Fuo3nUkaMGDE6J/soXCdNelkqGvjSv4TjqJfMan0LiuvMFtSboU45ilClCmu+Xg+tLgrh4eE4dOgQzGZzO+Fu376Nq1ev4sqVKx3AZQyj0YixY8culm7juZRFny2aWVdXByLeSKlo4MuTMKlyKGlopWUb0g1n4ROoQhSZ2vCwcOTk5HTQdF2ByTlhwoRl0m08l+Ls7LyItfugQYM+kIoGvjwdwkmaz7o0tSI+qxy+QeFISExAGPk1xcXFskSzxaRJk1ZIt/Fcipub29pvv/kWI0eO/EQqGvjytDScHJiAmtQcBIREICUphYinxInjx2XJxphLDSbdxnMpK5at8L537x6mfzj9S6lo4MuzRDgB012UGFuhiMqAUqVFWkqa8PFOnTrViXAL5s3zk27juZStm7eG3b9/H59/9pmXVDTw5ZkjnA0Kz5vhq4qHVh8notkIVQTOnz9PZGuFubUFXp6e8Nrhlfee03tjpdt5qsJRs4uLy7/3FES4/RwArV6xUs/bGzZs+FupqoEr/U04MfZqV9YT2J6Xd+Y69ih0iE1IQnJyMtTqCDFiEanTify5qpMnsWvXrsIxY8aMf5opTZs2bTp95MgRZGVl9Qx87BHLMjo6GsOHD39LqmrgSn8RTgQEJl63DPJ3PuZBmfz+zjhy8gJ8glRIzziIxPg4bN+2rUNXSk1NDby9vUvGjRv3AWmLH0q3+MQkUqM9rYqgiDsykhDVLYKDg+FJWnrfvn1i9MVBuMeE0E6mNmzx2ocwTRSUmhiEaGIRrI6HvyoGe8MY8ThUYZRI2TOUSMfuLz4Lb98QlJaUIjgoGFevXG0nHePMmTPY7eNT8f748S5PknhMuJiYGFKyFmH/7GFy4cIFFBYW4vSp08hIS8dIB+EeH0dPXsbadevJ7OkRqdcjSh+JaPqvjouJRXxcHGKpYQKCFdit0CL7xAU6xzbVqTuQRjS2YV9YLPLyChAeqsSpms5BRW1tLWuPE++///40Mll/I91yv0mkVnuah+6YaKWlpXTfluG8GBlwuVajET7p6dNEuHQH4XqF8MRs1NfVdyIBw8xoNiMjNQ1qVTiUYWrsDdEjp+aKbF3y4Jy8O9CkHEVCUhpSkpLBw0Ryv8eNunfv3mpnZ+eZ/emYWwl38+ZNJCYmdtBwvC4HFoeG6wPsDdGhxca/6go8hBVDDjNrwgi1DnuVUcg7fU2YZFs/rysY6NrTj9UgKDQCBfkFiI6J7uDX2YKHw3x9fc9MnDjRbcGCBZas5j4UK+HYH7t165YgU0/EoeF6CyKLIowIJ9Po9rDO0rp25QpFn2oyt/HQaKPgGx6DgrM35eu3h+kuck9dwa59IaisrISCnHFODrD/LSsaTCYEBQSec3VxmT916tS/kx5Fr8VKuAMHDqC5uVmiU/fi0HC9RV2zII1cY3cH1kJhYWE4kJ4BlUYPf3Uijp2/LVLcu4tmDcYW+ARrUELBREiIQvhwcr9hxUVy2oMDg+qnTpmycOnSpT+WHsljy2MTzqHheoeEnOM4dqyQGlV+gkxPUFVVRcRT4ujRowiPIOJpklFIRJb7vQew+HWKmP04cChT5Nvl5+fL1m+Ly5cuQaFQmFxcXD6bPXv2T6RH88jyuIQ7Q4Q7mLEf7771js+4MeMWTuhjcJ2M0W+/vfCjjz76R+lyn470JeGsUaZfRCJukw8j17iPiiIiroo0XnFxCRThGgRHpsNQb5Z+s+vINuFIOcJJQ+bn5iI+Ib5Lv84WjY2NUIaGXpoxY8YyIt8jZ+H2RsOVlpSgqLAIhqK+R5F13WDAtGnT/iBd7tORvtZw7MT7h/KEGflGfRwwWQ6RI84jDJUnjiNIqYEy5iCKyYTKXYMA+XVZlQ3Y7ReKEydOIDQ0VDjycvXb4yr5k+Hh4Y0zZ8xYsXjx4r+XHlW3YiVcQUGBiIytUWh3ckby4ZLiE0Rkb+wHxMbE4kjmkYFFONHhS1onhDSRXEP2Fpw7lpCQgMioKNTUnEKAQoWE7Arp9+X9u6JzTdjpF0akOwlFUDCM9fJdNXK4dvUq1BERV2fOmLlm7ty5/yA9si7FSjjOAImia2RNx1rTnnjl5eU4eOAgzp45I/ZZfbjCY8ekI/peOM+Qh90GnIbLrmpEcmq6bAP2Fa5fvwGdToukpGQcOHiY/LsE0mic0Cl/TRw1B6oTkJtXIIaUiosMsvV2BY54iXg3Zs2atZai2p9Lj66TWAnHwkTi/jgOgC6Rj2iVb7/9lmekocXcAr1Oj2+++aY9Si0scBDukREam9llh29fg4eGyNlHXl4evMh05lY30jXI3wsHE/r0fETHJSE7OxspKSmydT4MN4joer3+1ly3uRvIz/sn6RG2iy3hrMLuQHJSEjNQIJ/MrclkpD33kUMBEZt5q4Y75tBwjw5fZRRa6b9XrsH6BdSgiQmJZL72QxmhQ8yhYrqOrrpP7mK/oRb+weFkYo+Tn6YSHc+y9XYB7je8RZqLNOWtefPmbf34g4//WXqUnQh3jwimVe2F+9cLEKvbI7B53QKoQ71x524bcq2Ec2i4x0dwOHf4dh8R9jXYL+JMjcwj2dirioXBaCatxvfVOZItOHMdXr4K0dBBQUFCU8rV2R2YLDExMeZPP/lkB0W1/6q1IxybVY2fK5prP0NL7acw1y5EU+0SpKqnURR/kzRctkPD9QZFdU0USUZSYzx+/1tvcPXqNQSTiS0qLBTZJNnHOSlA7lpJAxpbsZei6dLScjGIzoSVq7M7sMZrunWbkxJaQxSKOx013D3MnDISG//6Gtpq56H13Dz4b3sbLhMGodnc7NBwvQFHp4k5J2AwdD/5pV9B5pwHzrkbJUIfA216gTQu2/maDXTNqvjDIr/u8KFD2J+xX77OHoCJx68f66Dh6E/r50IabiFpOCIcwUyaLlU9lUw5abgchw/XC9zF3vA4YSrkGuRJo6KiAhHko+Xl5WNPSCQM9Z1HKdjU8pBZUk4lQskVqKysEJOzm5o7T8zuDoJwMZ0Jp/P7QGi3OxJ4PUPzAZrId2wn3PdPw3VsiMeFX6hWtjGeFq5fuw4ycygrLcVuvxAcKqsX1yk3Jptb1YidvkFi/DU4MAiXL1+WrbMryBHuHkHvN7GdbFbCpWkmopkJ9whRallZGfuLHCWLcx5VnkHC2Ws53paBcMTtj+NuhzaEUZQo1xhPG0lJSWRiDyAyJgERSdl21y8R0EQ+aL0Z3gEqVFVVQ6VS4eTJk7L1yUFewwE6f3vCzReEa7p96wHhutFwXP8md3cy+RkICgwUnd89HcWwyjNDuHXbd8d5+qrOefiHn/fyU9ftDNDWe/lrjF4B2gbPIO0FrwDdpZ0K/SVvhf6KjyLyinew/rp3cOR1b0XUzV3Bkbd2KaKbGDv91c2rV3/ZrNNozZF6fXOkTm+OiYwxk1/TkhCf0EYP6Q75VneTk5O/TUlJ+b+0tLTvCPfS6T87gx4k98pzHtnhw4fFg+G+Mh645wfF/Ww8XMQagFOyiw0GkVFbTv/1JqNRNLY9AezBaUs83bCIzvUO1ogRCMs/ih35aDtYl4Kso7lIJxJkZmbK1mcPWcIRKQI9nXG+yI0wC+cIvK4JeJ8Ix1Fq9xruu+++E/d/YP9+1J6tFQgMCMDNGzceiXTPDOH6SuiefmAPnk/Aqd2cZRsUFPQjBq3/3Z49e35My5/wAPmECRN+yhg0aNBP33333Z9xNsOyZct+sWbNml+uXLnyV59//vl/Llq06Lfz58//He37PZ3z0qTx418eO3bsn8c7OQ1ymTx5EWkHam95ItiCRwxCghWoJP9uX4AS+w1n27tOLISzaDouiz5YBF1UbHuqOA/Gy9VpRTvhbOY0cJSam52Jre5rkXU4XWDH1g04fCBdjDjkEglu3bTRcDKE4y6bwIBAkc3MBGUcpX9Gf1+/7zfhnqaMGjXqD7t37z7JLzmUI4MtRM9/coqIYjk1PTTuoHAHOk/maSOfrw57A0Jx7tw5BPFknWsdJ+vYg6PU6Kho3GlrI9xBg6kBWzZtFsELaX7otFpEkKlmshTk5yOTtDn7iicqj4M1PfubnE7F2twKnhbZXp5fIJYMTw+PDsday/kYObApfiYG7weKLFiw4KekDUM5M0SODPbg48LDwlBRVgFvfxWOtWcX2wYUbSiovUXBhJKCifNQKpXC/MnVx/DeuRM+3t74Yunn+OKzz/EXsVxq2V7KS5t1Kp/+4TQs/nQh1n71tcj/06jVwndkrcbzbgUuXMQlQmJ8Ak5V10CjisAFIjKXtR9D4HOWL1+OQH9/QgCCbMDbX65chSwH4fpeyOR+RFqhuSf5b8LEhoSI95f4BauQkl9tQ7YHoMAKfuExKCouQWJSIpk1+Tc8cTYLD5X1FBwENJAPGhkZCf5+xTHSVLt9fLBpw0a4b9gA94203OiOjbRcv3YdNlLZurVraR/vdxf7LMdsxOpVq4TP25U4TGo/yjvvvPM7Ly+v8mvXrskSowPMLUhNSaGA5QD27z+A4MhUi4ntRLy7UCdnkYnLEAmN/Mr/npD6YWCzfom0E8+6txJu7aYVmPGJM2YseA/TCR8xFr6HRV9NwUyxnIzZi9/DJ6umUPkEOm4cHTMBH7qNQWJyvESvzuIgXD8Lp4ovWbLEv7y8/L5cY9vDamJPVlVjl1848k9fl4hmE1DQMq2gBoEhEThXew6KEAV64jd2BY7KmXA8a81KOPd9SzBn++tw8xiC2TuGEYZi7u5h2JHzPub5DIHnUWcs8H8d29ImYb7PG5jjMRTzPN+C25bh0MYpJXp1FgfhnpC4TJo0NT4u7jZrMrlGtwV3FIeSia2qOokgpRqJ7cmdVlhIl1d9lfy6EJiMDSI9irN75errDqzhLpMvFmslHEWp7r6LMZcIN8djMOYQ4ebsGIJ5RDhPQbjBgnCf+r2Ore2EG4L5niPhtnU4dLEOwj0TQib2t9u2bSu+0tgo2/D2SE1NxcEDB3A4M1vMGuNZ/pw6b806Ect6M/YEqXHiZJXoCmGyyNX1MPBrZlm7sQ/G7yPxo+j1i03TiXDDBZGYcG6k4SyEc8ZcJhwtF/qNwBZBuBGkCUkDOgj37An3/y1csMC7uLi4RyaWRxk4W/f0mVPwpig1p/qyjaaTiGe6g5DodBw6nIW83FwkJSQJn1CuPjk0U5DReOmy6CrhCJS7Sdbu+VSYVCacm5VwPkPhJQg3BF5HJwgNt5kIN89nuES4tzB7y+tEuFCJXp3FQbinJBMnTnTW6/XXe+Lws3/Gk29qqqqgjNAjWja58y7ij5RCpY0ScxTCQpVi9ECuvq5gGzSs8VwA15VD4bpqEKasfgWuq4fgo/WDsVrjhGnug7BKNwbTNg3CCgUFFV8PhQsdM33165i6fDC00WESvTqLg3BPUZycnP7D3d09l+cayBHAHjzExUNL/OIcv7AYYU4tY8oPyHeksgE+/goxuZqTOk0mk2xdcrAl3Pm6WlRUlAuUV5aKrJe09FTM3jYUf40YhWWatzF7zbsoryiTjqtAJR9L2zyHoitxEO4pCw+3zZ8/fzv5XvfkSGAPHtDnjt+683UiufPI8QvCpNqSznC+CV5+ShHB6nR6MddUri57cGcv+4yaCDUqyok8BOuSkZqWglnuQ/GX0DexnOC20gnlZURGm2PKy4mAtOwKHIFzQOQg3FOWsWPHOqnV6sbuxkoZ7Sa2uhpafTR06fmdUp2YhP7qBOQfKxIahYes5OqyBY8S8EhDNaGGiG2LI4cOY93XX+OrjcvhNOclTJg1DDu9t8F9/UYcy89HDQUtHc/hbXtQOR2XlJDoINyzIGPGjPm3DevXH+FPa8oRwh7WDBdDcSl8QiJRVNcsEjktpLPModCnFyA2LgnV1VVQqyLEyIJcXd1h3969WPrFp3Bd8We4bRuGOWRaJy98Dbt2eSKEyC93Tlfgmf0Owj0jQib2h25ubhvy8vK+k2sse7DWUFKAcIF8NR+/EBwuq7PRdKz17iLDcBb+QTwv9aLw6/gdIvX19T0CT9hmf5AnVG8PXAGP3PHwzHsPHnnjsCNzIvRxKui0NvmHFARlZR1FSLiWApxIqDWRuGSXRMqEc3V1/V/plh3yLMj48ePfCg8Pv9jc1L2JZSddqQwT7xaOikuEKilLaLcHOXZt4tOdO/eF4ELDRZG1kZebJyG3S3DaUlJiElJTkrFl82Ys3zILnvljiXDj4MWkOzIB7tu+xuZNm8hsZ6GyvAIBwWFIzqsSv804dv4WduwLJXP9QGs7CPeMCk/5++qrrzJY09gSrCuwed2fniaSPHcFaVB0/rYgnLWj2GBqgb8qHgHKaEIUAm0QEEYQ65ESorBzTxB/gwJbtrtj+/ZNcP3kHXwWNKIdi/2GY9YcV2ylffxi7ekffYyUYzXtv2clu6HOjDDVg7R/B+GeYWETO2vmzNVZWVnf2pKrK9RU1wgTe/niJewJCEVG0Zn2hmciPPDxLBCasAOs82fvQnegCHv27saMVcOxOswJH61/DYv3jMQnnsMxbd0QrFA6YSr5dF/rxsFp2iAEK1Xg11nY1i8IR3UFinkmlmmbDsI9B+Lk5PS6QqEwyn1i0x48I587fqspik1KSYMyVkru7ECEh4PNYeT+QiiUAVgZPh5zdg7FF6FvY2ngcCzYMxwrtaMxa9urWBM3Fi4b/owlW8dAExktQziu6y5CbN5E6iDccyJkYn+xatWqJM78tSVYV+A8N45kq2tOY5d/GApOX4OB3+LZDdgUFxK0aXkIDQmG88I/wW3T6/jwy0GYuupVuG19De8v+hMW7n4T4+b+AUt938ZI5z9Co48hs00akv03JhqBNWrOyUsUKSe0X5eDcM+RAPjBxx9//JfMzMy7tuTqCvxtMO6zu9J4BcnJaUhOsiCJQdsd0F6eKhAaEgY/P1/s9NiBtRs3YYvHLmz18MZmwrYdPrTtTds7abkTHl4+VL4XpcY2lFpJR8tjZ29g++5A8VYA6zU5CPccyjvvvDM4ICDgXE/61djE8nyG6KgoMXzFiOoC1v0xUbSk47k7hD96ok7NEQRiMpWSibQQyrJUp5ImVOkRoYlBGCFcG02IgUoXI7TeNbs5GA7CPafC74hbsWJFFH/xxrZB+xrnamsRQebVOvfXHn6aZDFdUO5cOfA7Vxwdv8+xUOMtzMjIuCPXuH2Bc7VnhRaTIxuDX7R980bPXq3B0xgLCw1IOFp5odjYWldiaj1Pfl9KqenO1rL6lvUlJkbrluL6lmyKmJPoGM8SU/OGMmPzomJj02zat6SkvmVDibE1xGBsO1ZS16zi7fIG88xSU/ObJcbmNyouNo+ovNj2RqnR/KHB1Lqdjs0qNpqXl15q+w27JNJjc0hvZNSoUS/v27fvFHcCyzV0b1BLhNM8hHARKTkiIu54HneByOMYES45v0rqfuHggrti5KJoqYwzYsh02+9nc96+Lratpp7LeP2u6JJpP5eWRabWbw0NLTulx+aQ3gi/eHr58uWxPKjfsfF7ByYcazgrQWwhIlFTK3b5KXE4MwuXLzeK5IKb1693idycXKQQ4ez7BPsHHd0ACzFbI6RH5pC+EFcX1zkpKSnEFXkCPSoaL19GoD5d0hxysGiiA4az4jj+mPE+VUKX2BMej7zTPfy6T5/CkjvoIFw/yNi33/79nl3eJx726aWeotVshndghGgs+YZkWPfZLh8G23OfFByE61dZ5uLy4tKlS0OOV1b2aP5E12hFamo60gpPCb9IvjGfBzgI90Rk6pQp0xPiE5p68lXFhyFEqRafk5Lz5fofclqyK3R1nmXbQbgnIKNHj/5vDw+PsqtXH/4inO5w6FCmmJYYFn+YNN5ppBedIZxFRh+A60knP5DrTSmoeYB8m3Xrtn2ZLaz77Y5LlbbjMksTpMfikP4U/lIhRbK+ZWVlj21i+aPG/DkCY70R2dk5ItnySB8iKyubltmYPHmqZtiIt4YPG/Fun2Pk6LHDpEfikCchH3zwweTY2NibvX0nSX9iyZIl26XLdchAkDFjxvzXtm3bivgbXHIN3nfoKak7HvfZ4sU7pEt1yEAR/vw5vwXAUGToZRTb9yDT7yDcQBVnZ+cJkT18C8CTgoNwA1xGjhz5643r1iUogoPzrQgJVtCSEZwfLEGheFDWPRRSHQ/KrHXYl1tAZVw/wdXV9VO+rvT09B8zxEX2mbzwwv8Dqz2REX1DUHMAAAAASUVORK5CYII="
                                preserveAspectRatio="none"
                                id="img41"
                        ></image>
                        <clipPath id="clip42">
                            <path
                                    d="M0 0 125 0 125 60.8974 0 60.8974Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip43">
                            <path
                                    d="M1058-11 1153-11 1153 79 1058 79Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip44">
                            <path
                                    d="M1160 56 1249 56 1249 146 1160 146Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip45">
                            <path
                                    d="M1164 15 1238 15 1238 106 1164 106Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip46">
                            <path
                                    d="M178 209 246 209 246 300 178 300Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip47">
                            <path
                                    d="M178 346 247 346 247 437 178 437Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip48">
                            <path
                                    d="M949 212 1017 212 1017 303 949 303Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip49">
                            <path
                                    d="M949 346 1017 346 1017 437 949 437Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip50">
                            <path
                                    d="M425 437 509 437 509 521 425 521Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip51">
                            <path
                                    d="M425 437 509 437 509 521 425 521Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip52">
                            <path
                                    d="M425 437 509 437 509 521 425 521Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip53">
                            <path
                                    d="M718 437 802 437 802 521 718 521Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip54">
                            <path
                                    d="M718 437 802 437 802 521 718 521Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip55">
                            <path
                                    d="M718 437 802 437 802 521 718 521Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip56">
                            <path
                                    d="M0 0 8 0 8 18.6667 0 18.6667Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip57">
                            <path
                                    d="M67 480 76 480 76 501 67 501Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip58">
                            <path
                                    d="M297 509 366 509 366 600 297 600Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                        <clipPath id="clip59">
                            <path
                                    d="M878 509 946 509 946 600 878 600Z"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                            />
                        </clipPath>
                    </defs>
                    <g clip-path="url(#clip0)">
                        <rect
                                x="0"
                                y="0"
                                width="1280"
                                height="720"
                                fill="#FFFFFF"
                                fill-opacity="0"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="19"
                                transform="translate(566.696 23)"
                        >
                            Эртошсой МГЭС
                            <tspan font-size="11" x="-265.5" y="58">Л</tspan>
                            <tspan font-size="11" x="-257.5" y="58">-</tspan>
                            <tspan font-size="11" x="-254" y="58">25</tspan>
                            <tspan font-size="11" x="-243.333" y="58">-</tspan>
                            <tspan font-size="11" x="-239.833" y="58">Наугарзан</tspan>
                            <tspan font-size="11" x="-188.833" y="58">-</tspan>
                            <tspan font-size="11" x="-185.333" y="58">2</tspan>
                            <tspan font-size="11" x="-360.415" y="392">КРУ 10,5 кВ</tspan>
                        </text>
                        <a href="<?= $urlEmployee ?>" style="">
                            <text
                                    fill="#85a9ff"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="10"
                                    transform="translate(10 19)"
                            >
                                Сотрудники
                            </text>
                        </a>
                        <path
                                d="M177.5 401.5 668.38 401.769"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M0 0 321.667 0.000104987"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 499.167 265.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(200.027 282)"
                        >
                            КРУ 6 кВ
                            <tspan x="160.533" y="-161">В</tspan>
                            <tspan x="167.7" y="-161">-</tspan>
                            Н
                            <tspan x="179.533" y="-161">-</tspan>
                            2
                            <tspan x="281.323" y="153">В</tspan>
                            <tspan x="288.489" y="153">-</tspan>
                            Г
                            <tspan x="298.823" y="153">-</tspan>
                            1
                            <tspan x="746.754" y="133">КРУ 10,5 кВ</tspan>
                        </text>
                        <path
                                d="M0 0 361.353 0.771234"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 656.5 402.271)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(716.153 435)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            Г
                            <tspan x="17.5" y="0">-</tspan>
                            2
                        </text>
                        <rect
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                transform="matrix(1 0 0 -1 615.5 411.5)"
                        />
                        <path
                                d="M915 509.5 915 536.472 912 536.472 912 509.5ZM913.5 536.472 918 533.472 913.5 542.472 909 533.472Z"
                                fill="#989898"
                        />
                        <path
                                d="M0 0 294.563 0.00377953"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1018.06 267.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(970.749 278)"
                        >
                            КРУ 6 кВ
                            <tspan x="-108.297" y="-196">Л</tspan>
                            -25
                            <tspan x="-86.1302" y="-196">-</tspan>
                            Наугарзан
                            <tspan x="-31.6302" y="-196">-</tspan>
                            1
                        </text>
                        <path id="c6002"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 329.5 198.5)"
                        />
                        <path id="c6001"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 329.5 174.5)"
                        />
                        <path
                                d="M1.5-2.62503e-06 1.50009 53.9918-1.49991 53.9918-1.5 2.62503e-06ZM9.44867e-05 53.9918 4.50009 50.9918 0.000104987 59.9918-4.49991 50.9918Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 344.5 144.492)"
                        />
                        <g clip-path="url(#clip1)">
                            <g clip-path="url(#clip3)" transform="translate(327 102)">
                                <use width="100%" height="100%" xlink:href="#img2"></use>
                            </g>
                        </g>
                        <rect id="c600"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 335.5 127.5)"
                        />
                        <path
                                d="M1.5-2.32696e-06 1.5001 67.6764-1.49989 67.6764-1.5 2.32696e-06ZM-4.5 6.98088e-06C-4.5-2.48527-2.48529-4.5-6.98088e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-6.98088e-06 4.5 2.48527 2.48529 4.5 6.98088e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 6.98088e-06Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 344.5 266.176)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(922.84 121)"
                        >
                            В
                            <tspan x="7.16663" y="0">-</tspan>
                            Н
                            <tspan x="19" y="0">-</tspan>
                            1
                            <tspan x="-489.62" y="203">Т</tspan>
                            -1
                            <tspan font-weight="400" x="-523.62" y="216">10,5/6,3</tspan>
                            <tspan font-weight="400" x="-485.953" y="216">кВ</tspan>
                            <tspan font-weight="400" x="-532.286" y="229">ТД</tspan>
                            <tspan font-weight="400" x="-518.453" y="229">-</tspan>
                            <tspan font-weight="400" x="-514.953" y="229">1600кВА</tspan>
                            <tspan font-weight="400" x="-642.303" y="353">ТСН</tspan>
                            <tspan font-weight="400" x="-620.97" y="353">-</tspan>
                            <tspan font-weight="400" x="-617.47" y="353">1</tspan>
                            <tspan font-weight="400" x="-654.136" y="366">10/0,4</tspan>
                            <tspan font-weight="400" x="-624.47" y="366">кВ</tspan>
                            <tspan font-weight="400" x="-662.303" y="379">ТМ</tspan>
                            <tspan font-weight="400" x="-646.303" y="379">-</tspan>
                            <tspan font-weight="400" x="-642.803" y="379">40кВА</tspan>
                            <tspan font-weight="400" x="12.5495" y="350">ТСН</tspan>
                            <tspan font-weight="400" x="33.8828" y="350">-</tspan>
                            <tspan font-weight="400" x="37.3828" y="350">2</tspan>
                            <tspan font-weight="400" x="12.5495" y="363">10/0,4</tspan>
                            <tspan font-weight="400" x="42.2161" y="363">кВ</tspan>
                            <tspan font-weight="400" x="12.5495" y="376">ТМ</tspan>
                            <tspan font-weight="400" x="28.5495" y="376">-</tspan>
                            <tspan font-weight="400" x="32.0495" y="376">40кВА</tspan>
                            <tspan x="-142.118" y="203">Т</tspan>
                            <tspan x="-134.952" y="203">-</tspan>
                            2
                            <tspan font-weight="400" x="-142.118" y="216">10,5/6,3</tspan>
                            <tspan font-weight="400" x="-104.452" y="216">кВ</tspan>
                            <tspan font-weight="400" x="-142.118" y="229">ТД</tspan>
                            <tspan font-weight="400" x="-128.285" y="229">-</tspan>
                            <tspan font-weight="400" x="-124.785" y="229">1600кВА</tspan>
                            <tspan x="-551.791" y="46">Т</tspan>
                            <tspan x="-544.624" y="46">-</tspan>
                            2
                            <tspan font-weight="400" x="-551.791" y="59">35/6,3</tspan>
                            <tspan font-weight="400" x="-522.124" y="59">кВ</tspan>
                            <tspan font-weight="400" x="-551.791" y="72">ТМ</tspan>
                            <tspan font-weight="400" x="-535.791" y="72">-</tspan>
                            <tspan font-weight="400" x="-532.291" y="72">4000кВА</tspan>
                            <tspan x="3.41449" y="45">Т</tspan>
                            <tspan x="10.5811" y="45">-</tspan>
                            1
                            <tspan font-weight="400" x="3.41449" y="58">35/6,3</tspan>
                            <tspan font-weight="400" x="33.0811" y="58">кВ</tspan>
                            <tspan font-weight="400" x="3.41449" y="71">ТМ</tspan>
                            <tspan font-weight="400" x="19.4145" y="71">-</tspan>
                            <tspan font-weight="400" x="22.9145" y="71">4000кВА</tspan>
                            <tspan font-weight="400" x="-426.693" y="340">Г</tspan>
                            <tspan font-weight="400" x="-420.527" y="340">-</tspan>
                            <tspan font-weight="400" x="-417.027" y="340">1</tspan>
                            <tspan font-weight="400" x="-426.693" y="353">10,5</tspan>
                            <tspan font-weight="400" x="-405.36" y="353">кВ</tspan>
                            <tspan font-weight="400" x="-426.693" y="366">1,</tspan>
                            <tspan font-weight="400" x="-418.693" y="366">016</tspan>
                            <tspan font-weight="400" x="-400.027" y="366">МВт</tspan>
                            <tspan font-weight="400" x="-426.693" y="379">СГСБ1</tspan>
                            <tspan font-weight="400" x="-394.693" y="379">0</tspan>
                            <tspan font-weight="400" x="-389.36" y="379">16</tspan>
                            <tspan font-weight="400" x="-378.693" y="379">-</tspan>
                            <tspan font-weight="400" x="-375.193" y="379">6В4</tspan>
                            <tspan font-weight="400" x="-208.02" y="342">Г</tspan>
                            <tspan font-weight="400" x="-201.853" y="342">-</tspan>
                            <tspan font-weight="400" x="-198.353" y="342">2</tspan>
                            <tspan font-weight="400" x="-226.687" y="355">10,5</tspan>
                            <tspan font-weight="400" x="-205.353" y="355">кВ</tspan>
                            <tspan font-weight="400" x="-241.02" y="368">1,</tspan>
                            <tspan font-weight="400" x="-233.02" y="368">016</tspan>
                            <tspan font-weight="400" x="-214.353" y="368">МВт</tspan>
                            <tspan font-weight="400" x="-262.353" y="381">СГСБ1</tspan>
                            <tspan font-weight="400" x="-230.353" y="381">0</tspan>
                            <tspan font-weight="400" x="-225.02" y="381">16</tspan>
                            <tspan font-weight="400" x="-214.353" y="381">-</tspan>
                            <tspan font-weight="400" x="-210.853" y="381">6В4</tspan>
                        </text>
                        <path id="c6006"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 452.5 361.5)"
                        />
                        <path id="c6005"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 452.5 337.5)"
                        />
                        <path
                                d="M469 265.493 469.206 306.562 466.206 306.577 466 265.508ZM463 265.523C462.988 263.037 464.992 261.013 467.477 261 469.963 260.988 471.988 262.992 472 265.477 472.012 267.963 470.008 269.988 467.523 270 465.037 270.012 463.013 268.008 463 265.523Z"
                                fill="#006600"
                        />
                        <path
                                d="M466.401 455.405 466 402.511 469 402.489 469.401 455.382ZM463 402.534C462.981 400.049 464.981 398.019 467.466 398 469.951 397.981 471.981 399.981 472 402.466 472.019 404.951 470.019 406.981 467.534 407 465.049 407.019 463.019 405.019 463 402.534Z"
                                fill="#6600CC"
                        />
                        <rect id="c93"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 458.5 440.5)"
                        />
                        <path
                                d="M0 0 0.205984 39.8038"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 467.5 401.304)"
                        />
                        <path
                                d="M759.401 455.405 759 402.511 762 402.489 762.401 455.382ZM756 402.534C755.981 400.049 757.981 398.019 760.466 398 762.951 397.981 764.981 399.981 765 402.466 765.019 404.951 763.019 406.981 760.534 407 758.049 407.019 756.019 405.019 756 402.534Z"
                                fill="#6600CC"
                        />
                        <rect id="c133"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 751.5 440.5)"
                        />
                        <path id="c2132"
                                d="M0 15.5C-1.9097e-15 6.93959 6.71573-1.97336e-15 15-3.94671e-15 23.2843-7.89343e-15 30 6.93959 30 15.5 30 24.0604 23.2843 31 15 31 6.71573 31-9.5485e-15 24.0604 0 15.5Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 898.5 510.5)"
                        />
                        <path id="c2131"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 898.5 485.5)"
                        />
                        <path
                                d="M912.401 454.405 912 401.511 915 401.489 915.401 454.382ZM909 401.534C908.981 399.049 910.981 397.019 913.466 397 915.951 396.981 917.981 398.981 918 401.466 918.019 403.951 916.019 405.981 913.534 406 911.049 406.019 909.019 404.019 909 401.534Z"
                                fill="#6600CC"
                        />
                        <rect id="c213"
                                x="0"
                                y="0"
                                width="19"
                                height="18"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 903.5 440.5)"
                        />
                        <path
                                d="M333 510.5 333 537.472 330 537.472 330 510.5ZM331.5 537.472 336 534.472 331.5 543.472 327 534.472Z"
                                fill="#989898"
                        />
                        <path id="c1732"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#989898"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 316.5 510.5)"
                        />
                        <path id="c1731"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 316.5 486.5)"
                        />
                        <path
                                d="M330.401 455.405 330 402.511 333 402.489 333.401 455.382ZM327 402.534C326.981 400.049 328.981 398.019 331.466 398 333.951 397.981 335.981 399.981 336 402.466 336.019 404.951 334.019 406.981 331.534 407 329.049 407.019 327.019 405.019 327 402.534Z"
                                fill="#6600CC"
                        />
                        <rect id="c173"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="2.66667"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 321.5 441.5)"
                        />
                        <path id="c6402"
                                d="M0 15.5C-1.97336e-15 6.93959 6.93959-1.97336e-15 15.5-3.94671e-15 24.0604-7.89343e-15 31 6.93959 31 15.5 31 24.0604 24.0604 31 15.5 31 6.93959 31-9.86678e-15 24.0604 0 15.5Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 890.5 200.5)"
                        />
                        <path id="c6401"
                                d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 890.5 175.5)"
                        />
                        <path
                                d="M1.5-2.62503e-06 1.50009 53.9918-1.49991 53.9918-1.5 2.62503e-06ZM9.44867e-05 53.9918 4.50009 50.9918 0.000104987 59.9918-4.49991 50.9918Z"
                                fill="#663300"
                                transform="matrix(1 0 0 -1 905.5 145.492)"
                        />
                        <g clip-path="url(#clip4)">
                            <g clip-path="url(#clip6)" transform="translate(888 103)">
                                <use width="100%" height="100%" xlink:href="#img5"></use>
                            </g>
                        </g>
                        <rect id="c640"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#663300"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 896.5 128.5)"
                        />
                        <path
                                d="M1.5-2.32696e-06 1.5001 67.6764-1.49989 67.6764-1.5 2.32696e-06ZM-4.5 6.98088e-06C-4.5-2.48527-2.48529-4.5-6.98088e-06-4.5 2.48527-4.5 4.5-2.48529 4.5-6.98088e-06 4.5 2.48527 2.48529 4.5 6.98088e-06 4.5-2.48527 4.5-4.5 2.48529-4.5 6.98088e-06Z"
                                fill="#006600"
                                transform="matrix(1 0 0 -1 905.5 268.176)"
                        />
                        <path
                                d="M424.704 509.443 517.812 509.443 517.812 522.243 424.704 522.243Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.704 522.243 517.812 522.243 517.812 535.043 424.704 535.043Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.704 535.043 517.812 535.043 517.812 547.843 424.704 547.843Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.704 547.843 517.812 547.843 517.812 560.643 424.704 560.643Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.704 560.643 517.812 560.643 517.812 573.443 424.704 573.443Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.704 573.443 517.812 573.443 517.812 586.243 424.704 586.243Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.037 522.243 518.479 522.243"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.037 535.043 518.479 535.043"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.037 547.843 518.479 547.843"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.037 560.643 518.479 560.643"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.037 573.443 518.479 573.443"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.704 508.776 424.704 586.909"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M517.812 508.776 517.812 586.909"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.037 509.443 518.479 509.443"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M424.037 586.243 518.479 586.243"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip7)">
                            <text id="g93"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(428.484 519)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip8)">
                            <text id="g95"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(428.484 532)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip9)">
                            <text id="a93"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(428.484 545)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip10)">
                            <text id="k93"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(428.484 558)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip11)">
                            <text id="n93"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(428.484 571)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip12)">
                            <text id="w93" fill="blue"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(428.484 583)"
                            >
                                Qвода
                            </text>
                        </g>
                        <path
                                d="M715.364 509.501 808.472 509.501 808.472 522.301 715.364 522.301Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M715.364 522.301 808.472 522.301 808.472 535.101 715.364 535.101Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M715.364 535.101 808.472 535.101 808.472 547.901 715.364 547.901Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M715.364 547.901 808.472 547.901 808.472 560.701 715.364 560.701Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M715.364 560.701 808.472 560.701 808.472 573.501 715.364 573.501Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M715.364 573.501 808.472 573.501 808.472 586.301 715.364 586.301Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M714.697 522.301 809.139 522.301"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M714.697 535.101 809.139 535.101"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M714.697 547.901 809.139 547.901"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M714.697 560.701 809.139 560.701"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M714.697 573.501 809.139 573.501"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M715.364 508.834 715.364 586.967"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M808.472 508.834 808.472 586.967"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M714.697 509.501 809.139 509.501"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M714.697 586.301 809.139 586.301"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip13)">
                            <text id="g133"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(719.143 520)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip14)">
                            <text id="g135"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(719.143 532)"
                            >
                                Qвар
                            </text>
                        </g>
                        <g clip-path="url(#clip15)">
                            <text id="a133"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(719.143 545)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g clip-path="url(#clip16)">
                            <text id="k133"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(719.143 558)"
                            >
                                КПД
                            </text>
                        </g>
                        <g clip-path="url(#clip17)">
                            <text id="n133"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(719.143 571)"
                            >
                                НА
                            </text>
                        </g>
                        <g clip-path="url(#clip18)">
                            <text id="w133"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(719.143 584)"
                            >
                                Qвода
                            </text>
                        </g>
                        <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(726.81 584)"
                        >

                            <tspan fill="#828897" font-weight="700" x="-341.106" y="-294">В</tspan>
                            <tspan fill="#828897" font-weight="700" x="-333.939" y="-294">-</tspan>
                            <tspan fill="#828897" font-weight="700" x="-330.439" y="-294">Л</tspan>
                            <tspan fill="#828897" font-weight="700" x="-322.439" y="-294">-</tspan>
                            <tspan fill="#828897" font-weight="700" x="-318.939" y="-294">
                                Эртош 1
                            </tspan>
                            <tspan fill="#828897" font-weight="700" x="-316.935" y="-199">В</tspan>
                            <tspan fill="#828897" font-weight="700" x="-309.768" y="-199">-</tspan>
                            <tspan fill="#828897" font-weight="700" x="-306.268" y="-199">10</tspan>
                            <tspan fill="#828897" font-weight="700" x="-295.601" y="-199">-</tspan>
                            <tspan fill="#828897" font-weight="700" x="-292.101" y="-199">Т1</tspan>
                            <tspan fill="#828897" font-weight="700" x="52.4706" y="-200">В</tspan>
                            <tspan fill="#828897" font-weight="700" x="59.6373" y="-200">-</tspan>
                            <tspan fill="#828897" font-weight="700" x="63.1373" y="-200">10</tspan>
                            <tspan fill="#828897" font-weight="700" x="73.804" y="-200">-</tspan>
                            <tspan fill="#828897" font-weight="700" x="77.304" y="-200">Т2</tspan>
                            <tspan fill="#828897" font-weight="700" x="51.6796" y="-293">В</tspan>
                            <tspan fill="#828897" font-weight="700" x="58.8463" y="-293">-</tspan>
                            <tspan fill="#828897" font-weight="700" x="62.3463" y="-293">Л</tspan>
                            <tspan fill="#828897" font-weight="700" x="70.3463" y="-293">-</tspan>
                            <tspan fill="#828897" font-weight="700" x="73.8463" y="-293">
                                Эртош 2
                            </tspan>
                        </text>
                        <g clip-path="url(#clip19)">
                            <g clip-path="url(#clip21)" transform="translate(449 271)">
                                <use width="100%" height="100%" xlink:href="#img20"></use>
                            </g>
                        </g>
                        <rect id="c6004"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 457.5 296.5)"
                        />
                        <rect id="c6007"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 457.5 391.5)"
                        />
                        <path id="c6406"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 745.5 362.5)"
                        />
                        <path id="c6405"
                                d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 745.5 337.5)"
                        />
                        <path
                                d="M762 266.493 762.206 307.562 759.206 307.577 759 266.508ZM756 266.523C755.988 264.037 757.992 262.013 760.477 262 762.963 261.988 764.988 263.992 765 266.477 765.012 268.963 763.008 270.988 760.523 271 758.037 271.012 756.013 269.008 756 266.523Z"
                                fill="#006600"
                        />
                        <path
                                d="M0 0 0.205984 39.8038"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 760.5 402.304)"
                        />
                        <g clip-path="url(#clip22)">
                            <g clip-path="url(#clip24)" transform="translate(743 272)">
                                <use width="100%" height="100%" xlink:href="#img23"></use>
                            </g>
                        </g>
                        <rect id="c6404"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 751.5 297.5)"
                        />
                        <rect id="c6407"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#6600CC"
                                stroke-width="3"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 750.5 392.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(345.594 435)"
                        >
                            В
                            <tspan x="7.16666" y="0">-</tspan>
                            10
                            <tspan x="21.3333" y="0">-</tspan>
                            ТСН
                            <tspan x="48" y="0">-</tspan>
                            1
                        </text>
                        <g clip-path="url(#clip25)">
                            <g clip-path="url(#clip27)" transform="translate(327 210)">
                                <use width="100%" height="100%" xlink:href="#img26"></use>
                            </g>
                        </g>
                        <rect id="c6003"
                                x="0"
                                y="0"
                                width="18"
                                height="19"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 335.5 235.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(357.786 230)"
                        >
                            В
                            <tspan x="7.16666" y="0">-</tspan>
                            6
                            <tspan x="16" y="0">-</tspan>
                            Т
                            <tspan x="26.6667" y="0">-</tspan>
                            2
                        </text>
                        <g clip-path="url(#clip28)">
                            <g clip-path="url(#clip30)" transform="translate(887 212)">
                                <use width="100%" height="100%" xlink:href="#img29"></use>
                            </g>
                        </g>
                        <rect id="c6403"
                                x="0"
                                y="0"
                                width="19"
                                height="19"
                                stroke="#006600"
                                stroke-width="3"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="#FFFFFF"
                                transform="matrix(1 0 0 -1 895.5 237.5)"
                        />
                        <text
                                fill="#828897"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(915.498 229)"
                        >
                            В
                            <tspan x="7.16669" y="0">-</tspan>
                            6
                            <tspan x="16" y="0">-</tspan>
                            Т
                            <tspan x="26.6667" y="0">-</tspan>
                            1
                            <tspan x="13.0477" y="206">В</tspan>
                            <tspan x="20.2144" y="206">-</tspan>
                            10
                            <tspan x="34.381" y="206">-</tspan>
                            ТСН
                            <tspan x="61.0477" y="206">-</tspan>
                            2
                            <tspan x="-315.503" y="156">В</tspan>
                            <tspan x="-308.336" y="156">-</tspan>
                            10
                            <tspan x="-294.17" y="156">-</tspan>
                            МСВ
                        </text>
                        <path
                                d="M863.638 44.7382 947.237 44.7382 947.237 58.3293 863.638 58.3293Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M863.638 58.3293 947.237 58.3293 947.237 71.9205 863.638 71.9205Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M862.971 58.3293 947.904 58.3293"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M863.638 44.0715 863.638 72.5872"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M947.237 44.0715 947.237 72.5872"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M862.971 44.7382 947.904 44.7382"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M862.971 71.9205 947.904 71.9205"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip31)">
                            <text id="g641"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(866.304 55)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip32)">
                            <text id="g640"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(866.304 68)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip34)" transform="matrix(1 0 -0 1.02857 939 45)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img33"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip36)" transform="matrix(1.16667 0 -0 1 939 59)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(0.131868 0.131868)"
                            ></use>
                        </g>
                        <path
                                d="M308.458 43.5439 392.057 43.5439 392.057 57.1351 308.458 57.1351Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M308.458 57.1351 392.057 57.1351 392.057 70.7263 308.458 70.7263Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M307.791 57.1351 392.724 57.1351"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M308.458 42.8773 308.458 71.393"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M392.057 42.8773 392.057 71.393"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M307.791 43.5439 392.724 43.5439"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M307.791 70.7263 392.724 70.7263"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip37)">
                            <text id="g601"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(311.124 54)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip38)">
                            <text id="g600"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(311.124 67)"
                            >
                                Р
                            </text>
                        </g>
                        <g clip-path="url(#clip39)" transform="matrix(1 0 -0 1.02857 384 44)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img33"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip40)" transform="matrix(1 0 -0 1.02857 384 58)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="scale(0.128205 0.128205)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip42)" transform="matrix(1 0 -0 1.00168 1032 45)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img41"
                                    transform="scale(0.801282 0.801282)"
                            ></use>
                        </g>
                        <path
                                d="M0.20586-0.26217 5.68065 4.03672 5.26893 4.56106-0.20586 0.26217ZM5.47479 4.29889 5.02431 0.55466 9.6695 7.59265 1.73055 4.74937Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1054.17 41.5001)"
                        />
                        <path
                                d="M0.166679 5.33334 0.16676 41.3379-0.166574 41.3379-0.166655 5.33334ZM1.19973e-05 5.33333-2.66665 8.00001 0 0 2.66668 7.99999ZM9.29895e-05 41.3378 2.66675 38.6712 0.000104987 46.6712-2.66658 38.6712Z"
                                fill="#4472C4"
                                transform="matrix(1 0 0 -1 1153.5 95.1712)"
                        />
                        <path
                                d="M1150.55 108.031 1142.86 99.6543 1143.35 99.2035 1151.04 107.58ZM1143.11 99.4289 1142.95 103.197 1139.5 95.5001 1146.87 99.59Z"
                                fill="#4472C4"
                        />
                        <path
                                d="M1159.95 107.889 1150.5 107.5"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1058.03 27.4957 1152.39 27.4957 1152.39 40.2957 1058.03 40.2957Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1058.03 26.8291 1058.03 40.9624"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1152.39 26.8291 1152.39 40.9624"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1057.36 27.4957 1153.06 27.4957"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1057.36 40.2957 1153.06 40.2957"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip43)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1061.8 37)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water1"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1072.3 37)"
                        >
                            ВБ
                        </text>
                        <path
                                d="M1053.5 41.5001 1072.69 41.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1160.52 94.5794 1248.18 94.5794 1248.18 107.379 1160.52 107.379Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1160.52 93.9128 1160.52 108.046"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1248.18 93.9128 1248.18 108.046"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1159.85 94.5794 1248.84 94.5794"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1159.85 107.379 1248.84 107.379"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip44)">
                            <text
                                    font-family="Arial,Arial_MSFontService,sans-serif"
                                    font-weight="400"
                                    font-size="11"
                                    transform="translate(1164.3 105)"
                            >
                                ▼
                            </text>
                        </g>
                        <text id="water2"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="9"
                                transform="translate(1174.8 105)"
                        >
                            НБ
                        </text>
                        <path
                                d="M0 0 108.321 0.0551181"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                                transform="matrix(1 0 0 -1 1050.5 49.5552)"
                        />
                        <path
                                d="M0.262159-0.205874 4.45374 5.13166 3.92943 5.54341-0.262159 0.205874ZM4.19158 5.33754 4.64186 1.59328 7.48556 9.53207 0.447324 4.88726Z"
                                fill="#4472C4"
                                transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 1159.99 67.5001)"
                        />
                        <path
                                d="M1160.5 67.5001 1179.69 67.6472"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1164.71 54.3959 1237.91 54.3959 1237.91 67.1959 1164.71 67.1959Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1164.71 53.7292 1164.71 67.8626"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1237.91 53.7292 1237.91 67.8626"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1164.05 54.3959 1238.58 54.3959"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1164.05 67.1959 1238.58 67.1959"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip45)">
                            <text id="water3"
                                    font-family="Calibri,Calibri_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(1168.49 64)"
                            >
                                Н
                            </text>
                        </g>
                        <path
                                d="M1136.5 95.5001 1159.21 95.5002"
                                stroke="#4472C4"
                                stroke-width="0.666667"
                                stroke-miterlimit="8"
                                stroke-dasharray="2.66667 2"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.411 248.343 246 248.343 246 261.143 178.411 261.143Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.411 247.676 178.411 261.809"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246 247.676 246 261.809"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M177.744 248.343 246.667 248.343"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M177.744 261.143 246.667 261.143"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip46)">
                            <text id="g630"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(182.19 258)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M178.947 385.267 246.536 385.267 246.536 398.067 178.947 398.067Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.947 384.6 178.947 398.733"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M246.536 384.6 246.536 398.733"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.28 385.267 247.203 385.267"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M178.28 398.067 247.203 398.067"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip47)">
                            <text id="g163"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(182.727 395)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M949.087 251.18 1016.68 251.18 1016.68 263.98 949.087 263.98Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M949.087 250.514 949.087 264.647"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1016.68 250.514 1016.68 264.647"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M948.42 251.18 1017.34 251.18"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M948.42 263.98 1017.34 263.98"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip48)">
                            <text id="g590"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(952.866 261)"
                            >
                                U
                            </text>
                        </g>
                        <path
                                d="M949.043 385.267 1016.63 385.267 1016.63 398.067 949.043 398.067Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M949.043 384.6 949.043 398.733"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M1016.63 384.6 1016.63 398.733"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M948.377 385.267 1017.3 385.267"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M948.377 398.067 1017.3 398.067"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip49)">
                            <text id="g203"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(952.823 395)"
                            >
                                U
                            </text>
                        </g>
                        <path id="c9301"
                                d="M443.5 480C443.5 466.469 454.469 455.5 468 455.5 481.531 455.5 492.5 466.469 492.5 480 492.5 493.531 481.531 504.5 468 504.5 454.469 504.5 443.5 493.531 443.5 480Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate1 ?>">
                            <g clip-path="url(#clip50)">
                                <g clip-path="url(#clip51)">
                                    <g clip-path="url(#clip52)">
                                        <path
                                                d="M466.689 472.933 467.622 472.933 468.944 473.167 470.033 473.633 470.889 474.178 471.9 475.189 472.522 476.122 472.989 477.367 473.144 478.067 473.144 479.933 472.833 481.1 472.211 482.344 471.589 483.122 471.044 483.667 469.956 484.367 468.711 484.833 467.933 484.989 466.378 484.989 465.133 484.678 464.278 484.289 463.422 483.744 462.567 482.967 462.022 482.189 461.478 481.1 461.167 479.856 461.089 478.922 461.244 477.678 461.556 476.667 462.178 475.5 463.033 474.567 463.656 474.022 464.978 473.322 466.144 473.011Z"
                                        />
                                        <path
                                                d="M467.156 459.089 468.011 459.089 469.489 459.322 470.967 459.789 472.211 460.411 473.144 461.033 473.922 461.733 474.856 462.667 475.711 463.911 476.333 465.156 476.8 466.556 477.033 467.722 477.111 468.344 477.111 469.822 476.878 471.3 476.489 472.622 475.867 473.944 475.089 475.033 474.933 475.033 474.311 473.944 473.378 472.856 472.522 472.078 471.433 471.378 470.267 470.833 468.944 470.444 467.156 470.211Z"
                                        />
                                        <path
                                                d="M454.4 474.878 454.789 474.956 456.967 476.2 458.522 477.133 458.6 477.289 458.444 478.922 458.6 480.556 458.989 482.033 459.533 483.2 459.533 483.433 457.356 484.678 455.489 485.767 451.444 488.1 450.122 488.878 449.889 488.878 449.189 487.4 448.8 486.078 448.644 485.144 448.567 483.822 448.722 482.344 448.956 481.256 449.5 479.778 450.044 478.767 450.744 477.756 451.678 476.744 452.533 475.967 453.933 475.111Z"
                                        />
                                        <path
                                                d="M474.7 483.433 475.089 483.511 476.956 484.6 483.022 488.1 484.344 488.878 484.189 489.267 483.644 490.044 482.944 490.9 482.4 491.444 481.233 492.3 479.989 493 478.511 493.544 477.344 493.778 476.878 493.856 474.544 493.856 473.378 493.622 472.133 493.233 470.811 492.611 469.878 491.989 469.878 487.322 470.578 487.011 471.9 486.311 472.833 485.611 473.922 484.522Z"
                                        />
                                        <path
                                                d="M457.667 464.067 459.378 464.067 460.856 464.3 462.489 464.844 463.811 465.544 464.433 465.933 464.433 470.678 463.033 471.3 461.944 472 461.089 472.7 460.544 473.244 459.611 474.567 459.144 474.411 457.822 473.633 451.756 470.133 450.044 469.122 449.967 468.967 450.511 468.111 451.367 467.1 451.989 466.478 453.156 465.622 454.244 465 455.722 464.456 456.578 464.222Z"
                                        />
                                        <path
                                                d="M461.167 485.533 461.478 485.611 462.644 486.467 463.967 487.089 465.211 487.478 466.144 487.633 467.078 487.711 467.156 487.789 467.156 498.833 465.989 498.833 464.433 498.522 463.111 498.056 461.711 497.278 460.7 496.5 459.922 495.8 459.144 494.867 458.367 493.622 457.744 492.222 457.356 490.744 457.2 489.344 457.2 488.489 457.278 487.789 459.222 486.7 460.544 485.922Z"
                                        />
                                        <path
                                                d="M484.267 469.044 484.422 469.044 484.967 470.133 485.433 471.533 485.667 472.778 485.744 474.333 485.589 475.733 485.278 477.056 484.656 478.533 484.111 479.467 483.489 480.322 482.633 481.256 481.467 482.189 480.456 482.811 479.756 483.122 477.811 482.033 475.944 480.944 475.711 480.789 475.867 479.389 475.867 478.222 476.567 477.522 477.578 476.2 478.278 475.033 478.978 473.556 479.522 471.844 480.222 471.378 482.167 470.289 484.033 469.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path id="c1331"
                                d="M736.5 479C736.5 465.469 747.469 454.5 761 454.5 774.531 454.5 785.5 465.469 785.5 479 785.5 492.531 774.531 503.5 761 503.5 747.469 503.5 736.5 492.531 736.5 479Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FFFFFF"
                                fill-rule="evenodd"
                        />
                        <a href="<?= $urlAggregate2 ?>">
                            <g clip-path="url(#clip53)">
                                <g clip-path="url(#clip54)">
                                    <g clip-path="url(#clip55)">
                                        <path
                                                d="M759.689 472.933 760.622 472.933 761.944 473.167 763.033 473.633 763.889 474.178 764.9 475.189 765.522 476.122 765.989 477.367 766.144 478.067 766.144 479.933 765.833 481.1 765.211 482.344 764.589 483.122 764.044 483.667 762.956 484.367 761.711 484.833 760.933 484.989 759.378 484.989 758.133 484.678 757.278 484.289 756.422 483.744 755.567 482.967 755.022 482.189 754.478 481.1 754.167 479.856 754.089 478.922 754.244 477.678 754.556 476.667 755.178 475.5 756.033 474.567 756.656 474.022 757.978 473.322 759.144 473.011Z"
                                        />
                                        <path
                                                d="M760.156 459.089 761.011 459.089 762.489 459.322 763.967 459.789 765.211 460.411 766.144 461.033 766.922 461.733 767.856 462.667 768.711 463.911 769.333 465.156 769.8 466.556 770.033 467.722 770.111 468.344 770.111 469.822 769.878 471.3 769.489 472.622 768.867 473.944 768.089 475.033 767.933 475.033 767.311 473.944 766.378 472.856 765.522 472.078 764.433 471.378 763.267 470.833 761.944 470.444 760.156 470.211Z"
                                        />
                                        <path
                                                d="M747.4 474.878 747.789 474.956 749.967 476.2 751.522 477.133 751.6 477.289 751.444 478.922 751.6 480.556 751.989 482.033 752.533 483.2 752.533 483.433 750.356 484.678 748.489 485.767 744.444 488.1 743.122 488.878 742.889 488.878 742.189 487.4 741.8 486.078 741.644 485.144 741.567 483.822 741.722 482.344 741.956 481.256 742.5 479.778 743.044 478.767 743.744 477.756 744.678 476.744 745.533 475.967 746.933 475.111Z"
                                        />
                                        <path
                                                d="M767.7 483.433 768.089 483.511 769.956 484.6 776.022 488.1 777.344 488.878 777.189 489.267 776.644 490.044 775.944 490.9 775.4 491.444 774.233 492.3 772.989 493 771.511 493.544 770.344 493.778 769.878 493.856 767.544 493.856 766.378 493.622 765.133 493.233 763.811 492.611 762.878 491.989 762.878 487.322 763.578 487.011 764.9 486.311 765.833 485.611 766.922 484.522Z"
                                        />
                                        <path
                                                d="M750.667 464.067 752.378 464.067 753.856 464.3 755.489 464.844 756.811 465.544 757.433 465.933 757.433 470.678 756.033 471.3 754.944 472 754.089 472.7 753.544 473.244 752.611 474.567 752.144 474.411 750.822 473.633 744.756 470.133 743.044 469.122 742.967 468.967 743.511 468.111 744.367 467.1 744.989 466.478 746.156 465.622 747.244 465 748.722 464.456 749.578 464.222Z"
                                        />
                                        <path
                                                d="M754.167 485.533 754.478 485.611 755.644 486.467 756.967 487.089 758.211 487.478 759.144 487.633 760.078 487.711 760.156 487.789 760.156 498.833 758.989 498.833 757.433 498.522 756.111 498.056 754.711 497.278 753.7 496.5 752.922 495.8 752.144 494.867 751.367 493.622 750.744 492.222 750.356 490.744 750.2 489.344 750.2 488.489 750.278 487.789 752.222 486.7 753.544 485.922Z"
                                        />
                                        <path
                                                d="M777.267 469.044 777.422 469.044 777.967 470.133 778.433 471.533 778.667 472.778 778.744 474.333 778.589 475.733 778.278 477.056 777.656 478.533 777.111 479.467 776.489 480.322 775.633 481.256 774.467 482.189 773.456 482.811 772.756 483.122 770.811 482.033 768.944 480.944 768.711 480.789 768.867 479.389 768.867 478.222 769.567 477.522 770.578 476.2 771.278 475.033 771.978 473.556 772.522 471.844 773.222 471.378 775.167 470.289 777.033 469.2Z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </a>
                        <path
                                d="M62.5001 536C62.5001 530.753 66.7533 526.5 72.0001 526.5 77.2468 526.5 81.5001 530.753 81.5001 536 81.5001 541.247 77.2468 545.5 72.0001 545.5 66.7533 545.5 62.5001 541.247 62.5001 536Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#FF0000"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M62.5001 558C62.5001 552.753 66.7533 548.5 72.0001 548.5 77.2468 548.5 81.5001 552.753 81.5001 558 81.5001 563.247 77.2468 567.5 72.0001 567.5 66.7533 567.5 62.5001 563.247 62.5001 558Z"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-miterlimit="8"
                                fill="#92D050"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#8A94AD"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(87.1418 538)"
                        >
                            в работе
                            <tspan x="-0.0827332" y="22">в резерве</tspan>
                        </text>
                        <path
                                d="M62 514.5C62 509.253 66.2533 505 71.5 505 76.7467 505 81 509.253 81 514.5 81 519.747 76.7467 524 71.5 524 66.2533 524 62 519.747 62 514.5Z"
                                stroke="#000000"
                                stroke-width="2"
                                stroke-miterlimit="8"
                                fill="#FFFF00"
                                fill-rule="evenodd"
                        />
                        <text
                                fill="#8A94AD"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="700"
                                font-size="11"
                                transform="translate(87.0591 516)"
                        >
                            в ремонте
                            <tspan x="0.264885" y="-23">отдача</tspan>
                            <tspan x="0.000106812" y="-46">прием</tspan>
                        </text>
                        <g clip-path="url(#clip56)" transform="matrix(1 0 -0 1.07143 67 458)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img33"
                                    transform="scale(0.205128 0.205128)"
                            ></use>
                        </g>
                        <g clip-path="url(#clip57)">
                            <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img35"
                                    transform="matrix(0.230769 0 0 0.230769 67 480)"
                            ></use>
                        </g>
                        <path
                                d="M297.459 547.843 365.049 547.843 365.049 560.643 297.459 560.643Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M297.459 547.176 297.459 561.31"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M365.049 547.176 365.049 561.31"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M296.793 547.843 365.715 547.843"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M296.793 560.643 365.715 560.643"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip58)">
                            <text id="g173"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(301.239 558)"
                            >
                                P
                            </text>
                        </g>
                        <path
                                d="M878.023 547.843 945.612 547.843 945.612 560.643 878.023 560.643Z"
                                fill="#D9D9D9"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M878.023 547.176 878.023 561.31"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M945.612 547.176 945.612 561.31"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M877.356 547.843 946.279 547.843"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <path
                                d="M877.356 560.643 946.279 560.643"
                                stroke="#000000"
                                stroke-width="1.33333"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                fill="none"
                                fill-rule="evenodd"
                        />
                        <g clip-path="url(#clip59)">
                            <text id="g213"
                                    font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                    font-weight="700"
                                    font-size="9"
                                    transform="translate(881.802 558)"
                            >
                                P
                            </text>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="card" style="backdrop-filter: blur(5px);">
    <div class="card-body">
        <div class="row g-1 g-sm-3 lh-1">
            <canvas id="myLineChart" width="1500" height="200"></canvas>
        </div>
    </div>
</div>

<div class="card mt-2" style="backdrop-filter: blur(5px);">
    <div class="card-body">
        <div class="row g-1 g-sm-3 lh-1">
            <div id="chartdiv2" style="width: 100%; height: 300px;"></div>
        </div>
    </div>
</div>
<script>
    <?= $dashboard->LineDashboard($id) ?>

    <?= $dashboard->GesDashboard([$id], "chartdiv2")?>

    function formatNumber(number, decimals, decimalSeparator, thousandSeparator) {
        // Ensure number is converted to a float and rounded to specified decimals
        number = parseFloat(number).toFixed(decimals);

        // Split the number into integer and fractional parts
        let parts = number.split('.');

        // Add a thousand separators to the integer part
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);

        // Join integer and fractional parts with the decimal separator
        return parts.join(decimalSeparator);
    }

    function getServer() {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 5000);
        fetch('/oxangaron/server-ertosh', { signal: controller.signal })
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
                    if (item.id === 600) {
                        const value = document.getElementById("g600");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(600);
                            trueAnimation(6001);
                            trueAnimation(6002);
                            trueAnimation(6003);
                            trueAnimation(6004);
                            trueAnimation(6005);
                            trueAnimation(6006);
                            trueAnimation(6007);
                        } else {
                            falseAnimation(600);
                            falseAnimation(6001);
                            falseAnimation(6002);
                            falseAnimation(6003);
                            falseAnimation(6004);
                            falseAnimation(6005);
                            falseAnimation(6006);
                            falseAnimation(6007);
                        }
                    } else if(item.id === 601) {
                        const value = document.getElementById("g601");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(600);
                            trueAnimation(6001);
                            trueAnimation(6002);
                            trueAnimation(6003);
                            trueAnimation(6004);
                            trueAnimation(6005);
                            trueAnimation(6006);
                            trueAnimation(6007);
                        } else {
                            falseAnimation(600);
                            falseAnimation(6001);
                            falseAnimation(6002);
                            falseAnimation(6003);
                            falseAnimation(6004);
                            falseAnimation(6005);
                            falseAnimation(6006);
                            falseAnimation(6007);
                        }
                    } else if(item.id === 640) {
                        const value = document.getElementById("g640");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(640);
                            trueAnimation(6401);
                            trueAnimation(6402);
                            trueAnimation(6403);
                            trueAnimation(6404);
                            trueAnimation(6405);
                            trueAnimation(6406);
                            trueAnimation(6407);
                        } else {
                            falseAnimation(640);
                            falseAnimation(6401);
                            falseAnimation(6402);
                            falseAnimation(6403);
                            falseAnimation(6404);
                            falseAnimation(6405);
                            falseAnimation(6406);
                            falseAnimation(6407);
                        }
                    } else if(item.id === 641) {
                        const value = document.getElementById("g641");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        if (item.value !== 0) {
                            trueAnimation(640);
                            trueAnimation(6401);
                            trueAnimation(6402);
                            trueAnimation(6403);
                            trueAnimation(6404);
                            trueAnimation(6405);
                            trueAnimation(6406);
                            trueAnimation(6407);
                        } else {
                            falseAnimation(640);
                            falseAnimation(6401);
                            falseAnimation(6402);
                            falseAnimation(6403);
                            falseAnimation(6404);
                            falseAnimation(6405);
                            falseAnimation(6406);
                            falseAnimation(6407);
                        }
                    } else if(item.id === 173) {
                        const value = document.getElementById("g173");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(173);
                            trueAnimation(1731);
                            trueAnimation(1732);
                        } else {
                            falseAnimation(173);
                            falseAnimation(1731);
                            falseAnimation(1732);
                        }
                    } else if(item.id === 213) {
                        const value = document.getElementById("g213");
                        value.textContent = "P=" + formatNumber(item.value, 2, ',', ' ') + " кВт";
                        if (item.value !== 0) {
                            trueAnimation(213);
                            trueAnimation(2131);
                            trueAnimation(2132);
                        } else {
                            falseAnimation(213);
                            falseAnimation(2131);
                            falseAnimation(2132);
                        }
                    } else if(item.id === 630) {
                        const value = document.getElementById("g630");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 163) {
                        const value = document.getElementById("g163");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 590) {
                        const value = document.getElementById("g590");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    } else if(item.id === 203) {
                        const value = document.getElementById("g203");
                        value.textContent = formatNumber(item.value, 2, ',', ' ') + " кВ";
                    }
                    //Aggregate-1
                    else if(item.id === 93) {
                        const value = document.getElementById("g93");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a93");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 1.016 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(93);
                            trueAnimation(9301);
                        } else {
                            errorAnimation(93);
                            errorAnimation(9301);
                        }
                    } else if(item.id === 95) {
                        const value = document.getElementById("g95");
                        value.textContent = "Qвар= " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 96) {
                        const value = document.getElementById("k93");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 97) {
                        const value = document.getElementById("n93");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 98) {
                        const value = document.getElementById("w93");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }
                    //Aggregate-2
                    else if(item.id === 133) {
                        const value = document.getElementById("g133");
                        value.textContent = "P= " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                        const kpd = document.getElementById("a133");
                        kpd.textContent = "КИУМ= " + formatNumber(item.value / 1.016 * 100, 1, ',', ' ') + " %";
                        if (item.value !== 0) {
                            trueAnimation(133);
                            trueAnimation(1331);
                        } else {
                            falseAnimation(133);
                            falseAnimation(1331);
                        }
                    } else if(item.id === 135) {
                        const value = document.getElementById("g135");
                        value.textContent = "Qвар= " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 136) {
                        const value = document.getElementById("k133");
                        value.textContent = "КПД= " + formatNumber(item.value, 0, ',', ' ') + " %";
                    } else if(item.id === 137) {
                        const value = document.getElementById("n133");
                        value.textContent = "НА= " + formatNumber(item.value, 2, ',', ' ') + " %";
                    } else if(item.id === 138) {
                        const value = document.getElementById("w133");
                        value.textContent = "Qвода= " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    }

                    else if(item.id === 1) {
                        const value = document.getElementById("active");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    } else if(item.id === 2) {
                        const value = document.getElementById("reactive");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ') + " МВАр";
                    } else if(item.id === 3) {
                        const value = document.getElementById("activeOut");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " МВт";
                    } else if(item.id === 4) {
                        const value = document.getElementById("activeIn");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ') + " МВт";
                    } else if(item.id === 5) {
                        const value = document.getElementById("ownNeeds");
                        value.textContent = "∑ " + formatNumber(item.value, 3, ',', ' ').replace("-", "") + " KВт";
                    } else if(item.id === 6) {
                        const value = document.getElementById("water");
                        value.textContent = "∑ " + formatNumber(item.value, 2, ',', ' ') + " м3/с";
                    } else if(item.id === 7) {
                        const value = document.getElementById("hertz");
                        value.textContent = formatNumber(item.value, 2, ',', ' ').replace("-", "") + " Гц";
                    } else if(item.id === 8) {
                        const value = document.getElementById("water1");
                        value.textContent = "ВБ=" + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " м";
                    } else if(item.id === 9) {
                        const value = document.getElementById("water2");
                        value.textContent = "НБ=" + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " м";
                    } else if(item.id === 10) {
                        const value = document.getElementById("water3");
                        value.textContent = "Н=" + formatNumber(item.value, 1, ',', ' ').replace("-", "") + " м";
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

    function falseAnimation(id) {
        let circle = document.getElementById("c" + id);
        let colors = ['#92D050', 'white'];
        let index = 0;
        setInterval(() => {
            circle.setAttribute('fill', colors[index]);
            index = (index + 1) % colors.length; // циклично меняем цвет
        }, 1500); // изменение цвета каждые 1000 мс (1 секунда)
    }

    function trueAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "red";
    }

    function errorAnimation(id) {
        let circle = document.getElementById("c" + id);
        circle.style.fill = "#FFFF00";
    }

</script>