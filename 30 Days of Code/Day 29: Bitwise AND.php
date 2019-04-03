<?php

function bitwise($n, $k)
{
    $result = 0;
    for ($a = 1; $a <= $n; $a++) {
        for ($b = $a + 1; $b <= $n; $b++) {
            $current = $a & $b;
            if ($current > $result && $current < $k) {
                $result = $current;
            }
        }
    }
    return $result;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nk_temp);
    $nk = explode(' ', $nk_temp);
    $n = intval($nk[0]);
    $k = intval($nk[1]);

    print(bitwise($n, $k)) . PHP_EOL;
}

fclose($stdin);
