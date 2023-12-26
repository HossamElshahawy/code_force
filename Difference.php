<?php

$input = trim(fgets(STDIN));
list($A,$B,$C,$D) = explode(' ', $input);

$X = ($A*$B)-($C*$D);
echo "Difference = ". $X;
