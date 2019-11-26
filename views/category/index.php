<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Video.loc - смотрите самые популярные видеоролики онлайн';
?>
<div class="col-lg-12 col-md-12 m90">
    <div class="panel" style="border-radius: 8px;color:#f1f1f1; margin-top: -30px;">
        <div class="labe-heading">
            <span class="polygonal labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-fire" aria-hidden="true"></i>
                Популярное </span></div>
        <?php foreach ($popular as $hit): ?>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                <div class="col-md-12 hovereffect" style="padding: 0;">

                    <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                    <span class="vidtime"><?= $hit->yt_length ?></span>

                    <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                    <a
                            href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                        <div class="over">
                            <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                            <p class="sm">СМОТРЕТЬ</p>
                        </div>
                    </a>
                </div>
                <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                <h4 class="h4title"> <a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                        target="_self"><?= $hit->video_title ?></a> </h4>
            </div>
        <?php endforeach; ?>

        <div class="panel-body pop-panel back-color">
            <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-car" aria-hidden="true"></i>
                    Авто</span></div>
            <?php foreach ($engine as $hit): ?>
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                <div class="col-md-12 hovereffect" style="padding: 0;">

                    <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                    <span class="vidtime"><?= $hit->yt_length ?></span>

                    <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                    <a
                        href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                        <div class="over">
                            <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                            <p class="sm">СМОТРЕТЬ</p>
                        </div>
                    </a>
                </div>
                <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                <h4 class="h4title"> <a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                        target="_self"><?= $hit->video_title ?></a> </h4>
            </div>
            <?php endforeach; ?>

        </div>
        <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-trophy" aria-hidden="true"></i>
                    Спорт</span></div>
            <?php foreach ($sport as $hit): ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                    <div class="col-md-12 hovereffect" style="padding: 0;">

                        <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                        <span class="vidtime"><?= $hit->yt_length ?></span>

                        <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                        <a
                                href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                            <div class="over">
                                <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                                <p class="sm">СМОТРЕТЬ</p>
                            </div>
                        </a>
                    </div>
                    <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                    <h4 class="h4title"><a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                                                                      target="_self"><?= $hit->video_title ?></a> </h4>
                </div>
            <?php endforeach; ?>
        </div>

        <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-dog" aria-hidden="true"></i>
                    Животные</span></div>
            <?php foreach ($pets as $hit): ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                    <div class="col-md-12 hovereffect" style="padding: 0;">

                        <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                        <span class="vidtime"><?= $hit->yt_length ?></span>

                        <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                        <a
                                href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                            <div class="over">
                                <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                                <p class="sm">СМОТРЕТЬ</p>
                            </div>
                        </a>
                    </div>
                    <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                    <h4 class="h4title"><a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                                                                      target="_self"><?= $hit->video_title ?></a> </h4>
                </div>
            <?php endforeach; ?>




        </div>
        <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-film" aria-hidden="true"></i>
                    Фильмы</span></div>
            <?php foreach ($cinema as $hit): ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                    <div class="col-md-12 hovereffect" style="padding: 0;">

                        <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                        <span class="vidtime"><?= $hit->yt_length ?></span>

                        <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                        <a
                                href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                            <div class="over">
                                <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                                <p class="sm">СМОТРЕТЬ</p>
                            </div>
                        </a>
                    </div>
                    <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                    <h4 class="h4title"><a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                                                                      target="_self"><?= $hit->video_title ?></a> </h4>
                </div>
            <?php endforeach; ?>




        </div>
        <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-grin" aria-hidden="true"></i>
                    Юмор</span></div>
            <?php foreach ($comedy as $hit): ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                    <div class="col-md-12 hovereffect" style="padding: 0;">

                        <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                        <span class="vidtime"><?= $hit->yt_length ?></span>

                        <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                        <a
                                href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                            <div class="over">
                                <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                                <p class="sm">СМОТРЕТЬ</p>
                            </div>
                        </a>
                    </div>
                    <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                    <h4 class="h4title"><a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                                                                      target="_self"><?= $hit->video_title ?></a> </h4>
                </div>
            <?php endforeach; ?>




        </div>


        <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-headphones" aria-hidden="true"></i>
                    Музыка</span></div>
            <?php foreach ($music as $hit): ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                    <div class="col-md-12 hovereffect" style="padding: 0;">

                        <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                        <span class="vidtime"><?= $hit->yt_length ?></span>

                        <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                        <a
                                href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                            <div class="over">
                                <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                                <p class="sm">СМОТРЕТЬ</p>
                            </div>
                        </a>
                    </div>
                    <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                    <h4 class="h4title"><a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                                                                      target="_self"><?= $hit->video_title ?></a> </h4>
                </div>
            <?php endforeach; ?>




        </div>

        <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-gamepad" aria-hidden="true"></i>
                    Игры</span></div>
            <?php foreach ($game as $hit): ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                    <div class="col-md-12 hovereffect" style="padding: 0;">

                        <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                        <span class="vidtime"><?= $hit->yt_length ?></span>

                        <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                        <a
                                href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                            <div class="over">
                                <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                                <p class="sm">СМОТРЕТЬ</p>
                            </div>
                        </a>
                    </div>
                    <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                    <h4 class="h4title"><a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                                                                      target="_self"><?= $hit->video_title ?></a> </h4>
                </div>
            <?php endforeach; ?>




        </div>

        <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-lightbulb" aria-hidden="true"></i>
                    Увлечения</span></div>
            <?php foreach ($style as $hit): ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                    <div class="col-md-12 hovereffect" style="padding: 0;">

                        <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                        <span class="vidtime"><?= $hit->yt_length ?></span>

                        <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                        <a
                                href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                            <div class="over">
                                <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                                <p class="sm">СМОТРЕТЬ</p>
                            </div>
                        </a>
                    </div>
                    <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                    <h4 class="h4title"><a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                                                                      target="_self"><?= $hit->video_title ?></a> </h4>
                </div>
            <?php endforeach; ?>
        </div>
            
        <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-space-shuttle"
                        aria-hidden="true"></i> Технологии</span></div>
            <?php foreach ($tech as $hit): ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                    <div class="col-md-12 hovereffect" style="padding: 0;">

                        <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                        <span class="vidtime"><?= $hit->yt_length ?></span>

                        <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                        <a
                                href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                            <div class="over">
                                <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                                <p class="sm">СМОТРЕТЬ</p>
                            </div>
                        </a>
                    </div>
                    <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                    <h4 class="h4title"><a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                                                                      target="_self"><?= $hit->video_title ?></a> </h4>
                </div>
            <?php endforeach; ?>
        </div>

        <hr style="margin-bottom: -1px;">
        <div class="row">
            <div class="labe-heading">
                <span class="labeprim col-md-12 col-sm-12 col-xs-12"><i class="fa fa-globe" aria-hidden="true"></i>
                    Развлечения</span></div>
            <?php foreach ($entert as $hit): ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 vidprev">

                    <div class="col-md-12 hovereffect" style="padding: 0;">

                        <?= Html::img("https:{$hit->yt_thumb}", ['alt'=> $hit->video_title, 'title'=>$hit->video_title, 'class'=>'img-rounded img-responsive', 'width' =>'100%'])?>
                        <span class="vidtime"><?= $hit->yt_length ?></span>

                        <span class="viduser vdslink"><i class="fa fa-check-circle" style="color:#eff1f3"></i>
                        <?= $hit->submitted ?></span>
                        <a
                                href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>">
                            <div class="over">
                                <i class="fas fa-play fa-4x play" aria-hidden="true"></i>
                                <p class="sm">СМОТРЕТЬ</p>
                            </div>
                        </a>
                    </div>
                    <span class="uploadbot"><?= $hit->site_views ?> Просмотров</span>
                    <h4 class="h4title"><a class="h4title" href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id, 'slug' => $hit->video_slug]) ?>"
                                                                                      target="_self"><?= $hit->video_title ?></a> </h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>