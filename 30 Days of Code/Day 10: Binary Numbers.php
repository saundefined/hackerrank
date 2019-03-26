<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$newNumber = base_convert($n, 10, 2);

$count = 0;
$max = 0;
for ($i = 0; $i < strlen($newNumber); $i++) {
    if ((int)$newNumber[$i] === 1) {
        $count++;
    } else {
        if ($count > $max) {
            $max = $count;
        }
        $count = 0;
    }
}

print($max > $count ? $max : $count);


fclose($stdin);