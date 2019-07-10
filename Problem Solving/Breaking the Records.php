<?php

/**
 * @title Breaking the Records
 * @link https://www.hackerrank.com/challenges/breaking-best-and-worst-records
 * @status solved
 */

// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $currentMaxScore = 0;
    $currentMinScore = 0;

    $totalMaxScores = 0;
    $totalMinScores = 0;

    foreach ($scores as $k => $score) {
        if ($k === 0) {
            $currentMaxScore = $score;
            $currentMinScore = $score;
        }

        if ($score > $currentMaxScore) {
            $currentMaxScore = $score;
            if ($k > 0) {
                $totalMaxScores++;
            }
        }

        if ($score < $currentMinScore) {
            $currentMinScore = $score;
            if ($k > 0) {
                $totalMinScores++;
            }
        }
    }

    return [$totalMaxScores, $totalMinScores];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
