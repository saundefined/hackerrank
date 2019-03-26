<?php
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

fscanf($_fp, "%[^\n]", $lambda);
fscanf($_fp, "%[^\n]", $k);

echo round((pow($lambda, $k) * pow(M_E, -1 * $lambda)) / factorial($k), 3);