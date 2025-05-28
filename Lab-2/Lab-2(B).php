<?php

$number = rand(1,999); 

// Determine the magic number using control structures
if ($number % 3 == 0 && $number % 5 == 0) {
    echo "FizzBuzz";
} elseif ($number % 3 == 0) {
    echo "Fizz";
} elseif ($number % 5 == 0) {
    echo "Buzz";
} else {
    echo $number;
}
?>
