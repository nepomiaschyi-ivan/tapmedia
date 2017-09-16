<?php

namespace app\models;

use app\interfaces\IFileManager;
use Yii;

class FileManager implements IFileManager
{
    private $storage = 'storage';

    public function getFiles()
    {
        // TODO: Implement getFile() method.
    }

    public function setFile($file)
    {
        // TODO: Implement setFile() method.
    }

    public function getFileByName($name)
    {
        return Yii::getAlias("@app/storage/{$name}");
    }
}