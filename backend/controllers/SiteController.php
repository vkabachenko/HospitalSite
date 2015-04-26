<?php
namespace backend\controllers;


use common\models\Articles;
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

    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionStructure()
    {
        return $this->render('structure');
    }

    public function actionArticle($id,$title)
    {
        /** @var  $model Articles */
        $model = Articles::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->goHome();
        }

        return $this->render('article',['model' => $model,'title' => $title,]);
    }




}
