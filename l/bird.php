<?php

/**
 * Классы:
 *  * Bird - базовый класс  | соблюдает принцип Барбары Лисков
 *  * Duck - дочерний класс | соблюдает принцип Барбары Лисков
 *  * Penguin - дочерний класс | НАРУШАЕТ принцип Барбары Лисков
 */



/**
 * реально используемый в коде класс
 */
class Bird
{
    public function fly()
    {
        $flySpeed = 10;
        return $flySpeed;
    }
}


/**
 * Дочерний класс от Bird.
 * Не изменяет поведение, а дополняет.
 * Не нарушает принцип LSP
 */
class Duck extends Bird
{
    public function fly()
    {
        $flySpeed = 8;
        return $flySpeed;
    }

    public function swim()
    {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}


/**
 * Дочерний класс от Bird.
 * ИЗМЕНЯЕТ поведение!!!
 * НАРУШАЕТ принцип LSP!!
 */
class Penguin extends Bird
{
    public function fly()
    {
        return 'I can`t fly';
    }

    public function swim()
    {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}
