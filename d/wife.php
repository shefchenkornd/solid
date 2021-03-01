<?php

namespace Solid\D;


class Wife implements IFoodProvider
{
    public function getFood()
    {
        $food = 'dish';
        return $food;
    }
}