<?php

// Complete the countSwaps function below.
function countSwaps($a)
{
    $numberOfSwaps = 0;
    $n = count($a);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($a[$j + 1] < $a[$j]) {
                $a = swap($a, $j, $j + 1);
                $numberOfSwaps++;
            }
        }
    }

    print('Array is sorted in ' . $numberOfSwaps . ' swaps.') . PHP_EOL;
    print('First Element: ' . current($a)) . PHP_EOL;
    print('Last Element: ' . end($a)) . PHP_EOL;
}

function swap($a, $left, $right)
{
    $old = $a[$right];
    $a[$right] = $a[$left];
    $a[$left] = $old;
    return $a;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

countSwaps($a);

fclose($stdin);