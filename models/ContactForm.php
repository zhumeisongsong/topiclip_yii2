<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
//    public $company;
    public $name;
    public $email;
//    public $phone;
//    public $question;

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @return bool whether the model passes validation
     */
    public function contact($data)
    {
        //TODO:please set your email address
        $setAddress = 'yuantianbingxue@sina.com';

        Yii::$app->mailer->compose()
            ->setTo($setAddress)
            ->setFrom([$setAddress => 'TOPICLIP'])
            ->setSubject('TOPICLIPお問い合わせ')// email title
            ->setHtmlBody(
                '御社名：' . ($this->name) .
                '<br>ご担当者様名:' . ($this->name) .
                '<br>メールアドレス:' . ($this->name) .
                '<br>電話番号:<br>' . ($this->name) .
                'ご質問:<br>' . ($this->name))
            ->send();
        return true;
    }
}
