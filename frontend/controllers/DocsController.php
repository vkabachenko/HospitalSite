<?php

namespace frontend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use common\models\Documents;
use common\models\LeftMenu;

class DocsController  extends Controller {

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => Yii::$app->params['articleAction'],
        ];
    }


    public function actionNormative() {

        $title = LeftMenu::getCurrentMenu($this->id,$this->action->id)->title;

        $docsQuery = Documents::find()->orderBy('order');
        $provider = new ActiveDataProvider([
            'query' => $docsQuery,
        ]);

        return $this->render('list',[
            'provider'=>$provider,
            'title' => $title,
        ]);

    }


}

















