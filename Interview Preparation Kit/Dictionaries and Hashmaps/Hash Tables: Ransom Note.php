<?php

// Complete the checkMagazine function below.
function checkMagazine($magazine, $note)
{
    foreach ($magazine as $i => $string) {
        if (in_array($string, $note, false)) {
            $k = array_search($string, $note, false);
            unset($note[$k]);
        }
    }

    echo empty($note) ? 'Yes' : 'No';
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($stdin, "%[^\n]", $magazine_temp);

$magazine = preg_split('/ /', $magazine_temp, -1, PREG_SPLIT_NO_EMPTY);

fscanf($stdin, "%[^\n]", $note_temp);

$note = preg_split('/ /', $note_temp, -1, PREG_SPLIT_NO_EMPTY);

checkMagazine($magazine, $note);

fclose($stdin);