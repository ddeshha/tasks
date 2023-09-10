<?php

// Write a PHP script that takes the age in years and prints the age in days.


// function ageInDays($age) {
//     $days = $age * 365;
//     return $days;
// }

// $age = 25;
// $days = ageInDays($age);
// echo "Your Age Is : " . $days;


// another idea .



function ageInDays($age) {

    $days = $age * 365;

    return $days;
};

$age = 23;

$name = [
        'mustafa' => '22' ,
        'muhamed' => '33',
        'khalil'  => '14'
        ];

$days = ageInDays($age);

if ($name) {

    foreach ($name as $names => $age) {

echo "$names Your  age $age with days : " . $days . $age*356 . "<br>" . "<br>";

    };
};


