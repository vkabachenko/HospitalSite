<?php
namespace frontend\controllers;


use Yii;
use yii\web\Controller;
use frontend\models\ContactForm;

/**
 * Contacts controller
 */
class ContactsController extends Controller
{


    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => Yii::$app->params['articleAction'],
            'others' => Yii::$app->params['articleAction'],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
            ],
        ];
    }

    public function actionFeedback()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->send(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('success','Сообщение успешно отправлено');

            return $this->goHome();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }

    }

}