<?php

// PHP kontrolne strukture - vježba 1

$a = 50;
$b = 45;
$c = 15;

if (($a < $b && $c > $b) || ($a > $b && $c < $b)) {
    echo "Vrijednost b je između vrijednosti a i c.\n";
    } else {
        echo "Vrijednost b nije između vrijednosti a i c.\n";
    }

// vježba 2

$day = date("N");

switch ($day) {
    case 1:
        echo "Ponedjeljak \n";
        break;
    case 2:
        echo "Utorak \n";
        break;
    case 3:
        echo "Srijeda \n";
        break;
    case 4:
        echo "Četvrtak \n";
        break;
    case 5:
        echo "Petak \n";
        break;
    case 6:
        echo "Subota \n";
        break;
    case 7:
        echo "Nedjelja \n";
        break;
}