<?php

namespace Solid\S;

class Product
{
    /**
     * @var Logger
     */
    private $logger;

    public function __construct(Logger $logger)
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