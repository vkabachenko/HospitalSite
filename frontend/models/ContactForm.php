<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $tel;
    public $subject;
    public $body;
    public $verifyCode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha','captchaAction' => 'contacts/captcha'],
            // telephone is optional
            ['tel','safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Фамилия, имя, отчество',
            'email' => 'E-mail',
            'tel' => 'Телефон',
            'subject' => 'Тема сообщения',


            'body' => 'Сообщение',
            'verifyCode' => 'Введите символы с картинки',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function send($email)
    {
        $body = $this->body ."\r\n".'Автор: '.$this->name;
        $body .= $this->tel ? "\r\n".'Телефон: '.$this->tel : '';

        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($body)
            ->send();
    }
}