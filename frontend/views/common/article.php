<?php
/* @var $this yii\web\View */
/* @var $title string */
/* @var $article string */

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = $title;
?>
<div>

    <h1>
        <?= Html::encode($title); ?>
    </h1>
        <?= HtmlPurifier::process($article) ?>

</div>