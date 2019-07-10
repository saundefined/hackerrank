<?php

/**
 * @title Time Conversion
 * @link https://www.hackerrank.com/challenges/time-conversion
 * @status solved
 */

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    preg_match('/([0-9]+):([0-9]+):([0-9]+)(AM|PM)/', $s, $times);
    $hours = $times[1];
    $minutes = $times[2];
    $seconds = $times[3];
    $isPM = $times[4] === 'PM';

    $hours = ((!$isPM && $hours >= 12) || ($isPM && $hours < 12)) ? $hours + 12 : $hours;
    if ($hours === 24) {
        $hours = '00';
    }

    return $hours . ':' . $minutes . ':' . $seconds;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
