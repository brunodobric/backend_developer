<?php

$a = 10;
$b = 20;

$c = 'Buenas';
$d = ' tardes';

$plus = $a + $b;
$minus = $a - $b;
$puta = $a * $b;
$dijeljeno = $a / $b;
$modul = $a % $b;

echo $plus, "\n", $minus, "\n", $puta, "\n", $dijeljeno, "\n", $modul,  "\n";

$f = $c . $d;
echo $f, "\n";

// kombinirani operator dodjele
echo $a += $b, "\n";

// operator usporedbe
var_dump($a > $b);

//operator inkrementa
$a = 10;
$a++;
echo $a, "\n";

//operator dekrementa
$b = 20;
$b--;
echo $b, "\n";
