<?php

namespace app\modules\admin\models;

use app\models\ClientData;
use Yii;
use yii\base\Model;

class SendMessage extends Model
{
    public $name;
    public $email;
    public $message;
    public $dateStart;
    public $dateEnd;

    protected $messages = [];

    public function rules()
    {
        return [
            [['name', 'email', 'dateStart', 'dateEnd'], 'string', 'max' => 255],
            [['message'], 'string'],
            [['message', 'dateStart', 'dateEnd'], 'required'],
        ];
    }

    /**
     * @param $users ClientData[]
     * @return bool
     */
    public function sendMessage($users) {

        $messages = [];

        foreach ($users as $user) {
            $message = preg_replace('/({NAME}|{Name})|{name}/', $user->name, $this->message);

            $messages[] = \Yii::$app->mailer->compose()
                ->setFrom('how.i.met.your.boobs@gmail.com')
                ->setTo($user->email)
                ->setTextBody($message);
        }
        return Yii::$app->mailer->sendMultiple($messages);
    }

}