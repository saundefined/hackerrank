<?php

function isWeird($n)
{
    if ($n % 2 === 1) {
        return 'Weird';
    }

    if (2 <= $n && $n <= 5) {
        return 'Not Weird';
    }

    if (6 <= $n && $n <= 20) {
        return 'Weird';
    }

    return 'Not Weird';
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

echo isWeird($N);

fclose($stdin);