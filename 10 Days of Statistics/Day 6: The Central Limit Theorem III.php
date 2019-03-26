<?php
$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $n);
fscanf($_fp, "%[^\n]", $mean);
fscanf($_fp, "%[^\n]", $std);
fscanf($_fp, "%[^\n]", $percent);
fscanf($_fp, "%[^\n]", $zScore);

$marginOfError = $zScore * $std / sqrt($n);

print(round($mean - $marginOfError, 2)) . PHP_EOL;
print(round($mean + $marginOfError, 2)) . PHP_EOL;
