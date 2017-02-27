<?php

include 'performance.php';

function fibonacci($n)
{
    if ($n == 1 || $n == 2) {
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

echo fibonacci(34) . PHP_EOL;

var_dump(performance());
