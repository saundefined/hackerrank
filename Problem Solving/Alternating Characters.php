<?php

// Complete the alternatingCharacters function below.
function alternatingCharacters($s)
{
    $arrayOfLetters = str_split($s);
    $countOfRemoving = 0;

    for ($i = 1; $i < count($arrayOfLetters); $i++) {
        if ($arrayOfLetters[$i - 1] === $arrayOfLetters[$i]) {
            $countOfRemoving++;
        }
    }

    return $countOfRemoving;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = alternatingCharacters($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);