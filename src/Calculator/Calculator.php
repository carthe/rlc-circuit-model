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
        $sum = 0;
        foreach ($numbers as $n){
            if($n != 0)
                $n = 1/$n;
            else
                return 0;
            $sum += $n;
        }
        return pow($sum, -1);
    }
}


?>