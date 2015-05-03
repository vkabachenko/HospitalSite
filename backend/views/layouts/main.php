<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

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
    <div class="wrap">

        <?php


            $articleItems = \Yii::$app->article->getArticles();

            NavBar::begin([
                'brandLabel' => 'Админ панель',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',
                ],
            ]);
            if (\Yii::$app->user->isGuest) {
                $menuItems = [];
            }
            else {
            $menuItems = [
                ['label' => 'Статьи', 'items' => $articleItems],
                ['label' => 'Документы', 'url' => ['docs/index']],
                ['label' => 'Структура', 'url' => ['site/structure']],
                ['label' => 'Вакансии', 'url' => ['jobs/index']],
            ];
            }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div  class="container">
          <?= $content ?>
        </div>
   </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
