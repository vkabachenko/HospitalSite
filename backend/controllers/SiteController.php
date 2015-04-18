<?php
namespace backend\controllers;


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
        ];
    }

    public function actionStructure()
    {
        return $this->render('structure');
    }




}
