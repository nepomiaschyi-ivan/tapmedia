<?php

namespace app\interfaces;

interface IFileManager
{
    public function getFiles();
    public function getFileByName($name);
    public function setFile($file);
}