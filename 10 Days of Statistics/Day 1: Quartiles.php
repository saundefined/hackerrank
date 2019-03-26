<?php

$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $temp);
$count = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($_fp, "%[^\n]", $temp);
$numbers = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

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

$half = floor(count($numbers) / 2);

sort($numbers);
$firstHalf = array_chunk($numbers, $half);
$firstHalf = $firstHalf[0];

rsort($numbers);
$secondHalf = array_chunk($numbers, $half);
$secondHalf = $secondHalf[0];

print(median($firstHalf) . PHP_EOL);
print(median($numbers) . PHP_EOL);
print(median($secondHalf) . PHP_EOL);
