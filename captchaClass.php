<?php
class Captcha {
    private $pattern, $leftOperand, $operator, $rightOperand;
    function __construct ($pattern, $leftOperand, $operator, $rightOperand) {
        $this->pattern = $pattern;
        $this->leftOperand = $leftOperand;
        $this->operator = $operator;
        $this->rightOperand = $rightOperand;
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
    function toString() {
        if($this->leftIsStringRightIsInteger ($this->pattern) == 1) {
            $leftOperand = $this->createStringOperand($this->leftOperand);
            $operator = $this->createOperator($this->operator);
            $rightOperand = $this->rightOperand;
        }
        else {
            $leftOperand = $this->leftOperand;
            $operator = $this->createOperator($this->operator);
            $rightOperand = $this->createStringOperand($this->rightOperand);
        }
        return $leftOperand . " " . $operator . " " . $rightOperand ;
    }
}