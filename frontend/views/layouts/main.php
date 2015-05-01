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

    <div class="container" id="wrapper">
        <div class="row" id="header">
            <div class="col-xs-8" id="titleOrg">
                <h1>Псковская районная больница</h1>
                <p class="orgDetails">Государственное бюджетное учреждение здравоохранения «Псковская районная больница»</p>
                <p class="orgDetails">ИНН 6018000612<span>ОГРН 102600234355</span></p>
            </div>
            <div class="col-xs-4" id="phones">
                <p class="mainName">Регистратура поликлиники</p>
                <p class="mainTel">720756</p>
                <p class="mainName">Приемное отделение</p>
                <p class="mainTel">625386</p>
                <p class="mainName">Скорая помощь</p>
                <p class="mainTel">888888</p>
            </div>
        </div>
        <div class="row">
        <?php
            $template = \Yii::$app->template;

            echo Nav::widget([
                'items' => $template->getTopMenuItems(),
                'options' => [
                    'id' => 'topNav',
                    'class' => 'nav nav-pills nav-justified'
                ],
        ]);

        ?>
        </div>

        <div class="row" id="content">

            <div class="col-xs-3" id="leftSidebar">

                <?php

                echo Nav::widget([
                    'items' => $template->getLeftMenuItems(),
                    'options' => [
                        'id' => 'leftNav',
                        'class' => 'nav nav-pills nav-stacked',
                    ],
                ]);

                ?>


            </div>

            <div class="col-xs-9"  id="rightSidebar">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

    </div>


    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; ГБУЗ "Псковская РБ", <?= date('Y') ?></p>
        </div>
    </footer>


    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
