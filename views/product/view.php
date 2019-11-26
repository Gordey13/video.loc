<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="row main-panel-margin" style="margin-left: -1px; margin-right: -5px; margin-top:55px;" >
    <div class="col-lg-8 col-xs-12 col-sm-12" style="margin-bottom:25px">

        <div class="row youtube-frame">
            <div class="col-lg-12">
                <div class="only-radius embed-responsive embed-responsive-16by9">
                    <!-- PLYR плеер -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $product->yt_id?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- /Player -->
                </div>
            </div>

        </div>

        <!-- Breadcrumb -->
        <ol style="background-color: #1d1d1d; margin-left: 0px; margin-bottom: 4px;" class="breadcrumb pop-panel" itemscope="" itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs">
            <li class="breadcrumb-item" itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                <a class="h4title" itemprop="item" title="Главная" href="http://video.loc/">
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="1">
                </a>
            </li>
            <li class="breadcrumb-item" itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                <span class="h4title" itemprop="item" title="<?= $product->submitted ?>">
                    <span itemprop="name"><?= $product->submitted ?></span>
                    <meta itemprop="position" content="2">
                </span>
            </li>
            <li class="breadcrumb-item shor" itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
       <span class="h4title" itemprop="item" title="<?= $product->video_title ?>">
          <span itemprop="name"><?= $product->video_title ?></span>
          <meta itemprop="position" content="3">
       </span>
            </li>
        </ol>
        <!-- /Breadcrumb -->

        <div class="row" style="padding: 15px; padding-top: 0px; margin: auto;">

            <div class="row pop-panel back-color">
                <div class="col-sm-12 ">

                    <h1 class="h3tit"><?= $product->video_title ?></h1>

                </div>


                <div class="col-sm-8 ">
                    <h5 class="views">Просмотров: <?= $product->site_views ?></h5>
                </div>

                <div class="container col-sm-4" style="padding-left: 0px;">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-9" style="padding-left:10px;">
                        <p><i class="fa fa-check-circle"></i> <?= $product->submitted ?></a></p>
                        <p style="color:#fff"><i class="fa fa-calendar" aria-hidden="true"></i> 18 ноября 2019</p>
                    </div>




                </div>


                <div class="col-sm-12 ">
                    <!-- share buttons -->
                    <div class="sharethis-inline-share-buttons" style="margin-bottom: 10px;"></div>
                    <!-- /share buttons -->

                </div>


            </div>




            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">



                <!--   <button class="btn btn-md rd" id="sub"><p id="subscribe">Подписаться <i class="fa fa-bell" aria-hidden="true"></i></p></button> -->

            </div>




            <div class="row wh b-radius1">
                <div class="col-sm-12" style="border-radius: 4px;padding:5px;margin-bottom:15px">


                    <!-- ВК коментарии -->
                    <div class="pop-panel" id="vk_comments"></div>
                    <script type="text/javascript">
                        VK.Widgets.Comments("vk_comments", {limit: 15, attach: "graffiti,photo"});
                    </script>
                    <!-- /ВК коментарии -->


                    <div class="row" style="margin:0px;padding: 15px;">


                        <div class="media">
                            <div class="media-left">
                                <img src="https://yt3.ggpht.com/a/AGF-l7-d_WV0T5BllzaxNxZiHr2cd-_IjBfnHZu98g=s48-c-k-c0xffffffff-no-rj-mo" class="media-object" alt="Time Dust" style="border-radius: 100px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 16px;">Time Dust</h4>
                                <span style="font-size: 13px;">4 часа  назад</span>
                                <p>Хочю плойку</p>
                            </div>
                        </div>
                        <hr>





                        <div class="media">
                            <div class="media-left">
                                <img src="https://yt3.ggpht.com/a/AGF-l7-43mKx-vSUYfXuIFkHPrZFjucaiROP0SbFEw=s48-c-k-c0xffffffff-no-rj-mo" class="media-object" alt="Саша Нещерет" style="border-radius: 100px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 16px;">Саша Нещерет</h4>
                                <span style="font-size: 13px;">6 часов  назад</span>
                                <p>На превюшке тот самый МАКС из WDF 168</p>
                            </div>
                        </div>
                        <hr>





                        <div class="media">
                            <div class="media-left">
                                <img src="https://yt3.ggpht.com/a/AGF-l78VrbKdozao7Cj0zjrRguKrVPbFXpWA3lpI=s48-c-k-c0xffffffff-no-rj-mo" class="media-object" alt="Spectral" style="border-radius: 100px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 16px;">Spectral</h4>
                                <span style="font-size: 13px;">8 часов  назад</span>
                                <p>Лучший</p>
                            </div>
                        </div>
                        <hr>





                        <div class="media">
                            <div class="media-left">
                                <img src="https://yt3.ggpht.com/a/AGF-l78Sy7LJTKkM_-_rNAqLgN3MZaeQCzwdsqgUBw=s48-c-k-c0xffffffff-no-rj-mo" class="media-object" alt="Роман Речембей" style="border-radius: 100px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 16px;">Роман Речембей</h4>
                                <span style="font-size: 13px;">11 часов  назад</span>
                                <p>Ты не знаешь что ещё творится в танках...</p>
                            </div>
                        </div>
                        <hr>





                        <div class="media">
                            <div class="media-left">
                                <img src="https://yt3.ggpht.com/a/AGF-l78nJFKKSJ0gmZ_PSDHRlBrayHgD_rbDYZeUpw=s48-c-k-c0xffffffff-no-rj-mo" class="media-object" alt="Саша Сычёв" style="border-radius: 100px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 16px;">Саша Сычёв</h4>
                                <span style="font-size: 13px;">11 часов  назад</span>
                                <p>ради варпача :)</p>
                            </div>
                        </div>
                        <hr>





                        <div class="media">
                            <div class="media-left">
                                <img src="https://yt3.ggpht.com/a/AGF-l7_R4onxjkT0dfEq-2fJQVcnsNJfTrd6KtZufQ=s48-c-k-c0xffffffff-no-rj-mo" class="media-object" alt="ŞŤŔÅÑĞĘŘ PĒŘŚØÑ" style="border-radius: 100px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 16px;">ŞŤŔÅÑĞĘŘ PĒŘŚØÑ</h4>
                                <span style="font-size: 13px;">12 часов  назад</span>
                                <p>Странные дела one love 💜💜</p>
                            </div>
                        </div>
                        <hr>





                        <div class="media">
                            <div class="media-left">
                                <img src="https://yt3.ggpht.com/a/AGF-l7_uW1ZtMpuNsRte3Q8-QZHw1Q8pfzqPSCynEQ=s48-c-k-c0xffffffff-no-rj-mo" class="media-object" alt="nicvampire kusmerchuk" style="border-radius: 100px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 16px;">nicvampire kusmerchuk</h4>
                                <span style="font-size: 13px;">12 часов  назад</span>
                                <p>Ідіть у сраку. Лайк за цитату Зе еще в 2018.</p>
                            </div>
                        </div>
                        <hr>





                        <div class="media">
                            <div class="media-left">
                                <img src="https://yt3.ggpht.com/a/AGF-l7-45U8YXbYAaYtoCIqOEz0fQhJO68mA0DFS0g=s48-c-k-c0xffffffff-no-rj-mo" class="media-object" alt="Dan game" style="border-radius: 100px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 16px;">Dan game</h4>
                                <span style="font-size: 13px;">13 часов  назад</span>
                                <p>Мараль всей басни такова : Кто шелестит,  тому пи**а</p>
                            </div>
                        </div>
                        <hr>





                        <div class="media">
                            <div class="media-left">
                                <img src="https://yt3.ggpht.com/a/AGF-l79_HuJEHewVpHLsWY1PxlqUQUdwFJDas-MbFg=s48-c-k-c0xffffffff-no-rj-mo" class="media-object" alt="Николай Аверкиев" style="border-radius: 100px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-size: 16px;">Николай Аверкиев</h4>
                                <span style="font-size: 13px;">13 часов  назад</span>
                                <p>зачем коментить видосы это портит как по мне</p>
                            </div>
                        </div>
                        <hr>



                    </div>
                </div>
            </div>
            <div class="row wh" style="margin-top: 15px; border-radius: 25px; color:#f1f1f1">
                <div class="col-lg-12 col-md-12" style="padding: 0px;" >
                    <div class="panel back-color" style="border-radius: 8px; color:#f1f1f1;margin-bottom:0px">
                        <div class="labe-heading-danger">
                            <span class="labedanger col-md-12 col-sm-12 col-xs-12">Сейчас смотрят</span>
                        </div>
                        <div class="panel-body">
                            <div class="row">






                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                    <div class="col-md-12 hovereffect" style="padding: 0;">

                                        <img class="img-rounded img-responsive" border="0" style="font-size: 5px;"  width="100%" src="https://epicube.su/draw/rciUiUjZc-w/5x-inspector-crate-opening-police-bike-blueprints-last-day-on-earth-survival-update-1-10-3.jpg" alt="5x INSPECTOR CRATE OPENING (POLICE BIKE BLUEPRINTS) - Last Day on Earth Survival Update 1.10.3" title="5x INSPECTOR CRATE OPENING (POLICE BIKE BLUEPRINTS) - Last Day on Earth Survival Update 1.10.3">
                                        <span class="vidtime">00:27:42</span>
                                        <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> Starsnipe - Daily Videos</span>
                                        <a href ="https://epicube.su/video/rciUiUjZc-w/5x-inspector-crate-opening-police-bike-blueprints-last-day-on-earth-survival-update-1-10-3/">
                                            <div class="over">
                                                <i class="fa fa-play-circle-o fa-5x play" aria-hidden="true"></i>


                                                <p class="sm">СМОТРЕТЬ</p>
                                            </div></a>
                                    </div>
                                    <span class="uploadbot">11 месяцев  назад</span>
                                    <span class="uploadbot" style="float:right">63 606 просмотров</span>
                                    <h4 style="margin-top:0px;"><a class="h4title" href="https://epicube.su/video/rciUiUjZc-w/5x-inspector-crate-opening-police-bike-blueprints-last-day-on-earth-survival-update-1-10-3/" target="_self">5x INSPECTOR CRATE OPENING (POLICE BIKE BLUEPRINTS) - Last Day on Earth Survival Update 1.10.3</a> </h4>

                                </div>








                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                    <div class="col-md-12 hovereffect" style="padding: 0;">

                                        <img class="img-rounded img-responsive" border="0" style="font-size: 5px;"  width="100%" src="https://epicube.su/draw/_9TVYZGa5Qo/1-anh-nghiện-ngập-ma-túy-suốt-7-năm-lên-làm-chứng-được-chúa-thương-xót-hoán-cải-tâm-hồn-anh.jpg" alt="1 Anh Nghiện Ngập Ma Túy Suốt 7 Năm  Lên Làm Chứng Được Chúa Thương Xót Hoán Cải Tâm Hồn Anh" title="1 Anh Nghiện Ngập Ma Túy Suốt 7 Năm  Lên Làm Chứng Được Chúa Thương Xót Hoán Cải Tâm Hồn Anh">
                                        <span class="vidtime">00:10:27</span>
                                        <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> Chứng Nhân Lòng Chúa Thương Xót</span>
                                        <a href ="https://epicube.su/video/_9TVYZGa5Qo/1-anh-nghiện-ngập-ma-túy-suốt-7-năm-lên-làm-chứng-được-chúa-thương-xót-hoán-cải-tâm-hồn-anh/">
                                            <div class="over">
                                                <i class="fa fa-play-circle-o fa-5x play" aria-hidden="true"></i>


                                                <p class="sm">СМОТРЕТЬ</p>
                                            </div></a>
                                    </div>
                                    <span class="uploadbot">10 месяцев  назад</span>
                                    <span class="uploadbot" style="float:right">33 972 просмотров</span>
                                    <h4 style="margin-top:0px;"><a class="h4title" href="https://epicube.su/video/_9TVYZGa5Qo/1-anh-nghiện-ngập-ma-túy-suốt-7-năm-lên-làm-chứng-được-chúa-thương-xót-hoán-cải-tâm-hồn-anh/" target="_self">1 Anh Nghiện Ngập Ma Túy Suốt 7 Năm  Lên Làm Chứng Được Chúa Thương Xót Hoán Cải Tâm Hồn Anh</a> </h4>

                                </div>








                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                    <div class="col-md-12 hovereffect" style="padding: 0;">

                                        <img class="img-rounded img-responsive" border="0" style="font-size: 5px;"  width="100%" src="https://epicube.su/draw/H7Irc5jSk0A/perpetual-futures-contracts-explained.jpg" alt="Perpetual Futures Contracts Explained" title="Perpetual Futures Contracts Explained">
                                        <span class="vidtime">00:06:02</span>
                                        <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> Binance Academy</span>
                                        <a href ="https://epicube.su/video/H7Irc5jSk0A/perpetual-futures-contracts-explained/">
                                            <div class="over">
                                                <i class="fa fa-play-circle-o fa-5x play" aria-hidden="true"></i>


                                                <p class="sm">СМОТРЕТЬ</p>
                                            </div></a>
                                    </div>
                                    <span class="uploadbot">2 месяца  назад</span>
                                    <span class="uploadbot" style="float:right">2 616 просмотров</span>
                                    <h4 style="margin-top:0px;"><a class="h4title" href="https://epicube.su/video/H7Irc5jSk0A/perpetual-futures-contracts-explained/" target="_self">Perpetual Futures Contracts Explained</a> </h4>

                                </div>








                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                    <div class="col-md-12 hovereffect" style="padding: 0;">

                                        <img class="img-rounded img-responsive" border="0" style="font-size: 5px;"  width="100%" src="https://epicube.su/draw/thcXofwVka0/disney-s-princess-dolls-elsa-and-anna-from-frozen.jpg" alt="♥♥ Disney's Princess Dolls Elsa and Anna from Frozen" title="♥♥ Disney's Princess Dolls Elsa and Anna from Frozen">
                                        <span class="vidtime">00:03:02</span>
                                        <span class="viduser"><i class="fa fa-check-circle" style="color:#eff1f3"></i> MoneySavingVideos</span>
                                        <a href ="https://epicube.su/video/thcXofwVka0/disney-s-princess-dolls-elsa-and-anna-from-frozen/">
                                            <div class="over">
                                                <i class="fa fa-play-circle-o fa-5x play" aria-hidden="true"></i>


                                                <p class="sm">СМОТРЕТЬ</p>
                                            </div></a>
                                    </div>
                                    <span class="uploadbot">5 лет  назад</span>
                                    <span class="uploadbot" style="float:right">21 725 просмотров</span>
                                    <h4 style="margin-top:0px;"><a class="h4title" href="https://epicube.su/video/thcXofwVka0/disney-s-princess-dolls-elsa-and-anna-from-frozen/" target="_self">♥♥ Disney's Princess Dolls Elsa and Anna from "Frozen"</a> </h4>

                                </div>


                            </div>
                            <div class="col-md-12" style="padding: 0;text-align: -webkit-left;">
                                <a href="https://epicube.su/today-scan/">
                                    <button class="btn btn-danger btn-sm">
                                        Смотреть все видео
                                    </button>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
        <div class="panel b-radius back-color">
            <div class="labe-heading-danger">
                <span class="labedanger col-md-12 col-sm-12 col-xs-12">Смотрите далее</span>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/t9gO2EwZKH8/lyutie-prikoli-v-igrah-wdf-178-mamkin-snayper/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/t9gO2EwZKH8/lyutie-prikoli-v-igrah-wdf-178-mamkin-snayper.jpg" alt="Лютые приколы в играх | WDF 178 | Мамкин снайпер" title="Лютые приколы в играх | WDF 178 | Мамкин снайпер"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/t9gO2EwZKH8/lyutie-prikoli-v-igrah-wdf-178-mamkin-snayper/" target="_self">Лютые приколы в играх | WDF 178 | Мамкин снайпер</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> gamewadafaq</p>
                    <p class="uploadbot">3 недели  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/1cVoO1eG-eA/mulyt-obzor-doktor-son-zombilend-2-ford-protiv-ferrari/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/1cVoO1eG-eA/mulyt-obzor-doktor-son-zombilend-2-ford-protiv-ferrari.jpg" alt="МУЛЬТ ОБЗОР - Доктор сон , Зомбиленд 2 , Форд против Феррари" title="МУЛЬТ ОБЗОР - Доктор сон , Зомбиленд 2 , Форд против Феррари"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/1cVoO1eG-eA/mulyt-obzor-doktor-son-zombilend-2-ford-protiv-ferrari/" target="_self">МУЛЬТ ОБЗОР - Доктор сон , Зомбиленд 2 , Форд против Феррари</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> Dobryak</p>
                    <p class="uploadbot">3 дня  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/A5JEsvSweEQ/lyutie-prikoli-v-igrah-wdf-171-zhiza/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/A5JEsvSweEQ/lyutie-prikoli-v-igrah-wdf-171-zhiza.jpg" alt="Лютые приколы в играх | WDF 171 | ЖЫЗА!" title="Лютые приколы в играх | WDF 171 | ЖЫЗА!"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/A5JEsvSweEQ/lyutie-prikoli-v-igrah-wdf-171-zhiza/" target="_self">Лютые приколы в играх | WDF 171 | ЖЫЗА!</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> gamewadafaq</p>
                    <p class="uploadbot">2 месяца  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/92oKoKUDCf8/grifer-udivlen-perevernutim-skinom-anti-grifer-shou-trolling-griferov/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/92oKoKUDCf8/grifer-udivlen-perevernutim-skinom-anti-grifer-shou-trolling-griferov.jpg" alt="ГРИФЕР УДИВЛЕН ПЕРЕВЕРНУТЫМ СКИНОМ ! АНТИ-ГРИФЕР ШОУ (ТРОЛЛИНГ ГРИФЕРОВ)" title="ГРИФЕР УДИВЛЕН ПЕРЕВЕРНУТЫМ СКИНОМ ! АНТИ-ГРИФЕР ШОУ (ТРОЛЛИНГ ГРИФЕРОВ)"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/92oKoKUDCf8/grifer-udivlen-perevernutim-skinom-anti-grifer-shou-trolling-griferov/" target="_self">ГРИФЕР УДИВЛЕН ПЕРЕВЕРНУТЫМ СКИНОМ ! АНТИ-ГРИФЕР ШОУ (ТРОЛЛИНГ ГРИФЕРОВ)</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> MaxCore ;3</p>
                    <p class="uploadbot">10 месяцев  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/0jzl3GEg-TQ/5-nerealynih-tryukov-s-pomoshtyyu-kotorih-vi-viigraete-denygi-i-spor-u-druzey/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/0jzl3GEg-TQ/5-nerealynih-tryukov-s-pomoshtyyu-kotorih-vi-viigraete-denygi-i-spor-u-druzey.jpg" alt="5 НЕРЕАЛЬНЫХ ТРЮКОВ с помощью которых вы выиграете деньги и спор у друзей!" title="5 НЕРЕАЛЬНЫХ ТРЮКОВ с помощью которых вы выиграете деньги и спор у друзей!"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/0jzl3GEg-TQ/5-nerealynih-tryukov-s-pomoshtyyu-kotorih-vi-viigraete-denygi-i-spor-u-druzey/" target="_self">5 НЕРЕАЛЬНЫХ ТРЮКОВ с помощью которых вы выиграете деньги и спор у друзей!</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> DIPT</p>
                    <p class="uploadbot">3 года  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/F9YNDVJBsBg/lomaem-gravitatsiyu-na-mashine-rakete-i-ne-tolyko-uliotniy-aziatskiy-skill-test-v-gta-5-onlayn/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/F9YNDVJBsBg/lomaem-gravitatsiyu-na-mashine-rakete-i-ne-tolyko-uliotniy-aziatskiy-skill-test-v-gta-5-onlayn.jpg" alt="ЛОМАЕМ ГРАВИТАЦИЮ НА МАШИНЕ-РАКЕТЕ И НЕ ТОЛЬКО! УЛЁТНЫЙ АЗИАТСКИЙ СКИЛЛ ТЕСТ В ГТА 5 ОНЛАЙН" title="ЛОМАЕМ ГРАВИТАЦИЮ НА МАШИНЕ-РАКЕТЕ И НЕ ТОЛЬКО! УЛЁТНЫЙ АЗИАТСКИЙ СКИЛЛ ТЕСТ В ГТА 5 ОНЛАЙН"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/F9YNDVJBsBg/lomaem-gravitatsiyu-na-mashine-rakete-i-ne-tolyko-uliotniy-aziatskiy-skill-test-v-gta-5-onlayn/" target="_self">ЛОМАЕМ ГРАВИТАЦИЮ НА МАШИНЕ-РАКЕТЕ И НЕ ТОЛЬКО! УЛЁТНЫЙ АЗИАТСКИЙ СКИЛЛ ТЕСТ В ГТА 5 ОНЛАЙН</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> Joe Speen</p>
                    <p class="uploadbot">4 дня  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/LaIA1rngqKE/lyutie-prikoli-bravl-stars-s-shelli-yavno-chto-to-ne-tak/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/LaIA1rngqKE/lyutie-prikoli-bravl-stars-s-shelli-yavno-chto-to-ne-tak.jpg" alt="ЛЮТЫЕ ПРИКОЛЫ БРАВЛ СТАРС - С ШЕЛЛИ ЯВНО ЧТО-ТО НЕ ТАК" title="ЛЮТЫЕ ПРИКОЛЫ БРАВЛ СТАРС - С ШЕЛЛИ ЯВНО ЧТО-ТО НЕ ТАК"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/LaIA1rngqKE/lyutie-prikoli-bravl-stars-s-shelli-yavno-chto-to-ne-tak/" target="_self">ЛЮТЫЕ ПРИКОЛЫ БРАВЛ СТАРС - С ШЕЛЛИ ЯВНО ЧТО-ТО НЕ ТАК</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> Amber Wulf Game</p>
                    <p class="uploadbot">5 дней  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/59_DHD9vcFo/postroy-bazu-v-ksgo-za-10-sekund-1-minutu-10-minut-kto-postroit-samuyu-moshtnuyu-bazu-v-ksgo/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/59_DHD9vcFo/postroy-bazu-v-ksgo-za-10-sekund-1-minutu-10-minut-kto-postroit-samuyu-moshtnuyu-bazu-v-ksgo.jpg" alt="ПОСТРОЙ БАЗУ В КСГО ЗА 10 СЕКУНД / 1 МИНУТУ / 10 МИНУТ / КТО ПОСТРОИТ САМУЮ МОЩНУЮ БАЗУ В КСГО???" title="ПОСТРОЙ БАЗУ В КСГО ЗА 10 СЕКУНД / 1 МИНУТУ / 10 МИНУТ / КТО ПОСТРОИТ САМУЮ МОЩНУЮ БАЗУ В КСГО???"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/59_DHD9vcFo/postroy-bazu-v-ksgo-za-10-sekund-1-minutu-10-minut-kto-postroit-samuyu-moshtnuyu-bazu-v-ksgo/" target="_self">ПОСТРОЙ БАЗУ В КСГО ЗА 10 СЕКУНД / 1 МИНУТУ / 10 МИНУТ / КТО ПОСТРОИТ САМУЮ МОЩНУЮ БАЗУ В КСГО???</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> ФРАЙ</p>
                    <p class="uploadbot">5 дней  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/9kMm-nhyR1M/bitva-avtougonshtikov-v-gta-5-onlayn-ugnal-pyaty-samih-dorogih-tachek-za-6-mlrd-bitva-vorov-gta-5/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/9kMm-nhyR1M/bitva-avtougonshtikov-v-gta-5-onlayn-ugnal-pyaty-samih-dorogih-tachek-za-6-mlrd-bitva-vorov-gta-5.jpg" alt="БИТВА АВТОУГОНЩИКОВ В ГТА 5 ОНЛАЙН. УГНАЛ ПЯТЬ САМЫХ ДОРОГИХ ТАЧЕК ЗА 6 МЛРД! БИТВА ВОРОВ ГТА 5!" title="БИТВА АВТОУГОНЩИКОВ В ГТА 5 ОНЛАЙН. УГНАЛ ПЯТЬ САМЫХ ДОРОГИХ ТАЧЕК ЗА 6 МЛРД! БИТВА ВОРОВ ГТА 5!"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/9kMm-nhyR1M/bitva-avtougonshtikov-v-gta-5-onlayn-ugnal-pyaty-samih-dorogih-tachek-za-6-mlrd-bitva-vorov-gta-5/" target="_self">БИТВА АВТОУГОНЩИКОВ В ГТА 5 ОНЛАЙН. УГНАЛ ПЯТЬ САМЫХ ДОРОГИХ ТАЧЕК ЗА 6 МЛРД! БИТВА ВОРОВ ГТА 5!</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> DONNY</p>
                    <p class="uploadbot">5 дней  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/gYwmjiVJ_DM/sekretnaya-dvery-otkrita-etogo-ne-mozhet-bity-razgadali-taynu-soseda-v-secret-neighbor/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/gYwmjiVJ_DM/sekretnaya-dvery-otkrita-etogo-ne-mozhet-bity-razgadali-taynu-soseda-v-secret-neighbor.jpg" alt="СЕКРЕТНАЯ ДВЕРЬ ОТКРЫТА! ЭТОГО НЕ МОЖЕТ БЫТЬ! РАЗГАДАЛИ ТАЙНУ СОСЕДА В SECRET NEIGHBOR" title="СЕКРЕТНАЯ ДВЕРЬ ОТКРЫТА! ЭТОГО НЕ МОЖЕТ БЫТЬ! РАЗГАДАЛИ ТАЙНУ СОСЕДА В SECRET NEIGHBOR"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/gYwmjiVJ_DM/sekretnaya-dvery-otkrita-etogo-ne-mozhet-bity-razgadali-taynu-soseda-v-secret-neighbor/" target="_self">СЕКРЕТНАЯ ДВЕРЬ ОТКРЫТА! ЭТОГО НЕ МОЖЕТ БЫТЬ! РАЗГАДАЛИ ТАЙНУ СОСЕДА В SECRET NEIGHBOR</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> Coffi Channel</p>
                    <p class="uploadbot">4 дня  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/EMbZZ2cQXhA/lyutie-prikoli-lyutaya-zashtita-telefona/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/EMbZZ2cQXhA/lyutie-prikoli-lyutaya-zashtita-telefona.jpg" alt="Лютые приколы Лютая защита телефона" title="Лютые приколы Лютая защита телефона"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/EMbZZ2cQXhA/lyutie-prikoli-lyutaya-zashtita-telefona/" target="_self">Лютые приколы Лютая защита телефона</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> Max Maximov</p>
                    <p class="uploadbot">15 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/U13mZlskIww/luchshie-prikoli-v-igrah-2018-smeshnie-momenti-v-igrah-2018-podborka-igrovih-prikolov-i-bagov-31/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/U13mZlskIww/luchshie-prikoli-v-igrah-2018-smeshnie-momenti-v-igrah-2018-podborka-igrovih-prikolov-i-bagov-31.jpg" alt="ЛУЧШИЕ ПРИКОЛЫ В ИГРАХ 2018 СМЕШНЫЕ МОМЕНТЫ В ИГРАХ 2018 ПОДБОРКА ИГРОВЫХ ПРИКОЛОВ И БАГОВ #31" title="ЛУЧШИЕ ПРИКОЛЫ В ИГРАХ 2018 СМЕШНЫЕ МОМЕНТЫ В ИГРАХ 2018 ПОДБОРКА ИГРОВЫХ ПРИКОЛОВ И БАГОВ #31"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/U13mZlskIww/luchshie-prikoli-v-igrah-2018-smeshnie-momenti-v-igrah-2018-podborka-igrovih-prikolov-i-bagov-31/" target="_self">ЛУЧШИЕ ПРИКОЛЫ В ИГРАХ 2018 СМЕШНЫЕ МОМЕНТЫ В ИГРАХ 2018 ПОДБОРКА ИГРОВЫХ ПРИКОЛОВ И БАГОВ #31</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> Сrazy World</p>
                    <p class="uploadbot">1 год  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/9QLO-onR-mQ/lyutie-prikoli-v-igrah-wdf-165-mamkin-pirotehnik/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/9QLO-onR-mQ/lyutie-prikoli-v-igrah-wdf-165-mamkin-pirotehnik.jpg" alt="Лютые приколы в играх | WDF 165 | МАМКИН ПИРОТЕХНИК!" title="Лютые приколы в играх | WDF 165 | МАМКИН ПИРОТЕХНИК!"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/9QLO-onR-mQ/lyutie-prikoli-v-igrah-wdf-165-mamkin-pirotehnik/" target="_self">Лютые приколы в играх | WDF 165 | МАМКИН ПИРОТЕХНИК!</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> gamewadafaq</p>
                    <p class="uploadbot">4 месяца  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/CqcJotc0nHc/prikoli-v-fortnite-wdf-118-korolevskaya-telega/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px; width="100%" src="https://epicube.su/draw/CqcJotc0nHc/prikoli-v-fortnite-wdf-118-korolevskaya-telega.jpg" alt="Приколы в Fortnite | WDF 118 | Королевская телега!" title="Приколы в Fortnite | WDF 118 | Королевская телега!"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 0px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/CqcJotc0nHc/prikoli-v-fortnite-wdf-118-korolevskaya-telega/" target="_self">Приколы в Fortnite | WDF 118 | Королевская телега!</a></h4>
                    <p class="userrel"><i class="fa fa-check-circle"></i> gamewadafaq</p>
                    <p class="uploadbot">1 год  назад</p>
                </div>
            </div>





        </div>

        <div class="panel pop-panel back-color">
            <div class="labe-heading-danger">
                <span class="labedanger col-md-12 col-sm-12 col-xs-12">Популярные видео</span>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/5SFDj-tmHzI/supersimmetriya-vs-mulytivselennaya-bolyshoy-adronniy-kollayder-toples/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/5SFDj-tmHzI/supersimmetriya-vs-mulytivselennaya-bolyshoy-adronniy-kollayder-toples.jpg" alt="СУПЕРСИММЕТРИЯ vs MУЛЬТИВСЕЛЕННАЯ. БОЛЬШОЙ АДРОННЫЙ КОЛЛАЙДЕР — ТОПЛЕС" title="СУПЕРСИММЕТРИЯ vs MУЛЬТИВСЕЛЕННАЯ. БОЛЬШОЙ АДРОННЫЙ КОЛЛАЙДЕР — ТОПЛЕС"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/5SFDj-tmHzI/supersimmetriya-vs-mulytivselennaya-bolyshoy-adronniy-kollayder-toples/" target="_self">СУПЕРСИММЕТРИЯ vs MУЛЬТИВСЕЛЕННАЯ. БОЛЬШОЙ АДРОННЫЙ КОЛЛАЙДЕР — ТОПЛЕС</a></h4>
                    <p class="uploadbot">16 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/3zdENnwPFYk/rolls-roys-iz-saraya-nahodka-goda-ili-proval/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/3zdENnwPFYk/rolls-roys-iz-saraya-nahodka-goda-ili-proval.jpg" alt="Роллс Ройс из сарая. Находка года или провал?" title="Роллс Ройс из сарая. Находка года или провал?"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/3zdENnwPFYk/rolls-roys-iz-saraya-nahodka-goda-ili-proval/" target="_self">Роллс Ройс из сарая. Находка года или провал?</a></h4>
                    <p class="uploadbot">17 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/H-w_aoyR_08/tresh-loto-elektrozhmurki-s-komarom/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/H-w_aoyR_08/tresh-loto-elektrozhmurki-s-komarom.jpg" alt="ТРЭШ ЛОТО: ЭЛЕКТРОЖМУРКИ С КОМАРОМ" title="ТРЭШ ЛОТО: ЭЛЕКТРОЖМУРКИ С КОМАРОМ"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/H-w_aoyR_08/tresh-loto-elektrozhmurki-s-komarom/" target="_self">ТРЭШ ЛОТО: ЭЛЕКТРОЖМУРКИ С КОМАРОМ</a></h4>
                    <p class="uploadbot">16 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/XXGDtpL_FbY/molchu-24-chasa/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/XXGDtpL_FbY/molchu-24-chasa.jpg" alt="МОЛЧУ 24 ЧАСА" title="МОЛЧУ 24 ЧАСА"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/XXGDtpL_FbY/molchu-24-chasa/" target="_self">МОЛЧУ 24 ЧАСА</a></h4>
                    <p class="uploadbot">18 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/bvfS5GibcZc/rossiya-vs-amerika-ssha/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/bvfS5GibcZc/rossiya-vs-amerika-ssha.jpg" alt="РОССИЯ vs. АМЕРИКА [США]" title="РОССИЯ vs. АМЕРИКА [США]"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/bvfS5GibcZc/rossiya-vs-amerika-ssha/" target="_self">РОССИЯ vs. АМЕРИКА [США]</a></h4>
                    <p class="uploadbot">18 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/TNWN3KIaPNQ/moi-bratyya-vignali-menya-i-moyu-mamu-iz-nashego-doma/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/TNWN3KIaPNQ/moi-bratyya-vignali-menya-i-moyu-mamu-iz-nashego-doma.jpg" alt="Мои братья выгнали меня и мою маму из нашего дома" title="Мои братья выгнали меня и мою маму из нашего дома"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/TNWN3KIaPNQ/moi-bratyya-vignali-menya-i-moyu-mamu-iz-nashego-doma/" target="_self">Мои братья выгнали меня и мою маму из нашего дома</a></h4>
                    <p class="uploadbot">17 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/NcgXIdggYls/vpiska-i-satyr-parodiya-na-sobchak-battl-s-dzharahovim-oxxxymiron-zvonok-heyteru/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/NcgXIdggYls/vpiska-i-satyr-parodiya-na-sobchak-battl-s-dzharahovim-oxxxymiron-zvonok-heyteru.jpg" alt="Вписка и Satyr — пародия на Собчак, баттл с Джараховым, Oxxxymiron, звонок хейтеру" title="Вписка и Satyr — пародия на Собчак, баттл с Джараховым, Oxxxymiron, звонок хейтеру"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/NcgXIdggYls/vpiska-i-satyr-parodiya-na-sobchak-battl-s-dzharahovim-oxxxymiron-zvonok-heyteru/" target="_self">Вписка и Satyr — пародия на Собчак, баттл с Джараховым, Oxxxymiron, звонок хейтеру</a></h4>
                    <p class="uploadbot">21 час  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/zA6sto-vxds/trudnie-podrostki-8-seriya/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/zA6sto-vxds/trudnie-podrostki-8-seriya.jpg" alt="Трудные подростки | 8 серия" title="Трудные подростки | 8 серия"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/zA6sto-vxds/trudnie-podrostki-8-seriya/" target="_self">Трудные подростки | 8 серия</a></h4>
                    <p class="uploadbot">23 часа  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/-cjmcNrre94/alina-zagitova-korotkaya-programma-zhenshtini-nhk-trophy-gran-pri-po-figurnomu-kataniyu-2019-20/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/-cjmcNrre94/alina-zagitova-korotkaya-programma-zhenshtini-nhk-trophy-gran-pri-po-figurnomu-kataniyu-2019-20.jpg" alt="Алина Загитова. Короткая программа. Женщины. NHK Trophy. Гран-при по фигурному катанию 2019/20" title="Алина Загитова. Короткая программа. Женщины. NHK Trophy. Гран-при по фигурному катанию 2019/20"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/-cjmcNrre94/alina-zagitova-korotkaya-programma-zhenshtini-nhk-trophy-gran-pri-po-figurnomu-kataniyu-2019-20/" target="_self">Алина Загитова. Короткая программа. Женщины. NHK Trophy. Гран-при по фигурному катанию 2019/20</a></h4>
                    <p class="uploadbot">18 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/MgDm778V8x4/paxmoq-kelin-3-qism-l-pahmoқ-kelin-3-seriya/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/MgDm778V8x4/paxmoq-kelin-3-qism-l-pahmoқ-kelin-3-seriya.jpg" alt="Paxmoq kelin (3-qism) l Пахмоқ келин (3-серия)" title="Paxmoq kelin (3-qism) l Пахмоқ келин (3-серия)"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/MgDm778V8x4/paxmoq-kelin-3-qism-l-pahmoқ-kelin-3-seriya/" target="_self">Paxmoq kelin (3-qism) l Пахмоқ келин (3-серия)</a></h4>
                    <p class="uploadbot">19 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/urnLi3TRS50/otets-chuty-ne-zaplakal-kogda-ya-podaril-emu-mashinu-mechti/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/urnLi3TRS50/otets-chuty-ne-zaplakal-kogda-ya-podaril-emu-mashinu-mechti.jpg" alt="ОТЕЦ ЧУТЬ НЕ ЗАПЛАКАЛ, КОГДА Я ПОДАРИЛ ЕМУ МАШИНУ МЕЧТЫ" title="ОТЕЦ ЧУТЬ НЕ ЗАПЛАКАЛ, КОГДА Я ПОДАРИЛ ЕМУ МАШИНУ МЕЧТЫ"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/urnLi3TRS50/otets-chuty-ne-zaplakal-kogda-ya-podaril-emu-mashinu-mechti/" target="_self">ОТЕЦ ЧУТЬ НЕ ЗАПЛАКАЛ, КОГДА Я ПОДАРИЛ ЕМУ МАШИНУ МЕЧТЫ</a></h4>
                    <p class="uploadbot">1 день  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/fS5mng7gDF8/uslovniy-ment-23-seriya-lzhedmitriy/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/fS5mng7gDF8/uslovniy-ment-23-seriya-lzhedmitriy.jpg" alt="Условный мент | 23 серия | Лжедмитрий" title="Условный мент | 23 серия | Лжедмитрий"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/fS5mng7gDF8/uslovniy-ment-23-seriya-lzhedmitriy/" target="_self">Условный мент | 23 серия | Лжедмитрий</a></h4>
                    <p class="uploadbot">23 часа  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/xGRNZIpfDWw/ya-kupil-vse-v-gigantskom-magazine-sladostey-reaktsiya-prodavtsa/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/xGRNZIpfDWw/ya-kupil-vse-v-gigantskom-magazine-sladostey-reaktsiya-prodavtsa.jpg" alt="я КУПИЛ ВСЕ в ГИГАНТСКОМ МАГАЗИНЕ СЛАДОСТЕЙ! реакция продавца" title="я КУПИЛ ВСЕ в ГИГАНТСКОМ МАГАЗИНЕ СЛАДОСТЕЙ! реакция продавца"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/xGRNZIpfDWw/ya-kupil-vse-v-gigantskom-magazine-sladostey-reaktsiya-prodavtsa/" target="_self">я КУПИЛ ВСЕ в ГИГАНТСКОМ МАГАЗИНЕ СЛАДОСТЕЙ! реакция продавца</a></h4>
                    <p class="uploadbot">19 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/YMXQfmx_GOE/obichnaya-eda-protiv-marmelada-chellendzh-afinka-protiv-elyfika-real-food-vs-gummy-food-elyfinka/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/YMXQfmx_GOE/obichnaya-eda-protiv-marmelada-chellendzh-afinka-protiv-elyfika-real-food-vs-gummy-food-elyfinka.jpg" alt="ОБЫЧНАЯ ЕДА ПРОТИВ МАРМЕЛАДА Челлендж Афинка против Эльфика Real Food vs Gummy Food 🐞 Эльфинка" title="ОБЫЧНАЯ ЕДА ПРОТИВ МАРМЕЛАДА Челлендж Афинка против Эльфика Real Food vs Gummy Food 🐞 Эльфинка"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/YMXQfmx_GOE/obichnaya-eda-protiv-marmelada-chellendzh-afinka-protiv-elyfika-real-food-vs-gummy-food-elyfinka/" target="_self">ОБЫЧНАЯ ЕДА ПРОТИВ МАРМЕЛАДА Челлендж Афинка против Эльфика Real Food vs Gummy Food 🐞 Эльфинка</a></h4>
                    <p class="uploadbot">18 часов  назад</p>
                </div>
            </div>




            <div class="row" style="margin:10px">
                <div class="col-md-4" style="padding: 5px;">
                    <a href ="https://epicube.su/video/mkfwYR_5lig/buzova-i-batrudinov-60-minut-otchayanno-ishtut-paru-na-shou-plan-b/">
                        <img class="img img-responsive" border="0" style="font-size: 5px; border-radius: 8px;  width="100%" src="https://epicube.su/draw/mkfwYR_5lig/buzova-i-batrudinov-60-minut-otchayanno-ishtut-paru-na-shou-plan-b.jpg" alt="БУЗОВА и БАТРУДИНОВ 60 МИНУТ ОТЧАЯННО ИЩУТ ПАРУ на шоу ПЛАН Б" title="БУЗОВА и БАТРУДИНОВ 60 МИНУТ ОТЧАЯННО ИЩУТ ПАРУ на шоу ПЛАН Б"> </a>
                </div>

                <div class="col-md-8" style="padding: 0px;">
                    <h4 style="margin-top:0px;margin-bottom: 10px;line-height: 0.8;"><a class="h4title" href="https://epicube.su/video/mkfwYR_5lig/buzova-i-batrudinov-60-minut-otchayanno-ishtut-paru-na-shou-plan-b/" target="_self">БУЗОВА и БАТРУДИНОВ 60 МИНУТ ОТЧАЯННО ИЩУТ ПАРУ на шоу ПЛАН Б</a></h4>
                    <p class="uploadbot">15 часов  назад</p>
                </div>
            </div>
        </div>


    </div>



</div>
</div>