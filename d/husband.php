<?php

namespace Solid\D;

/**
 * SOLID
 * D - принцип инверсии зависимостей.
 * dependency inversion principle, DIP
 *
 * Принцип декларирует, что модули верхних уровней не должны зависеть от модулей нижних уровней, а оба типа модулей должны зависеть от абстракций;
 * сами абстракции не должны зависеть от деталей, а вот детали должны зависеть от абстракций.
 */

class lowRankingMale
{
    public function eat()
    {
        $wife = new Wife();
        $food = $wife->getFood();
        // ... eat
    }
}

class averageRankingMake
{
    private $wife;

    public function __construct(Wife $wife)
    {
        $this->wife = $wife;
    }

    public function eat()
    {
        $food = $this->wife->getFood();
        // ... eat
    }
}

class highRankingMale
{
    private $foodProvider;

    /**
     * Здесь идёт зависимость от интерфейса!!!
     * сюда мы можем передать классы, готовящие еду,
     * такие как:
     *   - Wife
     *   - Restaurant
     */
    public function __construct(IFoodProvider $foodProvider)
    {
        $this->foodProvider = $foodProvider;
    }

    public function getFood()
    {
        $food = $this->foodProvider->getFood();
        // ... eat
    }
}