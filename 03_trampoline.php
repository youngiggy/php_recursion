<?php

include 'performance.php';

function trampoline($function)
{
    $result = function () use ($function) {
        return $function();
    };
    while (is_callable($result)) {
        $result = $result();
    }
    return $result;
}
function fibonacci($n)
{
    return trampoline(
        function () use ($n) {
            return fibonacciInternal($n, 0, 1);
        }
    );
}
function fibonacciInternal($iterationsLeft, $prePrevious = 0, $previous = 1)
{
    if ($iterationsLeft == 0) {
        return $prePrevious;
    }
    return function () use ($iterationsLeft, $prePrevious, $previous) {
        return fibonacciInternal($iterationsLeft - 1, $previous, bcadd($prePrevious, $previous));
    };
}
echo fibonacci(12345) . PHP_EOL;

var_dump(performance());
