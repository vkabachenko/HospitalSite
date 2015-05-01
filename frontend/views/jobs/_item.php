<?php

use yii\helpers\HtmlPurifier;
use yii\helpers\Html;

/* @var $model common\models\Jobs */
?>

<div class="job">

    <p><span>Должность:</span> <?= Html::encode($model->position) ?> </p>

    <div class="comments">
        <?= HtmlPurifier::process($model->comment); ?>
    </div>

    <p><span>Количество ставок:</span> <?= Html::encode($model->quantity) ?> </p>
    <p><span>Зарплата:</span> <?= Html::encode($model->salary) ?> руб. в месяц</p>
    <p><span>Требования:</span> <?= Html::encode($model->requirement) ?> </p>
    <p><span>Образование:</span> <?= Html::encode($model->education) ?> </p>
    <p class="date">Размещено <?= Yii::$app->formatter->asDate($model->updated_at) ?> </p>

</div>