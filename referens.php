<?php

//$a = 10;
//$b = 5;
//
//function calc(&$a, &$b, $operation) : int
//{
//    switch ($operation) {
//        case 'add':
//            $a = $a + $b;
//            break;
//        case 'subtract':
//            $a = $a - $b;
//            break;
//        case 'multiply':
//            $a = $a * $b;
//            break;
//        case 'divide':
//            if ($b != 0) {
//                $a = $a / $b;
//            } else {
//                echo "Division by zero is not allowed.";
//                return 0;
//            }
//            break;
//        default:
//            echo "Invalid operation.";
//            return 0;
//    }
//    return $a;
//}
//
//echo calc($a, $b, 'add');

//$array = [1, 2, 3];
//
//function doubleArray(&$array) : array
//{
//    foreach ($array as &$value) {
//        $value *= 2;
//}
//    return $array;
//}
//
//print_r(doubleArray($array));

function removeEvenNumbers(&$array): int
{
    $count = 0;
    foreach ($array as $key => $value) { // Додаємо $key для роботи з ключами
        if ($value % 2 == 0) {
            $count++;
            unset($array[$key]); // Видаляємо за ключем, а не за значенням
        }
    }
    return $count;
}

$array = [1, 2, 3, 4, 5, 6];
$result = removeEvenNumbers($array);
echo "Кількість видалених парних чисел: $result\n";
print_r($array);