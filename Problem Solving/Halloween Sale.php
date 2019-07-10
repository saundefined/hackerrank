<?php

/**
 * @title Halloween Sale
 * @link https://www.hackerrank.com/challenges/halloween-sale
 * @status solved
 */

// Complete the howManyGames function below.
function howManyGames($p, $d, $m, $s) {
    $games = 0;
    $money = $s;

    for ($i = $p; $i >= 0; $i -= $d) {
        if ($i >= $m && $money > 0) {
            $money -= $i;
            $games++;
        }
    }

    $games += floor($money / $m);

    return $games > 0 ? $games : 0;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $pdms_temp);
$pdms = explode(' ', $pdms_temp);

$p = intval($pdms[0]);

$d = intval($pdms[1]);

$m = intval($pdms[2]);

$s = intval($pdms[3]);

$answer = howManyGames($p, $d, $m, $s);

fwrite($fptr, $answer . "\n");

fclose($stdin);
fclose($fptr);
