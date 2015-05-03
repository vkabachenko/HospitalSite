<?php
   use kartik\tree\TreeView;
   use common\models\Structure;
   use frontend\assets\FontAwesomeAsset;
/* @var $this yii\web\View */

$this->title = 'Структура';

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



