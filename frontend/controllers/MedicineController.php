<?php
namespace frontend\controllers;


use Yii;
use yii\web\Controller;

/**
 * Medicine controller
 */
class MedicineController extends Controller
{


    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => Yii::$app->params['articleAction'],
            'drugs' => Yii::$app->params['articleAction'],
            'accessibility' => Yii::$app->params['articleAction'],
            'conditions' => Yii::$app->params['articleAction'],

        ];
    }




}
