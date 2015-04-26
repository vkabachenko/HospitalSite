<?php

namespace frontend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use common\models\Jobs;


class JobsController extends Controller
{
    public function actionIndex() {

        return $this->JobsAction(1);
    }

    public function actionNurses() {

        return $this->JobsAction(2);
    }

    public function actionParamedics() {

        return $this->JobsAction(3);
    }

    public function actionOthers() {

        return $this->JobsAction(4);
    }


    /**
     * renders listView by speciality
     * @param $speciality integer
     */
    private function JobsAction($speciality) {

        $title = Jobs::$specialities[$speciality];

        $jobsQuery = Jobs::find()->where(['speciality' => $speciality])-> orderBy('updated_at DESC');
        $provider = new ActiveDataProvider([
            'query' => $jobsQuery,
            'pagination' => [
                'pageSize' => 10,
            ]
        ]);

        return $this->render('list',[
            'provider'=>$provider,
            'title' => $title,
        ]);

    }


}