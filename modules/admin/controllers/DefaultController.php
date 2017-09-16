<?php

namespace app\modules\admin\controllers;

use app\models\ClientData;
use app\modules\admin\exceptions\NotFoundUsersException;
use app\modules\admin\models\LoginForm;
use app\modules\admin\models\SendMessage;
use app\modules\admin\Module;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class DefaultController extends Controller {
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $model = new SendMessage();

        if (($model->load(Yii::$app->request->post()) && $model->validate())) {
            $users = $this->getData($model);

            if (!empty($users)) {
                if ($model->sendMessage($users)) {
                    Yii::$app->session->setFlash('message', 'Thank you for contacting us. We will respond to you as soon as possible.');
                } else {
                    Yii::$app->session->setFlash('message', 'There was an error sending your message.');
                }
                return $this->refresh();
            } else {
                throw new NotFoundUsersException('not found users');
            }
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * @param $model SendMessage
     * @return ClientData[]
     */
    private function getData($model) {
        $dateStart = Yii::$app->formatter->asTimestamp("{$model->dateStart} 00:00" );
        $dateEnd = Yii::$app->formatter->asTimestamp("{$model->dateEnd} 23:59");

        $module = Module::getInstance();
        $users = $module->clientDataClass::find()->select('name, email')->between($dateStart, $dateEnd)->distinct('email')->all();

        return $users;
    }


    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}