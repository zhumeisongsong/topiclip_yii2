<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name = 'TOPICLIPお問い合わせ';
    public $email = 'yuantianbingxue@sina.com';
    public $subject = 'ddd';
    public $body = 'eee';

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @return bool whether the model passes validation
     */
    public function contact()
    {
        Yii::$app->mailer->compose()
            ->setTo('yuantianbingxue@sina.com')
            ->setFrom(['yuantianbingxue@sina.com' => 'TOPICLIP'])
            ->setSubject('TOPICLIPお問い合わせ')
            ->setTextBody('御社名：ご担当者様名:メールアドレス:電話番号:ご質問:')
            ->send();
        return true;
    }
}
