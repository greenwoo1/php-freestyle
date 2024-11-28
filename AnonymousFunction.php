<?php
$sun = function ($a, $b) {
    return $a + $b;
};

echo $sun(2, 3);


$number = [1, 2, 3, 4,5];
$squared = arrey_map(function ($number) {
    return $number * $number;
}, $number);

print_r($squared);