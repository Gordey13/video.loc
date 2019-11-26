<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

  <meta name="description"
    content="Смотрите видео на портале video.loc совершенно бесплатно и без регистрации. Наша видеотека каждый день обновляется лучшими роликами со всего мира!">
  <meta property="og:site_name" content="video.loc">
  <meta property="og:url" content="https://video.loc">
  <meta property="og:title" content="<?= Html::encode($this->title) ?>">
  <meta property="og:image" content="https://video.loc/images/logo_full.png">
  <meta property="og:description"
    content="Смотрите видео на портале video.loc совершенно бесплатно и без регистрации. Наша видеотека каждый день обновляется лучшими роликами со всего мира!">
  <link rel="canonical" href="http://video.loc/">
  <meta name="robots" content="index,follow">

  <!--Файлы для Favicon-->
  <link rel="shortcut icon" href="http://video.loc/favicon.ico" type="image/x-icon">

</head>
<body class="  pace-done">
<?php $this->beginBody() ?>

  <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
  </div>
  <div class="container-fluid">
    <div class="row clearfix main-panel-margin" style="margin-left:-6px; margin-right:0px;">
      <div class="col-md-12 column">
        <nav id="navtop" class="navbar navbar-dark navbar-fixed-top" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">
                Переключить навигацию </span>
              <i class="fa fa-search" style="font-size:21px" aria-hidden="true"></i>
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-bars" style="font-size:21px" aria-hidden="true"></i>
            </button>
            <a class="navbar-brand" style="font-size:26px;margin-left: 30px;;color:black;" href="http://video.loc/">
              <img class="img-responsive" style="max-width: 250px;margin-left: -27px;margin-top: -5px;"
                src="/image/logo.svg">
            </a>
          </div>
          <div class="collapse navbar-collapse back-color" "="" style=" margin-top: 15px;" id="menu">
            <form id="search" action="http://video.loc/find.php" method="post">
              <div class="input-group col-lg-4 col-lg-offset-2">
                <input name="search" class="form-control ui-autocomplete-input" autofocus="autofocus" autocomplete="off"
                  id="query" placeholder="Искать видео..." required="" type="text">
                <span class="input-group-btn">
                  <button class="btn" style="background: #f90; color: #000; font-weight: bold; margin-top: 2px;"
                    type="submit">
                    Поиск </button>
                </span>
              </div>
            </form>

          </div>
        </nav>
      </div>
      <center>

        <!-- Новое меню -->

          <?= \app\components\CategoryWidget::widget()?>

        <!-- /Новое меню -->

      </center>

      <!-- Only required for left/right tabs -->

<?= $content;?>

    <div class="col-lg-12 col-md-12">
      <div class="panel pop-panel back-color">
        <div class="labe-heading-danger col-md-12 col-sm-12 col-xs-12">
          <span class="labedanger  col-md-12 col-sm-12 col-xs-12">Сейчас смотрят</span>
        </div>
        <div class="panel-body">
          <div class="row">

            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">

              <div class="col-md-12 hovereffect" style="padding: 0;">

                <img class="img-rounded img-responsive" border="0" style="font-size: 5px;" width="100%"
                  src="/image/pokadrovaya-animatsiya-v-macromedia-flash-mx-primer-3.jpg"
                  alt="Покадровая анимация в Macromedia Flash MX Пример 3"
                  title="Покадровая анимация в Macromedia Flash MX Пример 3">
                <span class="vidtime">00:04:10</span>
                <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> Информатика в
                  школе</span>
                <a href="http://video.loc/video/n6Yf8gxNIvY/pokadrovaya-animatsiya-v-macromedia-flash-mx-primer-3/">
                  <div class="over">
                    <i class="fas fa-play fa-4x play" aria-hidden="true"></i>


                    <p class="sm">СМОТРЕТЬ</p>
                  </div>
                </a>
              </div>
              <span class="uploadbot">9 месяцев назад</span>
              <span class="uploadbot" style="float:right">662 просмотров</span>
              <h4 style="margin-top:0px;"><a class="h4title"
                  href="http://video.loc/video/n6Yf8gxNIvY/pokadrovaya-animatsiya-v-macromedia-flash-mx-primer-3/"
                  target="_self">Покадровая анимация в Macromedia Flash MX Пример 3</a> </h4>

            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">

              <div class="col-md-12 hovereffect" style="padding: 0;">

                <img class="img-rounded img-responsive" border="0" style="font-size: 5px;" width="100%"
                  src="/image/सत-वर-क-ख-त-एक-एकड-म-ल-गत-और-म-न-फ-क-प-र-ज-नक-र-satavar-cultivation-in-india.jpg"
                  alt="सतावर की खेती: एक एकड़ में लागत और मुनाफे की पूरी जानकारी || Satavar Cultivation In India"
                  title="सतावर की खेती: एक एकड़ में लागत और मुनाफे की पूरी जानकारी || Satavar Cultivation In India">
                <span class="vidtime">00:13:54</span>
                <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> Ravizone Farming
                  Leader</span>
                <a
                  href="http://video.loc/video/MF-ZBbtGIPE/%E0%A4%B8%E0%A4%A4-%E0%A4%B5%E0%A4%B0-%E0%A4%95-%E0%A4%96-%E0%A4%A4-%E0%A4%8F%E0%A4%95-%E0%A4%8F%E0%A4%95%E0%A4%A1-%E0%A4%AE-%E0%A4%B2-%E0%A4%97%E0%A4%A4-%E0%A4%94%E0%A4%B0-%E0%A4%AE-%E0%A4%A8-%E0%A4%AB-%E0%A4%95-%E0%A4%AA-%E0%A4%B0-%E0%A4%9C-%E0%A4%A8%E0%A4%95-%E0%A4%B0-satavar-cultivation-in-india/">
                  <div class="over">
                    <i class="fas fa-play fa-4x play" aria-hidden="true"></i>


                    <p class="sm">СМОТРЕТЬ</p>
                  </div>
                </a>
              </div>
              <span class="uploadbot">1 месяц назад</span>
              <span class="uploadbot" style="float:right">108 847 просмотров</span>
              <h4 style="margin-top:0px;"><a class="h4title"
                  href="http://video.loc/video/MF-ZBbtGIPE/%E0%A4%B8%E0%A4%A4-%E0%A4%B5%E0%A4%B0-%E0%A4%95-%E0%A4%96-%E0%A4%A4-%E0%A4%8F%E0%A4%95-%E0%A4%8F%E0%A4%95%E0%A4%A1-%E0%A4%AE-%E0%A4%B2-%E0%A4%97%E0%A4%A4-%E0%A4%94%E0%A4%B0-%E0%A4%AE-%E0%A4%A8-%E0%A4%AB-%E0%A4%95-%E0%A4%AA-%E0%A4%B0-%E0%A4%9C-%E0%A4%A8%E0%A4%95-%E0%A4%B0-satavar-cultivation-in-india/"
                  target="_self">सतावर की खेती: एक एकड़ में लागत और मुनाफे की पूरी जानकारी || Satavar Cultivation In
                  India</a> </h4>

            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">

              <div class="col-md-12 hovereffect" style="padding: 0;">

                <img class="img-rounded img-responsive" border="0" style="font-size: 5px;" width="100%"
                  src="/image/08-adityana-2019-padmshree-bhikhudan-gadhavi-new-jokes-comedy-banabhai-dudhvara.jpg"
                  alt="08~ADITYANA-2019 || Padmshree Bhikhudan Gadhavi || New Jokes - comedy ||Banabhai Dudhvara"
                  title="08~ADITYANA-2019 || Padmshree Bhikhudan Gadhavi || New Jokes - comedy ||Banabhai Dudhvara">
                <span class="vidtime">00:12:53</span>
                <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> Shivkrupa Studio
                  Porbandar Official</span>
                <a
                  href="http://video.loc/video/yE6djKZVcdI/08-adityana-2019-padmshree-bhikhudan-gadhavi-new-jokes-comedy-banabhai-dudhvara/">
                  <div class="over">
                    <i class="fas fa-play fa-4x play" aria-hidden="true"></i>


                    <p class="sm">СМОТРЕТЬ</p>
                  </div>
                </a>
              </div>
              <span class="uploadbot">6 дней назад</span>
              <span class="uploadbot" style="float:right">1 858 просмотров</span>
              <h4 style="margin-top:0px;"><a class="h4title"
                  href="http://video.loc/video/yE6djKZVcdI/08-adityana-2019-padmshree-bhikhudan-gadhavi-new-jokes-comedy-banabhai-dudhvara/"
                  target="_self">08~ADITYANA-2019 || Padmshree Bhikhudan Gadhavi || New Jokes - comedy ||Banabhai
                  Dudhvara</a> </h4>

            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">

              <div class="col-md-12 hovereffect" style="padding: 0;">

                <img class="img-rounded img-responsive" border="0" style="font-size: 5px;" width="100%"
                  src="/image/mertv-na-99-2-seriya.jpg" alt="Мертв на 99% | 2 Серия" title="Мертв на 99% | 2 Серия">
                <span class="vidtime">00:49:14</span>
                <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> Central
                  Partnership</span>
                <a href="http://video.loc/video/UBYH1Qyqg7k/mertv-na-99-2-seriya/">
                  <div class="over">
                    <i class="fas fa-play fa-4x play" aria-hidden="true"></i>


                    <p class="sm">СМОТРЕТЬ</p>
                  </div>
                </a>
              </div>
              <span class="uploadbot">11 месяцев назад</span>
              <span class="uploadbot" style="float:right">248 121 просмотров</span>
              <h4 style="margin-top:0px;"><a class="h4title"
                  href="http://video.loc/video/UBYH1Qyqg7k/mertv-na-99-2-seriya/" target="_self">Мертв на 99% | 2
                  Серия</a> </h4>

            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">

              <div class="col-md-12 hovereffect" style="padding: 0;">

                <img class="img-rounded img-responsive" border="0" style="font-size: 5px;" width="100%"
                  src="/image/crush-trample-doll-under-pointy-stiletto-boots.jpg"
                  alt="crush trample doll under pointy stiletto boots"
                  title="crush trample doll under pointy stiletto boots">
                <span class="vidtime">00:07:40</span>
                <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> HildaBoots</span>
                <a href="http://video.loc/video/UldVU8ERkBQ/crush-trample-doll-under-pointy-stiletto-boots/">
                  <div class="over">
                    <i class="fas fa-play fa-4x play" aria-hidden="true"></i>


                    <p class="sm">СМОТРЕТЬ</p>
                  </div>
                </a>
              </div>
              <span class="uploadbot">6 месяцев назад</span>
              <span class="uploadbot" style="float:right">14 790 просмотров</span>
              <h4 style="margin-top:0px;"><a class="h4title"
                  href="http://video.loc/video/UldVU8ERkBQ/crush-trample-doll-under-pointy-stiletto-boots/"
                  target="_self">crush trample doll under pointy stiletto boots</a> </h4>

            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">

              <div class="col-md-12 hovereffect" style="padding: 0;">

                <img class="img-rounded img-responsive" border="0" style="font-size: 5px;" width="100%"
                  src="/image/piar-0.jpg" alt="Пиар))))0))" title="Пиар))))0))">
                <span class="vidtime">00:00:07</span>
                <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> Marina Kot</span>
                <a href="http://video.loc/video/APGxBGKnw-Y/piar-0/">
                  <div class="over">
                    <i class="fas fa-play fa-4x play" aria-hidden="true"></i>


                    <p class="sm">СМОТРЕТЬ</p>
                  </div>
                </a>
              </div>
              <span class="uploadbot">3 месяца назад</span>
              <span class="uploadbot" style="float:right">65 просмотров</span>
              <h4 style="margin-top:0px;"><a class="h4title" href="http://video.loc/video/APGxBGKnw-Y/piar-0/"
                  target="_self">Пиар))))0))</a> </h4>

            </div>

          </div>
          <div class="col-md-12" style="padding: 0;text-align: -webkit-left;">
            <a href="http://video.loc/today-scan/">
              <button class="btn btn-danger btn-sm">
                Смотреть все видео
              </button>
            </a>
          </div>

        </div>
      </div>
    </div>



    <div class="col-lg-12 col-md-12">
      <div class="panel pop-panel back-color">
        <div class="labe-heading-danger">
          <span class="labedanger col-md-12 col-sm-12 col-xs-12">Сейчас ищут</span>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 list-group">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/19-%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F-%D0%BF%D1%80%D0%B0%D0%B7%D0%B4%D0%BD%D0%B8%D0%BA-images-ui-bg-highlight-soft-100-eeeeee-1x100-png/"
                  title="19 Ноября Праздник Images Ui Bg Highlight Soft 100 Eeeeee 1X100 Png" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>19 Ноября Праздник Images Ui Bg Highlight Soft 100 Eeeeee 1X100 Png </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/13-reasons-why-jerking-off/" title="13 Reasons Why Jerking Off"
                  class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>13 Reasons Why Jerking Off </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/bokep-ibu-images-ui-bg-highlight-soft-100-eeeeee-1x100-png/"
                  title="Bokep Ibu Images Ui Bg Highlight Soft 100 Eeeeee 1X100 Png" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Bokep Ibu Images Ui Bg Highlight Soft 100 Eeeeee 1X100 Png </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D8%B3%D9%83%D8%B3-%D9%85%D8%AD%D8%A7%D8%B1%D9%85-%D9%85%D8%AA%D8%B1%D8%AC%D9%85/"
                  title="سكس محارم مترجم" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>سكس محارم مترجم </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/jacking-off-scene/" title="Jacking Off Scene" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Jacking Off Scene </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/jacking-off-prank/" title="Jacking Off Prank" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Jacking Off Prank </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%BD%D0%B0-%D0%BD%D0%B0-%D0%B8%D0%B3%D1%80%D0%B0/" title="На На Игра"
                  class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>На На Игра </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/jerking-off-scene/" title="Jerking Off Scene" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Jerking Off Scene </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/jerking-off-prank/" title="Jerking Off Prank" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Jerking Off Prank </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/sex-pranks/" title="Sex Pranks" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Sex Pranks </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/queer-as-folk-sex-scene/" title="Queer As Folk Sex Scene"
                  class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Queer As Folk Sex Scene </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/queer-as-folk/" title="Queer As Folk" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Queer As Folk </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/adam-driver-sex/" title="Adam Driver Sex" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Adam Driver Sex </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D1%80%D1%83%D1%81%D0%BA%D0%B8%D0%B9-%D0%B4%D0%B5%D1%82%D0%B5%D0%BA%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9-%D1%84%D0%B8%D0%BB%D1%8C%D0%BC-%D0%B3%D1%80%D1%83%D0%B7%D1%87%D0%B8%D0%BA-%D0%BF%D1%80%D0%BE%D0%B4%D0%BE%D0%BB%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5/"
                  title="Руский Детективный Фильм Грузчик Продолжение" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Руский Детективный Фильм Грузчик Продолжение </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/naff-kenanglah-aku/" title="Naff Kenanglah Aku" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Naff Kenanglah Aku </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%BD%D0%B0-%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%BC-%D0%B4%D0%BD%D0%B5-%D1%81%D0%B5%D1%80%D0%B8%D1%8F-1/"
                  title="На Золотом Дне Серия 1" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>На Золотом Дне Серия 1 </p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-12" style="padding: 0;text-align: -webkit-left;margin-top:25px">
            <a href="http://video.loc/last-result/">
              <button class="btn btn-danger btn-sm">
                Смотреть все запросы
              </button>
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-12 col-md-12">
      <div class="panel pop-panel back-color">
        <div class="labe-heading-danger">
          <span class="labedanger col-md-12 col-sm-12 col-xs-12">Популярные запросы</span>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 list-group">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%B7%D0%B8%D0%BD%D0%B0%D0%B8%D0%B4%D0%B0-%D0%B3%D0%B8%D0%BF%D0%BF%D0%B8%D1%83%D1%81/"
                  title="Зинаида Гиппиус" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Зинаида Гиппиус </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%B1%D0%B5%D0%BB%D1%8C%D0%B3%D0%B8%D1%8F-%D0%BA%D0%B8%D0%BF%D1%80/"
                  title="Бельгия Кипр" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Бельгия Кипр </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%BC%D1%83%D0%B7%D0%B5%D0%B9-%D0%BF%D1%80%D0%B0%D0%B4%D0%BE/"
                  title="Музей Прадо" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Музей Прадо </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%BF%D0%B5%D1%80%D0%B2%D1%8B%D0%B9-%D0%BA%D0%B0%D0%BD%D0%B0%D0%BB/"
                  title="Первый канал" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Первый канал </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%BA%D0%B0%D0%BA%D0%BE%D0%B9-%D1%81%D0%B5%D0%B3%D0%BE%D0%B4%D0%BD%D1%8F-%D0%BF%D1%80%D0%B0%D0%B7%D0%B4%D0%BD%D0%B8%D0%BA/"
                  title="Какой сегодня праздник" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Какой сегодня праздник </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/19-%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F-%D0%BF%D1%80%D0%B0%D0%B7%D0%B4%D0%BD%D0%B8%D0%BA/"
                  title="19 ноября праздник" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>19 ноября праздник </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%BC%D0%B5%D0%B6%D0%B4%D1%83%D0%BD%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9-%D0%BC%D1%83%D0%B6%D1%81%D0%BA%D0%BE%D0%B9-%D0%B4%D0%B5%D0%BD%D1%8C/"
                  title="Международный мужской день" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Международный мужской день </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/19-%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F/" title="19 ноября"
                  class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>19 ноября </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%B4%D0%B5%D0%BD%D1%8C-%D1%80%D0%B0%D0%BA%D0%B5%D1%82%D0%BD%D1%8B%D1%85-%D0%B2%D0%BE%D0%B9%D1%81%D0%BA/"
                  title="День ракетных войск" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>День ракетных войск </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%B0%D0%B2%D0%B0%D0%BD%D0%B3%D0%B0%D1%80%D0%B4-%D1%81%D0%B0%D0%BB%D0%B0%D0%B2%D0%B0%D1%82-%D1%8E%D0%BB%D0%B0%D0%B5%D0%B2/"
                  title="Авангард Салават Юлаев" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Авангард Салават Юлаев </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%BF%D1%80%D0%B0%D0%B7%D0%B4%D0%BD%D0%B8%D0%BA%D0%B8-%D1%81%D0%B5%D0%B3%D0%BE%D0%B4%D0%BD%D1%8F/"
                  title="Праздники Сегодня" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Праздники Сегодня </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D1%81%D0%B0%D0%BD-%D0%BC%D0%B0%D1%80%D0%B8%D0%BD%D0%BE-%D1%80%D0%BE%D1%81%D1%81%D0%B8%D1%8F/"
                  title="Сан марино россия" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Сан марино россия </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%BD%D0%B8%D1%87%D1%82%D0%BE-%D0%BD%D0%B5-%D1%81%D0%BB%D1%83%D1%87%D0%B0%D0%B5%D1%82%D1%81%D1%8F-%D0%B4%D0%B2%D0%B0%D0%B6%D0%B4%D1%8B/"
                  title="Ничто не случается дважды" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Ничто не случается дважды </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%BC%D0%B0%D1%80%D0%B8%D1%8F-%D0%BB%D0%B8%D0%BC%D0%B0%D0%BD/"
                  title="Мария Лиман" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Мария Лиман </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D1%80%D0%B8%D0%BA-%D0%B8-%D0%BC%D0%BE%D1%80%D1%82%D0%B8-4-%D1%81%D0%B5%D0%B7%D0%BE%D0%BD-2-%D1%81%D0%B5%D1%80%D0%B8%D1%8F/"
                  title="Рик и Морти 4 сезон 2 серия" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Рик и Морти 4 сезон 2 серия </p>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://video.loc/scan/%D0%B0%D1%80%D0%B3%D0%B5%D0%BD%D1%82%D0%B8%D0%BD%D0%B0-%D1%83%D1%80%D1%83%D0%B3%D0%B2%D0%B0%D0%B9/"
                  title="Аргентина уругвай" class="list-group-item">
                  <p class="list-group-item-text" style="white-space:nowrap;overflow:hidden;text-overflow: ellipsis;">
                    <i class="fa fa-search" style="margin-right:2%; color:#d9230f">
                    </i>Аргентина уругвай </p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-12" style="padding: 0;text-align: -webkit-left;margin-top:25px">
            <a href="http://video.loc/top-search/">
              <button class="btn btn-danger btn-sm">
                Смотреть все запросы
              </button>
            </a>
          </div>

        </div>
      </div>
    </div>


    <div class="col-md-12 column">
      <div class="row clearfix">
        <div class="alert alert-default" style="color:black;box-shadow:0 6px 6px -6px #777;margin-bottom:0px">
          <center>
            Copyright ©
            <a class="text-muted" href="http://video.loc/" style="color: #353535" title="">
              Epicube.su </a>
            <p>Смотрите видео на портале epicube.su совершенно бесплатно и без регистрации. Наша видеотека каждый день
              обновляется лучшими роликами со всего мира!</p>
            <a href="http://video.loc/"> <img class="img-responsive" style="max-width: 400px;" src="/image/logo.svg"
                alt=""></a>
            <p> <a style="color: #0d87e9" href="mailto:admin@video.loc">admin@epicube.su</a> Наша почта для ваших
              пожеланий и связи с нами.
              <br>
            </p>
          </center>
        </div>
      </div>
    </div>
  </div>
  </div>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>