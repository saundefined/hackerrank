<?php

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($_fp, "%[^\n]", $temp);
$count = $temp[0];

fscanf($_fp, "%[^\n]", $temp);
$numbers = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));
sort($numbers);

$center = (count($numbers) / 2) - 1;
$values = array_count_values($numbers);
$max = max($values);
$values = array_keys(array_filter($values, function ($number) use ($max) {
    return $number === $max;
}));

print(round(array_sum($numbers) / count($numbers), 1) . PHP_EOL);
print(round(($numbers[$center] + $numbers[$center + 1]) / 2, 1) . PHP_EOL);
print(min($values) . PHP_EOL);