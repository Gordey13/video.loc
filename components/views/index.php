<div id="navbar" class="container navbar-collapse collapse">
    <div class="row">
        <nav id="category" class="navbar navbar-vertical-left">
            <ul class="nav navbar-nav" style="padding-top: 69px">
                <li>
                    <a href="http://video.loc/" class="one">
                        <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                        <span class="text-center text_menu">Главная</span>
                    </a>
                </li>
                <?php foreach($cats as $cat): ?>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $cat['id'], 'url' => $cat['tag']]) ?>" class="two">
                            <i class="fa fa-fire fa-lg" aria-hidden="true"></i>
                            <span class="text_menu"><?= $cat['name']?></span>
                        </a>
                    </li>
                <? endforeach; ?>
            </ul>
        </nav>
    </div>
</div>
