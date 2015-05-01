<?php
/* @var $this yii\web\View */
/* @var $title string */
/* @var $article string */

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = $title;
?>

<div class="article">

    <h2>
        <?= Html::encode($title); ?>
    </h2>
        <?= HtmlPurifier::process($article) ?>

</div>