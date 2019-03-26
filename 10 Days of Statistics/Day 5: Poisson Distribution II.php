<?php

$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $temp);
$temp = explode(' ', $temp);

$A = $temp[0];
$B = $temp[1];

$dailyCostA = 160 + 40 * ($A + ($A * $A));
$dailyCostB = 128 + 40 * ($B + ($B * $B));

echo round($dailyCostA, 3) . PHP_EOL;
echo round($dailyCostB, 3);
