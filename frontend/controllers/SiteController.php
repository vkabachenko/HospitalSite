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
            'index' => [
                'class' => 'frontend\actions\ArticleAction',
            ],
            'history' => [
                'class' => 'frontend\actions\ArticleAction',
            ],
        ];
    }




}
