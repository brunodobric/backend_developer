<?php

$a = 2;
$b = 2.3;
$c = 'String';
$d = True;
$d1 = false;

const PI = 3.14;
const g = 9.81;

echo "$a \n$b \n$c \n$d \n";
var_dump(PI);
var_dump(g);
var_export($d1, true);

$var1 = "gato";
$var2 = &$var1;

echo "$var2 \n";
