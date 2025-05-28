<?php

$currentTime = rand(1,23);


$mealTime = "";
$food = "";

if ($currentTime >= 5 && $currentTime < 9) {
    $mealTime = "breakfast";
    $food = "Bananas, Apples, and Oats";
} elseif ($currentTime >= 12 && $currentTime < 14) {
    $mealTime = "lunch";
    $food = "Fish, Chicken, and Vegetables";
} elseif ($currentTime >= 19 && $currentTime < 21) {
    $mealTime = "dinner";
    $food = "Steak, Carrots, and Broccoli";
} else {
    echo "Please do not feed the animals now ! ThankYou";
    exit;
}

echo "It's time for " . ucfirst($mealTime) . "!\n";
echo "Today's menu: $food";

?>