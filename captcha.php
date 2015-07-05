<?php
function createOperator ($operator) {
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
    return $operator;
}
function leftIsStringRightIsInteger ($pattern) {
    return $pattern == 1;
}
function leftIsIntegerRightIsString($pattern) {
    return $pattern == 2;
}
function createStringOperand ($operand) {
    $stringOperand = array(
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
    return $stringOperand[$operand];
}
function captcha($pattern, $leftOperand, $operator, $rightOperand) {
    if(($pattern < 1 or $pattern > 2) or ($operator < 1 or $operator > 3)){
        return "You shouldn't do this to me :(" . "\n";
    }
        if(leftIsStringRightIsInteger($pattern))
        {
            $leftOperand = createStringOperand($leftOperand);
            $operator = createOperator($operator);
            $rightOperand = $rightOperand;
        }
        else if(leftIsIntegerRightIsString($pattern)){
            $leftOperand = $leftOperand;
            $operator = createOperator($operator);
            $rightOperand = createStringOperand($rightOperand);
        }
        return $leftOperand . " " . $operator . " " . $rightOperand ;
}