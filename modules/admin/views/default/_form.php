<?php
/**
 * @var $this \yii\web\View
 * @var $model \app\models\ClientData
 */

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>
<div class="col-md-6">
    <?= $form->field($model, 'dateStart')->widget(DatePicker::classname(), [
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' =>[
            'maxDate' => '0d',
            'changeMonth' => true,
            'onClose' => new \yii\web\JsExpression('function( selectedDate ) {
                    $( "#'.Html::getInputId($model, 'dateEnd').'" ).datepicker( "option", "minDate", selectedDate ); 
                }'),
        ],

    ]); ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'dateEnd')->widget(DatePicker::classname(), [
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'maxDate' => '0d'
        ]
    ]);; ?>
</div>

<div class="col-md-12">
    <?= $form->field($model, 'message')->textarea(); ?>
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']); ?>
</div>

<?php
ActiveForm::end();


