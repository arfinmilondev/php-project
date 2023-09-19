<?php
// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.



//create afibonacci function to calculate the number
function fibo($n)
{
    if ($n <= 1) {
        return $n;
    } else {
        return (fibo($n - 1) + fibo($n - 2));
    }
}

//loop for printing the first 10 fibonacci number
for ($i = 0; $i < 10; $i++) {
    $fibonacciNumber = fibo($i);

    // condition for checking if it is greater then 100
    if ($fibonacciNumber > 100) {
        break;
    }
    echo $fibonacciNumber . PHP_EOL;
}
