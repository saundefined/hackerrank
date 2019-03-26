<?php

// Complete the migratoryBirds function below.
function migratoryBirds($arr)
{
    $birds = [];
    foreach ($arr as $bird) {
        if (isset($birds[$bird])) {
            $birds[$bird]++;
        } else {
            $birds[$bird] = 1;
        }
    }

    ksort($birds);

    return array_search(max($birds), $birds, false);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
