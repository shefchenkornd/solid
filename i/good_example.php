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
 * Специализированный интерфейс
 * Поддерживает принцип ISP!!!
 */
interface ICarTransformer
{
    public function toCar();
}


/**
 * Специализированный интерфейс
 * Поддерживает принцип ISP!!!
 */
interface IPlaneTransformer
{
    public function toPlane();
}


/**
 * Специализированный интерфейс
 * Поддерживает принцип ISP!!!
 */
interface IShipTransformer
{
    public function toShip();
}



class SuperTransformer implements ICarTransformer, IPlaneTransformer, IShipTransformer
{
    public function toCar()
    {
        echo 'Transform to Car';
    }

    public function toPlane()
    {
        echo 'Transform to Plane';
    }

    public function toShip()
    {
        echo 'Transform to Ship';
    }
}