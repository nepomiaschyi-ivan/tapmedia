<?php
/**
 * @var $model \app\models\ClientData
 */

$form = \yii\widgets\ActiveForm::begin() ?>
<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'email')->textInput() ?>
<?= \yii\helpers\Html::submitButton('Download', ['class' => 'btn btn-primary']) ?>
<?php \yii\widgets\ActiveForm::end() ?>