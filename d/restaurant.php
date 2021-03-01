<?php

namespace Solid\D;

class Restaurant implements IFoodProvider
{
    public function getFood()
    {
        return "some dish";
    }
}