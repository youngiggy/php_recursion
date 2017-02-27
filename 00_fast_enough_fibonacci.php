<?php

include 'performance.php';

class fibonacci
{
    static public function get($n)
    {
        if ($n == 0) {
            return 0;
        }
        if ($n == 1 || $n == 2) {
            return 1;
        }
        $q = [1, 1];
        $idx = 2;
        while ($idx < $n) {
            $q[$idx] = bcadd($q[$idx - 2], $q[$idx - 1]);
            $idx++;
        }
        return $q[$n - 1];
    }
}

echo '12345 : ' . fibonacci::get(12345) . PHP_EOL;
//for ($i = 0; $i <= 500; $i++) {
//    echo $i . ' : ' . fibonacci::get($i) . PHP_EOL;
//}

var_dump(performance());
