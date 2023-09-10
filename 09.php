<?php
/*
               * EraaSoft Learn by practice

               * Check if this word (by) exists in the string or not.
*/
            echo "<pre>";


            $word = "EraaSoft Learn by practice";

            $x = explode(" " , $word );

            // print_r($x);

            if (in_array("by", $x)) {

                echo "Found";

            } else {

                echo "SOMETHING IS WRONG";

            };