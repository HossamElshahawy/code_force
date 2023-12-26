<?php

$input = trim(fgets(STDIN));
list($X, $Y) = explode(' ', $input);

$summation = (int) $X + $Y;
$multiplication = (int) $X * $Y;
$subtraction = (int) $X - $Y;

echo "$X + $Y = $summation\n";
echo "$X * $Y = $multiplication\n";
echo "$X - $Y = $subtraction\n";
