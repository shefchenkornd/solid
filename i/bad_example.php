<?php

namespace Solid\I;

/**
 * SOLID
 * ISP - принцип разделения интерфейсов.
 * «Много специализированных интерфейсов лучше, чем один универсальный»
 * Соблюдение этого принципа необходимо для того,
 * чтобы классы-клиенты использующий/реализующий интерфейс знали только о тех методах, которые они используют,
 * что ведёт к уменьшению количества неиспользуемого кода.
 */

/**
 * Супер Интерфейс
 * НАРУШАЕТ принцип ISP!!!
 */
interface ISuperTransformer
{
    public function toCar();

    public function toPlane();

    public function toShip();
}


class ToCar implements ISuperTransformer
{
    /**
     * ТОЛЬКО ЭТОТ МЕТОД НУЖЕН ДЛЯ ЭТОГО КЛАССА!
     */
    public function toCar()
    {
        echo 'Transform to Car';
    }

    /**
     * Мы должны реализовать методы, которые нам не нужны,
     * поэтому делаем заглушки для этого метода.
     * Это ПЛОХО!!!
     */
    public function toPlane()
    {
        throw new \Exception('I can`t transform to Plane');
    }

    /**
     * Мы должны реализовать методы, которые нам не нужны,
     * поэтому делаем заглушки для этого метода.
     * Это ПЛОХО!!!
     */
    public function toShip()
    {
        throw new \Exception('I can`t transform to Ship');
    }
}