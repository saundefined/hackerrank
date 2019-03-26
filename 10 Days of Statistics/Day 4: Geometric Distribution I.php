<?php

function geometric($n, $p)
{
    return pow(1 - $p, $n - 1) * $p;
}

$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $line1);
fscanf($_fp, "%[^\n]", $n);

$numbers = explode(' ', $line1);
$numerator = $numbers[0];
$denominator = $numbers[1];

$p = $numerator / $denominator;
print(round(geometric($n, $p), 3));