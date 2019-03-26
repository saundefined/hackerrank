<?php

function cumulative($mean, $std, $x)
{
    $parameter = ($x - $mean) / ($std * sqrt(2));
    return (0.5) * (1 + erf($parameter));
}

function erf($z)
{
    $t = 1.0 / (1.0 + 0.5 * abs($z));

    $ans = 1 - $t * exp(-$z * $z - 1.26551223 +
            $t * (1.00002368 +
                $t * (0.37409196 +
                    $t * (0.09678418 +
                        $t * (-0.18628806 +
                            $t * (0.27886807 +
                                $t * (-1.13520398 +
                                    $t * (1.48851587 +
                                        $t * (-0.82215223 +
                                            $t * (0.17087277))))))))));

    return $z >= 0 ? $ans : -$ans;
}

$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%[^\n]", $line1);
$line1 = explode(' ', $line1);

$mean = $line1[0];
$std = $line1[1];

fscanf($_fp, "%[^\n]", $line2);
fscanf($_fp, "%[^\n]", $line3);
$line3 = explode(' ', $line3);

$a = $line2;
$b = $line3[0];
$c = $line3[1];

echo round(cumulative($mean, $std, $a), 3) . PHP_EOL;
echo round(cumulative($mean, $std, $c) - cumulative($mean, $std, $b), 3) . PHP_EOL;
