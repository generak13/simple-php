<?php

require 'vendor/autoload.php';

use App\Calculator;

$calc = new Calculator();

echo "2 + 3 = " . $calc->add(2, 3) . PHP_EOL;
echo "5 - 2 = " . $calc->subtract(5, 2) . PHP_EOL;
echo "4 * 3 = " . $calc->multiply(4, 3) . PHP_EOL;
echo "10 / 2 = " . $calc->divide(10, 2) . PHP_EOL;
