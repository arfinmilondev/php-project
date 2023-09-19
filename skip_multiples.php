<?php

// Task 2: Skip Multiples of 5
// Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
// loop encounters a multiple of 5, it should skip that number using the continue statement and
// continue to the next iteration.



for ($n = 1; $n <= 50; $n++) {

    //loop encounters a multiple of 5
    if ($n % 5 == 0) {
        //skip that number using the continue statement
        continue;
    }
    //continue to the next iteration
    echo "$n\n";
}


