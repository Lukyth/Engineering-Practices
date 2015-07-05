<?php
function captcha($pattern, $leftOperand, $operator, $rightOperand) {
    $numbers = array(
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four",
        5 => "Five",
        6 => "Six",
        7 => "Seven",
        8 => "Eight",
        9 => "Nine",
    );

    $f = array(
        1 => "+",
        2 => "-",
        3 => "*",
    );
    if(($pattern < 1 or $pattern > 2) or ($operator < 1 or $operator > 3)){
        return "You shouldn't do this to me :(" . "\n";
    }

        if($pattern==1)
        {
            if($operator == 1){
                $operator = "+";
            }

            if($operator == 3){
                $operator = "*";
            }

            if($operator == 2)
            {
                $operator = "-";
            }

            $leftOperand = $numbers[$leftOperand];
        }
        else if($pattern==2){
            if($operator == 1){
                $operator = "+";
            }

            if($operator == 3){
                $operator = "*";
            }

            if($operator == 2)
            {
                $operator = "-";
            }
            $rightOperand = $numbers[$rightOperand];
        }
        return $leftOperand . " " . $operator . " " . $rightOperand ;
}