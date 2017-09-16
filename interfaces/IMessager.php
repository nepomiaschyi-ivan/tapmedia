<?php

namespace app\interfaces;

interface IMessager
{
    public function getEmail();
    public function getSubject();
    public function getMessageBody();
    public function getFile(IFileManager $fileManager);
}