<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 */
class NumberForm extends Model
{
    public $number;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['number'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    // public function contact($email)
    // {
    //     if ($this->validate()) {
    //         Yii::$app->mailer->compose()
    //             ->setTo($email)
    //             ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
    //             ->setReplyTo([$this->email => $this->name])
    //             ->setSubject($this->subject)
    //             ->setTextBody($this->body)
    //             ->send();

    //         return true;
    //     }
    //     return false;
    // }
}
