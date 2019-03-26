<?php

// Complete the solve function below.
function solve($meal_cost, $tip_percent, $tax_percent)
{
    $tip = $meal_cost * $tip_percent / 100;
    $tax = $meal_cost * $tax_percent / 100;

    return round($meal_cost + $tip + $tax);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%lf\n", $meal_cost);

fscanf($stdin, "%d\n", $tip_percent);

fscanf($stdin, "%d\n", $tax_percent);

echo solve($meal_cost, $tip_percent, $tax_percent);

fclose($stdin);
