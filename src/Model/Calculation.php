<?php

namespace Model;

/**
 * [Calculation description]
 * 
 */
class Calculation
{
    public static function calculation($number)
    {
        $summation = 0;

        for ($result = 0; $result < $number; $result++) {
            if ($result % 2 == 1) {
                $summation = $summation + $result;
            }
        }

        return $summation;
    }
}
