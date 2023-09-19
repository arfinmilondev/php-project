<?php

// Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.


function fibonacciCalculation($n)
{
    if ($n <= 1) {
        return $n;
    } else {
        return (fibonacciCalculation($n - 1) + fibonacciCalculation($n - 2));
    }
}

function printFibonacci($count)
{

    for ($i = 0; $i < $count; $i++) {
        // Calculate the current Fibonacci number
        $fibonacciNumber = fibonacciCalculation($i);

        // Print the current Fibonacci number
        echo $fibonacciNumber . ", ";
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
