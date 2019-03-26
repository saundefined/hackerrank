<?php

function binomial($n, $x, $p)
{
    if ($p < 0 || $p > 1 || $n < 0 || $x < 0 || $x > $n) {
        return null;
    }
    return combinations($n, $x) * pow($p, $x) * pow(1 - $p, $n - $x);
}

function combinations($n, $x)
{
    if ($n < 0 || $x < 0 || $x > $n) {
        return null;
    }
    return factorial($n) / (factorial($x) * factorial($n - $x));
}

function factorial($n)
{
    if ($n < 0) {
        return null;
    }
    $result = 1;
    while ($n > 0) {
        $result *= $n--;
    }
    return $result;
}

$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $line1);
$data = explode(' ', $line1);

$ratio = $data[0];
$p = $ratio / ($data[1] + $ratio);
$n = 6;

$result = 0;
for ($x = 3; $x <= $n; $x++) {
    $result += binomial($n, $x, $p);
}

echo round($result, 3);
