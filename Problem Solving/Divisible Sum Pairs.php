<?php

// Complete the divisibleSumPairs function below.
function divisibleSumPairs($n, $k, $ar)
{
    $total = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($p = 0; $p < $n; $p++) {
            if ((($ar[$i] + $ar[$p]) % $k === 0) && $i !== $p) {
                $total++;
            }
        }
    }

    return $total / 2;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = divisibleSumPairs($n, $k, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
