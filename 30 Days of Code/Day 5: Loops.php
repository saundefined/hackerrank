<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

for ($i = 1; $i <= 10; $i++) {
    echo $n . ' x ' . $i . ' = ' . $n * $i . PHP_EOL;
}

fclose($stdin);