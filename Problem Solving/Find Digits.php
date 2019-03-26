<?php

// Complete the findDigits function below.
function findDigits($n)
{
    $count = 0;

    foreach (str_split($n) as $number) {
        if ($number > 0 && $n % $number === 0) {
            $count++;
        }
    }

    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = findDigits($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);