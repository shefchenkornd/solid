<?php

namespace Solid\O;

# логирование мб. как в файл, Redis, db, внешнюю систему и т.д

class DbLogger implements LoggerInterface
{
    public function logError($message)
    {
        // save error message
        $this->saveToDb($message);
    }

    private function saveToDb()
    {
        // save to DB
    }
}



class FileLogger implements LoggerInterface
{
    public function logError($message)
    {
        // save error message
        $this->saveToFile($message);
    }

    private function saveToFile()
    {
        // save to DB
    }
}