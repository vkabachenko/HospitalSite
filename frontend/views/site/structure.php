<?php
   use kartik\tree\TreeView;
   use common\models\Structure;
   use frontend\assets\FontAwesomeAsset;
/* @var $this yii\web\View */

/*
echo TreeView::widget([
    // single query fetch to render the tree
    'query' => Structure::find()->addOrderBy('root, lft'),
    'fontAwesome' => false,     // optional
    'isAdmin' => true,         // optional (toggle to enable admin mode)
    'displayValue' => 1,        // initial display value
    'softDelete' => true,       // defaults to true
    'cacheSettings' => [
        'enableCache' => true   // defaults to true
    ],
    'showTooltips' => false,
]);
*/

FontAwesomeAsset::register($this);

echo TreeView::widget([
    // single query fetch to render the tree
    'query' => Structure::find()->addOrderBy('root, lft'),
    'displayValue' => 0,
    'fontAwesome' => true,
    'nodeView' => '@frontend/widgets/treeview/views/_form',
    'mainTemplate' =>
        '<div class="row">
        <div class="col-sm-6">
            {wrapper}
        </div>
           <div class="col-sm-6">
            {detail}
        </div>
        </div>',
    'wrapperTemplate' => '{tree}',
    'rootOptions' => [
        'label' => '',
    ],
    'showFormButtons' => false,
    'multiple' => false,
    'iconEditSettings' => [
        'show' =>'none',
    ],
    'emptyNodeMsg' => ' ',
    'showTooltips' => false,

]);



