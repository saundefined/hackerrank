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
$count = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($_fp, "%[^\n]", $temp);
$numbers = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$mean = array_sum($numbers) / count($numbers);

$result = [];
foreach ($numbers as $number) {
    $result[] = abs($number - $mean) * abs($number - $mean);
}

echo number_format(sqrt(array_sum($result) / count($numbers)), 1, '.', '');
