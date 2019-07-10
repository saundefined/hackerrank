<?php

/**
 * @title Grading Students
 * @link https://www.hackerrank.com/challenges/grading
 * @status solved
 */

/*
 * Complete the gradingStudents function below.
 */
function gradingStudents($grades) {
    $final = [];
    foreach ($grades as $grade) {
        if ($grade % 5 === 0) {
            $final[] = $grade;
        } else {
            $nextGrade = ceil($grade / 5) * 5;
            if (($nextGrade - $grade) >= 3 || $grade < 38) {
                $final[] = $grade;
            } else {
                $final[] = $nextGrade;
            }
        }
    }

    return $final;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

$grades = [];

for ($grades_itr = 0; $grades_itr < $n; $grades_itr++) {
    fscanf($__fp, "%d\n", $grades_item);
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($__fp);
fclose($fptr);
