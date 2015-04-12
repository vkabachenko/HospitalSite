<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="container">
        <div class="row">
        <?php
            $template = \Yii::$app->template;

            echo Nav::widget([
                'items' => $template->getTopMenuItems(),
                'options' => ['class' => 'nav nav-pills nav-justified'],
            ]);

        ?>
        </div>

        <div class="row">
            <div class="col-xs-3">

                <?php

                echo Nav::widget([
                    'items' => $template->getLeftMenuItems(),
                    'options' => ['class' => 'nav nav-pills nav-stacked'],
                ]);

                ?>


            </div>

            <div class="col-xs-9">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
