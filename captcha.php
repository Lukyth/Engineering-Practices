<?php
class Captcha {
    private $pattern, $leftOperand, $operator, $rightOperand;
    function __construct ($pattern, $leftOperand, $operator, $rightOperand) {
        $this->pattern = $pattern;
        $this->leftOperand = $leftOperand;
        $this->operator = $operator;
        $this->rightOperand = $rightOperand;
    }
    function toString() {
        if($this->pattern == 1) {
            $leftOperand = createStringOperand($this->leftOperand);
            $operator = createOperator($this->operator);
            $rightOperand = $this->rightOperand;
        }
        else {
            $leftOperand = $this->leftOperand;
            $operator = createOperator($this->operator);
            $rightOperand = createStringOperand($this->rightOperand);
        }
        return $leftOperand . " " . $operator . " " . $rightOperand ;
    }
}
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
    $captcha = new Captcha ($pattern, $leftOperand, $operator, $rightOperand);
    return $captcha->toString();
}