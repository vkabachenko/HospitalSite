<?php

use yii\helpers\HtmlPurifier;

/* @var $model common\models\Documents */
?>

<div class="document">
    <?= HtmlPurifier::process($model->document); ?>
</div>