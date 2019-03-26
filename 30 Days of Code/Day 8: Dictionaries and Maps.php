<?php

$_fp = fopen("php://stdin", "r");
fscanf($_fp, "%[^\n]", $count);

$i = 0;
$users = [];
while (($line = fgets($_fp)) !== false) {
    if ($i < $count) {
        $data = explode(' ', $line);
        $users[trim($data[0])] = trim($data[1]);
    } else {
        print($users[trim($line)] ? trim($line) . '=' . $users[trim($line)] : 'Not found') . PHP_EOL;
    }
    $i++;
}
