<?php

include 'performance.php';

function fibonacci($iterationsLeft, $prePrevious = 0, $previous = 1)
{
    //echo "$iterationsLeft, $prePrevious, $previous" . PHP_EOL;
    if ($iterationsLeft == 0) {
        return $previous;
    }
    return fibonacci($iterationsLeft - 1, $previous, bcadd($prePrevious, $previous));
}

echo fibonacci(250) . PHP_EOL;

var_dump(performance());
