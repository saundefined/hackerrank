<?php

function median($numbers)
{
    sort($numbers);

    if (count($numbers) % 2 === 0) {
        $center = count($numbers) / 2;
        return ((int)$numbers[$center - 1] + (int)$numbers[$center]) / 2;
    } else {
        $center = floor(count($numbers) / 2);
        return $numbers[$center];
    }
}

$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $temp);
$i = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($_fp, "%[^\n]", $temp);
$x = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($_fp, "%[^\n]", $temp);
$f = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$numbers = [];
foreach ($x as $k => $number) {
    for ($i = 1; $i <= $f[$k]; $i++) {
        $numbers[] = $number;
    }
}

sort($numbers);

$divider = ceil(count($numbers) / 2);
$numbers = array_chunk($numbers, $divider);

print(number_format(median($numbers[1]) - median($numbers[0]), 1, '.', ''));