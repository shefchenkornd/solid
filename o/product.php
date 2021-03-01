<?php

namespace Solid\O;

class Product
{
    /**
     * @var Logger
     */
    private $logger;

    /**
     * раньше здесь была привязка к конкретному классу Logger,
     * теперь мы привязываемся к интерфейсу LoggerInterface
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function setPrice($price)
    {
        try {
            // save price in db
        } catch (Exception $exception) {
            $this->logger->logError($exception->getMessage());
        }
    }
}