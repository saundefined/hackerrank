<?php

// Complete the countingValleys function below.
function countingValleys($n, $s)
{
    $total = 0;
    $level = 0;
    $isValley = false;

    for ($i = 0; $i < $n; $i++) {
        if ($s[$i] === 'U') {
            $level++;
        } else {
            $level--;
        }

        if ($level < 0) {
            if (!$isValley) {
                $total++;
            }
            $isValley = true;
        } else {
            $isValley = false;
        }
    }

    return $total;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = countingValleys($n, $s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
