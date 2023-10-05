<?php

// stari način određivanja konstante
define('PI1', 3.14);
//novi način
const PI = 3.14;
// ispisati konstantu
var_dump(PI);

$radius = 15;
$povrsina = PI * $radius * $radius;
echo $povrsina, "\n";

$A = 15;

echo $a, "\n";
echo $A, "\n";

$name = "Bruno";
$age = 28;
// string s dvostrukim navodnicima parsira posebne znakove
echo "Mi nombre es $name y yo tengo $age anos.\n";
// string s jednostrukim navodnicima ne parsira posebne znakove
// echo 'Mi nombre es $name y yo tengo $age anos.\n';

// boolean
$flag = true;
$anotherFlag = false;

$isOfAge = $age >= 18;

var_dump($isOfAge);

var_dump((bool) 0); // pretvara nulu u boolean, nula kao i prazan string ili prazan niz će biti false, 1 je true 

// null
$test;
var_dump($test);
var_dump(null === 0); // null nije isto što i nula