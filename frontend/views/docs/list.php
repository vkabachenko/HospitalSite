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
<div class="docs-normative">
     <?= ListView::widget([
        'dataProvider' => $provider,
        'itemView' => '_document',
        'summary' => '',
        ]); ?>
</div>