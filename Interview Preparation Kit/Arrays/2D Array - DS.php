<?php

$stdin = fopen("php://stdin", "r");

$arr = [];
for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $items = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
    foreach ($items as $k => $item) {
        $arr[$i][$k] = $item;
    }
}

$sums = [];
for ($i = 0; $i < 4; $i++) {
    for ($x = 0; $x < 4; $x++) {
        $top = $arr[$i][$x] + $arr[$i][$x + 1] + $arr[$i][$x + 2];
        $middle = $arr[$i + 1][$x + 1];
        $bottom = $arr[$i + 2][$x] + $arr[$i + 2][$x + 1] + $arr[$i + 2][$x + 2];

        $sum = $top + $middle + $bottom;
        $sums[] = $sum;
    }
}

print(max($sums));

fclose($stdin);
