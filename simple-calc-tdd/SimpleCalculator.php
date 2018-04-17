<?php
/**
 * Created by PhpStorm.
 * User: deridstijn
 * Date: 4/17/18
 * Time: 12:04 PM
 */

class SimpleCalculator
{
    public function sum($number1, $number2 = 0): float{
        return $number1 + $number2;
    }

    public function subtract($number1, $number2): float {
        return $number1 - $number2;
    }
    public function multiply($number1, $number2): float{
        return $number1 * $number2;
    }

    public function divideBy($number1, $number2): float{
        if ($number2 != 0 )
        {
            return $number1 / $number2;
        }
        else
        {
            return "cannot divide by 0!";
        }
    }
}