<?php

namespace Solid\O;

/**
 * SOLID
 * OCP - “Software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification.”
 * Общая идея этого принципа прекрасна. Robert C. Martin говорит вам написать свой код, чтобы вы могли добавлять новые функции, не изменяя существующий код. Это предотвращает ситуации, в которых изменение одного из ваших классов также требует адаптации всех зависимых классов
 */

# Задача: логировать не в файл, а в БД

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);