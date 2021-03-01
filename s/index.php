<?php
/**
 * SOLID
 * s - принцип единственной обязанности (ответственности)
 * Single responsibility principle (SRP)
 */

# Задача: класс Product имел только одну ответственность, а обязанность за логирование вынести в другой класс

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);