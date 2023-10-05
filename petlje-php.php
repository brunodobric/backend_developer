<?php

// uvjetovane kontrolne strukture - if

$age = $argv[1];

if ($age >= 18) {
    echo "Punoljetni ste!\n";
} else {
    echo "Maloljetni ste!\n";
}

// switch

$i = 22;

switch ($i) {
    case 0:
        echo "i equals 0\n";
        break;
    case 1:
        echo "i equals 1\n";
        break;
    case 2:
        echo "i equals 2\n";
        break;
    default:
        echo "i is not equal to 0, 1 or 2\n";
}

// match - kada ispuni prvi uvjet ne ide dalje

