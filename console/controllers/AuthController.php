<?php

namespace console\controllers;

use yii\console\Controller;
use backend\models\User;


class AuthController extends Controller{

    /*
     * Change pass
     */
    public function actionPassword()
    {
        $userName = $this->prompt('Имя пользователя',['required' => true,]);
        $oldPass = $this->prompt('Старый пароль',['required' => true,]);
        $newPass = $this->prompt('Новый пароль',['required' => true,]);

        /* @var $user User */
        if (!($user = User::findByUsername($userName))) {
            echo "Пользователь не найден\n";
            return 1;
        }

        if (!($user->validatePassword($oldPass))) {
            echo "Неверный старый пароль\n";
            return 1;
        }

        $user->setPassword($newPass);
        if ($user->save(false)) {
            echo "Пароль изменен\n";
            return 0;
        }
        else {
            echo "Ошибка при записи в БД\n";
            return 1;
        }
    }

} 