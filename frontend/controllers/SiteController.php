<?php
namespace frontend\controllers;


use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'index' => Yii::$app->params['articleAction'],
            'history' => Yii::$app->params['articleAction'],
        ];
    }

    public function actionStructure()
    {
        return $this->render('structure');
    }




}
