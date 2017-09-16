<?php

namespace app\controllers;

use app\mail\SendMail;
use app\models\ClientData;
use app\models\FileManager;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new ClientData();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->sendMail($model);

            return $this->refresh();
        }

        return $this->render('index', [
            'model' => $model
        ]);
    }

    /**
     * Displays banner page.
     *
     * @return string
     */
    public function actionBanner()
    {
        return $this->render('banner');
    }


    /**
     * @param $model ClientData
     * @return $this
     */
    private function sendMail($model) {
        $mailer = new SendMail($model, new FileManager());

        if ($mailer->sendMail()) {
            Yii::$app->session->setFlash('message', 'Thank you for contacting us. We will respond to you as soon as possible.');
        } else {
            Yii::$app->session->setFlash('message', 'There was an error sending your message.');
        }

        return $this;
    }

}
