<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Jobs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JobsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Вакансии';
?>
<div class="jobs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'speciality',
                'value' => function ($model) {
                        return Jobs::$specialities[$model->speciality];
                    },
                'filter' => Html::activeDropDownList(
                        $searchModel,
                        'speciality',
                        Jobs::$specialities,
                        [
                            'prompt' => 'Поиск'
                        ]
                    ),
            ],
            'position',
            'comment:raw',
            'quantity',
            'salary',
            'requirement',
            'education',

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{update} {delete}',],
        ],
    ]); ?>

</div>
