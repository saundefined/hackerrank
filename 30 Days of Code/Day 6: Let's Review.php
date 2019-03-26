<?php
$_fp = fopen("php://stdin", "r");
fscanf($_fp, "%[^\n]", $count);

for ($k = 0; $k < $count; $k++) {
    fscanf($_fp, "%[^\n]", $data);
    $even = [];
    $odd = [];

    $length = strlen($data);
    for ($i = 0; $i < $length; $i++) {
        if ($i % 2 === 0) {
            $odd[] = $data[$i];
        } else {
            $even[] = $data[$i];
        }
    }

    echo implode('', $odd) . ' ' . implode('', $even) . PHP_EOL;
}