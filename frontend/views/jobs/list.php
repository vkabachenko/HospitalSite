<?php
/* @var $this yii\web\View */
/** @var $provider yii\data\ActiveDataProvider */
/* @var $title string */

use yii\widgets\ListView;

$this->title = $title;

?>
<h2>
    <?= $title ?>
</h2>
<div class="jobs">
     <?= ListView::widget([
        'dataProvider' => $provider,
        'itemView' => '_item',
        'summary' => '',
        'emptyText' => 'Вакансий пока нет',
        ]); ?>
</div>