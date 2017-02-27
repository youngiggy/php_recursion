<?php

define('START_TIME', microtime(true));
function performance()
{
    return implode(',', [
        ' 처리시간(ms): ' . (microtime(true) - START_TIME),
        ' 메모리(MB) : ' . memory_get_usage() / 1000000,
        ' CPU(%): ' . sys_getloadavg()[0],
    ]);
}
