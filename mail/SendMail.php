<?php

namespace app\mail;


use app\interfaces\IFileManager;
use app\interfaces\IMessager;
use Yii;

class SendMail {

    private $messager;
    private $fileManager;

    public function __construct(IMessager $messager, IFileManager $fileManager)
    {
        $this->messager = $messager;
        $this->fileManager = $fileManager;
    }

    public function sendMail()
    {
        return Yii::$app->mailer->compose()
            ->setFrom('how.i.met.your.boobs@gmail.com')
            ->setTo($this->messager->getEmail())
            ->setSubject($this->messager->getSubject())
            ->setTextBody($this->messager->getMessageBody())
            ->attach($this->messager->getFile($this->fileManager))
            ->send();
    }
}