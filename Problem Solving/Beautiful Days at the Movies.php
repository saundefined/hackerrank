<?php

// Complete the beautifulDays function below.
function beautifulDays($i, $j, $k)
{
    $count = 0;
    for ($day = $i; $day <= $j; $day++) {
        $first = $day;
        $second = implode('', array_reverse(str_split($day)));

        if (is_integer(($first - $second) / $k)) {
            $count++;
        }
    }

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $ijk_temp);
$ijk = explode(' ', $ijk_temp);

$i = intval($ijk[0]);

$j = intval($ijk[1]);

$k = intval($ijk[2]);

$result = beautifulDays($i, $j, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
