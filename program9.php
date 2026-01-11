<?php

function generatePrimes($maxNumber) {
    echo "Prime numbers up to $maxNumber: ";

    for ($num = 2; $num <= $maxNumber; $num++) {
        $isPrime = true;

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo $num . " ";
        }
    }
}

function fibonacciSeries($terms) {
    echo "<br>Fibonacci Series ($terms terms): ";

    $first = 0;
    $second = 1;

    for ($i = 0; $i < $terms; $i++) {
        echo $first . " ";
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

generatePrimes(50);
fibonacciSeries(10);

?>
