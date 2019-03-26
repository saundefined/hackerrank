<?php

// Complete the gemstones function below.
function gemstones($arr)
{
    $countOfStones = count($arr);
    $elements = [];

    foreach ($arr as $k => $stone) {
        foreach (str_split($stone) as $element) {
            if (isset($elements[$k][$element])) {
                $elements[$k][$element]++;
            } else {
                $elements[$k][$element] = 1;
            }
        }
    }

    $total = [];
    foreach ($elements as $element) {
        foreach ($element as $component => $count) {
            if (isset($total[$component])) {
                $total[$component]++;
            } else {
                $total[$component] = 1;
            }
        }
    }

    return count(array_filter($total, function ($item) use ($countOfStones) {
        return $item === $countOfStones;
    }));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$arr = [];

for ($i = 0; $i < $n; $i++) {
    $arr_item = '';
    fscanf($stdin, "%[^\n]", $arr_item);
    $arr[] = $arr_item;
}

$result = gemstones($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
