<?php

use yii\helpers\HtmlPurifier;
use yii\helpers\Html;

/* @var $model common\models\Jobs */
?>

<div class="current">

    <p>Должность <?= Html::encode($model->position) ?> </p>
    <?= HtmlPurifier::process($model->comment); ?>
    <p>Количество ставок <?= Html::encode($model->quantity) ?> </p>
    <p>Зарплата <?= Html::encode($model->salary) ?> руб. в месяц</p>
    <p>Требования: <?= Html::encode($model->requirement) ?> </p>
    <p>Образование <?= Html::encode($model->education) ?> </p>
    <p>Размещено <?= Yii::$app->formatter->asDate($model->updated_at) ?> </p>


</div>