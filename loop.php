<?php

/*
Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20.

The function should take the arguments like start as 1, end as 20 and step as 2. 

You must call the function to print.
*/

for ($i = 1; $i <= 20; $i++) {

    if ($i % 2 == 0) {
        echo "$i\n";
    }
}

// Also do the same using while loop 
// Also do the same using do-while loop
$a = 1;
while ($a <= 20) {
    if ($a % 2 == 0) {
        echo "$a\n";
    }
    $a++;
}

// Also do the same using do-while loop
$x = 1;
do {
    if ($x % 2 == 0) {
        echo "$x\n";
    }
    $x++;
} while ($x <= 20);
