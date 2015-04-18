<?php
   use kartik\tree\TreeView;
   use common\models\Structure;
   use kartik\tree\Module;

/* @var $this yii\web\View */

echo TreeView::widget([
    // single query fetch to render the tree
    'query' => Structure::find()->addOrderBy('root, lft'),
    'fontAwesome' => false,     // optional
    'displayValue' => 0,
    'isAdmin' => true,         // optional (toggle to enable admin mode)
    'softDelete' => true,       // defaults to true
    'multiple' => false,
    'rootOptions' => [
        'label' => '',
    ],
    'mainTemplate' =>
        '<div class="row">
        <div class="col-sm-5">
            {wrapper}
        </div>
           <div class="col-sm-7">
            {detail}
        </div>
        </div>',
    'wrapperTemplate' => '{tree}{footer}',
    'nodeAddlViews' => [
        Module::VIEW_PART_2 => '@backend/widgets/treeview/views/_details',
    ],
    'cacheSettings' => [
        'enableCache' => true   // defaults to true
    ],
    'showTooltips' => false,
]);


