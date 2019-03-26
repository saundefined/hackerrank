<?php
$handle = fopen("php://stdin", "r");

function fibonacci($n)
{
    if (in_array($n, [0, 1], false)) {
        return $n;
    }

    return fibonacci($n - 1) + fibonacci($n - 2);
}

$n = fgets($handle);

printf("%d", fibonacci($n));

fclose($handle);