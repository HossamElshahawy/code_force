<?php
// Read the input line with space-separated values
$input = trim(fgets(STDIN));
list($intVar, $longLongVar, $charVar, $floatVar, $doubleVar) = explode(' ', $input);

// Print each element on a new line
echo $intVar . PHP_EOL;
echo $longLongVar . PHP_EOL;
echo $charVar . PHP_EOL;
echo $floatVar . PHP_EOL;
echo $doubleVar . PHP_EOL;
?>
