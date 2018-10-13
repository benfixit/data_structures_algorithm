<?php
/**
 * Created by PhpStorm.
 * User: emeka
 * Date: 10/13/18
 * Time: 2:25 PM
 */
/**
 * @param int $number
 * @return string
 */
function isEvenOrOdd(int $number): string
{
    if($number % 2 == 0){
        return "Even";
    }
    return "Odd";
}

/**Test Cases**/
print isEvenOrOdd(4)."\n";
print isEvenOrOdd(56)."\n";
print isEvenOrOdd(47)."\n";
print isEvenOrOdd(435)."\n";
