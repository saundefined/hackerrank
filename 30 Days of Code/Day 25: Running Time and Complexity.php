<?php
$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $count);

for ($i = 0; $i < $count; $i++) {
    fscanf($_fp, "%[^\n]", $x);

    $isPrime = true;
    if ($x < 2 || ($x > 2 && ($x & 1) === 0)) {
        $isPrime = false;
    } else {
        for ($j = 2; $j <= sqrt($x); $j++) {
            if ($x % $j === 0) {
                $isPrime = false;
                break;
            }
        }
    }

    print($isPrime ? 'Prime' : 'Not prime') . PHP_EOL;
}