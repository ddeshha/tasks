<?php

//  Compare the full_string and this string (EraaSoft).

$string_one = "Eraa";
$string_two = "Soft";

$full_string = $string_one . $string_two;

$result = strcmp($full_string, "ErraSoft");

if ($result == 0) {
    echo "The strings match.";
} else if ($result < 0) {
    echo "The first string is less than the second string.";
} else {
    echo "The first string is greater than the second string.";
}

