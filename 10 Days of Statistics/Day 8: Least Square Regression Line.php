<?php

function pearson($xs, $ys)
{
    $xMean = getMean($xs);
    $yMean = getMean($xs);
    $n = count($xs);

    $numerator = 0;
    for ($i = 0; $i < $n; $i++) {
        $numerator += ($xs[$i] - $xMean) * ($ys[$i] - $yMean);
    }
    return $numerator / ($n * standardDeviation($xs) * standardDeviation($ys));
}

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

    $variance = $sum / count($data);
    return sqrt($variance);
}

$x = [];
$y = [];
$_fp = fopen("php://stdin", "r");
while (($line = fgets($_fp)) !== false) {
    $numbers = explode(' ', $line);
    $x[] = (int)$numbers[0];
    $y[] = (int)$numbers[1];
}

$studentScore = 80;

$b = pearson($x, $y) * (standardDeviation($y) / standardDeviation($x));
$a = getMean($y) - $b * getMean($x);

$result = $a + $b * $studentScore;
print(round($result, 3));