<?php

$R = trim(fgets(STDIN));
if ($R <= 100 && $R >= 1){
    $area = pi() * pow($R,2);
}

print $area;


