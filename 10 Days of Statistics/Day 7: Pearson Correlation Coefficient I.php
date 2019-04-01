<?php

function getMean($data)
{
    return array_sum($data) / count($data);
}

function standardDeviation($data)
{
    $mean = getMean($data);
    $sum = 0;
    foreach ($data as $x) {
        $sum += pow($x - $mean, 2);
    }
    return sqrt($sum / count($data));
}

function pearson($xs, $ys)
{
    $xMean = getMean($xs);
    $yMean = getMean($ys);
    $n = count($xs);

    $numerator = 0;
    for ($i = 0; $i < $n; $i++) {
        $numerator += ($xs[$i] - $xMean) * ($ys[$i] - $yMean);
    }
    return $numerator / ($n * standardDeviation($xs) * standardDeviation($ys));
}

$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $count);
fscanf($_fp, "%[^\n]", $line2);
$xs = array_map('floatval', explode(' ', $line2));
$xs = array_slice($xs, 0, $count);

fscanf($_fp, "%[^\n]", $line3);
$ys = array_map('floatval', explode(' ', $line3));
$ys = array_slice($ys, 0, $count);

echo round(pearson($xs, $ys), 3);