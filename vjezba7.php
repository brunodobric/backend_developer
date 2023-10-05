<?php

// PHP petlje - vježba 1

$a = 0;

while ($a < 10) {
    echo $a + 1, "\n";
    $a++;
}

for ($b=1; $b < 100; $b++) {
    if ($b % 2 === 0) {
        echo $b, "\n";
    }
}

// PHP petlje - vježba 2

$names = ['Iva', 'Sara', 'Leon', 'Luka', 'Marko'];

foreach ($names as $key => $value) {
    echo "Polaznik: $key {$value}\n";
}