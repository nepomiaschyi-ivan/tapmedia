<?php
/**
 * @var $this \yii\web\View
 * @var $model \app\models\ClientData
 */

use yii\bootstrap\Modal;

$this->title = "Admin Panel";
?>

<div class="container admin-container">
    <div class="row">
        <div class="col-md-2 text-center">
            <?= Yii::$app->user->identity->username ?>
        </div>
        <div class="col-md-10">
            <?= \yii\helpers\Html::a('Logout', ['logout'], [
                'class' => 'btn btn-danger',
                'data' => [
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </div>

    <div class="row admin-form-wrapper">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

<?php if (Yii::$app->session->hasFlash('message')){
    Modal::begin([
        'size' => Modal::SIZE_DEFAULT,
        'header' => '<h4>Send Messages</h4>',
        'clientOptions' => ['show' => true],
        'options' => [
            'id' => 'message',
        ],
    ]);

    echo Yii::$app->session->getFlash('message');

    Modal::end();
} ?>