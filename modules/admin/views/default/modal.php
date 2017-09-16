<?php
/**
 * @var $message string
 */
use yii\bootstrap\Modal;

$title = \yii\helpers\StringHelper::truncate($message, 10);

Modal::begin([
    'size' => Modal::SIZE_DEFAULT,
    'header' => "<h4>{$title}</h4>",
    'options' => [
        'id' => 'download-file',
    ],
]);

echo $message;

Modal::end();