<?php

namespace Recruitment\Calculator;

class Calculator
{
    function strait(...$numbers){
        $sum = 0;
        foreach ($numbers as $n){
            $sum += $n;
        }
        return $sum;
    }

    function reciprocal(...$numbers){
        //ask about reciprocal return value
    }
}


?>