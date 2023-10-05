<?php

// 5.10.2023. PHP kontrolne strukture - petlje

$a = 5;

while ($a <= 10) {
    echo "While: Hello World\n";
    $a++;
}

do {
    echo "Do while: Hello World\n";
    $a++;
} while ($a <= 10);

do {
    echo "Do while s brake: Hello World\n";

    if ($a>10) {
        break;
    }
} while (true);

for ($j = 0; $j < 10; $j++) {
    echo "For petlja: Hello World\n";
}

$people = ['Marko', 'Ivona', 'Iva', 'Luka', 'Sara', 'Paula'];

for ($p=0; $p < count($people); $p++) {
    if (strlen($people[$p]) < 4) {
        continue;
    }

    echo "Polaznik: {$people[$p]}\n";
}

foreach ($people as $value) {
    echo "Polaznik: {$value}\n";
}

foreach ($people as $key => $value) {
    echo "Polaznik: $key {$value}\n";
}