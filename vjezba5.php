<?php

// nizovi
$primeNumbers = [1, 2, 3, 4, 5];

var_dump(isset($primeNumbers[2]));
echo "Treći element: ", $primeNumbers[2], "\n";
var_dump($primeNumbers[2]);

array_push($primeNumbers, 6);
// ili $primeNumbers[] = 6;

echo "Broj elemenata: ", count($primeNumbers), "\n";
print_r($primeNumbers);

rsort($primeNumbers);

var_dump($primeNumbers);

// višedimenzionalni nizovi

$users = [
    'user1'=> [
        'ime' => 'Ivan',
        'prezime' => 'Ivić',
        'godine' => '20',
        'spol' => 'M'
    ],
    'user2'=> [
        'ime' => 'Ivana',
        'prezime' => 'Ivanić',
        'godine' => '25',
        'spol' => 'Ž'
    ]
    ];

var_dump($users);
unset($users['user1']['spol'], $users['user2']['spol']);
var_dump($users);

$users[] = [
    'user3' => [
        'ime' => 'Marko',
        'prezime' => 'Marić',
        'godine' => '50'
    ]
];

var_dump($users);