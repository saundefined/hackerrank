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

fscanf($_fp, "%[^\n]", $ticketsLeft);
fscanf($_fp, "%[^\n]", $n);
fscanf($_fp, "%[^\n]", $mean);
fscanf($_fp, "%[^\n]", $std);

$samplesMean = $n * $mean;
$samplesStd = sqrt($n) * $std;

print(round(cumulative($samplesMean, $samplesStd, $ticketsLeft), 4));