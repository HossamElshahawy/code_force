<?php
$input = trim(fgets(STDIN));
list($N,$M) = explode(' ',$input);
$sN = str_split($N);
$sM = str_split($M);
$lN = end($sN);
$lM = end($sM);

echo $lN + $lM;