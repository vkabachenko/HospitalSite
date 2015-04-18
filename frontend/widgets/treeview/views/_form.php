<?php

/**
 * @var yii\web\View            $this
 * @var kartik\tree\models\Tree $node
 */
use yii\web\View;

extract($params);

?>

<h2>
    <?= $node->name ?>
</h2>

<div>
<?= $node->content; ?>
</div>