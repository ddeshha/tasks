<?php

                /**
               * EraaSoft Learn by practice
               * Get the word (EraaSoft) from the string and print it.
                */
echo "<pre>";

$word = "EraaSoft Learn by practice";


$i = explode(" " , $word);


// print_r($word);


echo "<br>";
echo "<br>";
echo "<br>";

if (in_array("EraaSoft" , $i)) {

    echo "EraaSoft";

};