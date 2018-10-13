<?php
/**
 * Created by PhpStorm.
 * User: emeka
 * Date: 10/13/18
 * Time: 9:06 AM
 */

/**
 * @param int $number
 * @return int
 */
function isPrimeNumber(int $number): int
{
    $numSet = sqrt($number);
    if($number == 1){
        return 0;
    }

    for($i = 2; $i <= $numSet; $i++)
    {
        if ($number % $i == 0){
            return 0;
        }
    }
    return 1;
}

/** Test Cases */
echo isPrimeNumber(20)."\n";
echo isPrimeNumber(1)."\n";
echo isPrimeNumber(3)."\n";
echo isPrimeNumber(7)."\n";
echo isPrimeNumber(9)."\n";
echo isPrimeNumber(24)."\n";
echo isPrimeNumber(13)."\n";

//Time Complexity: O(sqrt(n))