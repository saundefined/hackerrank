<?php

/**
 * @title Day of the Programmer
 * @link https://www.hackerrank.com/challenges/day-of-the-programmer
 * @status solved
 */

// Complete the dayOfProgrammer function below.
function dayOfProgrammer($year) {
    $isJulian = $year >= 1700 && $year <= 1917;
    $isGregorian = $year >= 1919;

    if ($isJulian) {
        $isLeapYear = $year % 4 === 0;
    } else {
        $isLeapYear = $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
    }

    $date = $isLeapYear ? '12.09.' : '13.09.';

    if (!$isJulian && !$isGregorian) {
        $date = '26.09.';
    }

    return $date . $year;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);
