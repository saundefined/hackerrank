<?php

// Complete the timeInWords function below.
function timeInWords($h, $m)
{
    $hours = [1 => 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve'];
    $minutes = [
        'o\' clock',
        'one minute',
        'two minutes',
        'three minutes',
        'four minutes',
        'five minutes',
        'six minutes',
        'seven minutes',
        'eight minutes',
        'nine minutes',
        'ten minutes',
        'eleven minutes',
        'twelve minutes',
        'thirteen minutes',
        'fourteen minutes',
        'quarter',
        'sixteen minutes',
        'seventeen minutes',
        'eighteen minutes',
        'nineteen minutes',
        'twenty minutes',
        'twenty one minutes',
        'twenty two minutes',
        'twenty three minutes',
        'twenty four minutes',
        'twenty five minutes',
        'twenty six minutes',
        'twenty seven minutes',
        'twenty eight minutes',
        'twenty nine minutes',
        'half',
    ];

    if ($m === 0) {
        return $hours[$h] . ' ' . $minutes[$m];
    } elseif ($m > 30) {
        $m = 60 - $m;

        return $minutes[$m] . ' to ' . $hours[$h + 1];
    } else {
        return $minutes[$m] . ' past ' . $hours[$h];
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $h);

fscanf($stdin, "%d\n", $m);

$result = timeInWords($h, $m);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);