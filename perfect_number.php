<?php
/**
 * Created by PhpStorm.
 * User: emeka
 * Date: 10/13/18
 * Time: 6:54 AM
 */
/**
 * @param float $number
 * @return int
 */
function isPerfectNumber(float $number): int
{
    $sum = 0;
    $set = $number/2;
    for ($i = 1; $i <= $set; $i++){
        if ($number % $i == 0){
            $sum += $i;
        }
    }

    return (int)$sum == $number;
}

/** Test Cases */
echo isPerfectNumber(7)."\n";
echo isPerfectNumber(6)."\n";
echo isPerfectNumber(3)."\n";
echo isPerfectNumber(24)."\n";
echo isPerfectNumber(9)."\n";

//Time Complexity: O(n)