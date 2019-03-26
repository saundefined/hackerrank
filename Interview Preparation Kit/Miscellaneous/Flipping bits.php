<?php

// Complete the flippingBits function below.
function flippingBits($n)
{
    return $n ^ 0xFFFFFFFF;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%ld\n", $n);

    $result = flippingBits($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
