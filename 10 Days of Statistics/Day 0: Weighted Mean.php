<?php

$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $temp);
$count = $temp[0];

fscanf($_fp, "%[^\n]", $temp);
$numbers = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($_fp, "%[^\n]", $temp);
$values = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$sum = 0;
foreach ($numbers as $k => $number) {
    $sum += $number * $values[$k];
}

print(number_format($sum / array_sum($values), 1, '.', ''));
