<?php
require_once 'captcha.php';

class CaptchaController {
    private $randomizer;
    function __construct ($randomizer) {
        $this->randomizer = $randomizer;
    }
    function buildCaptcha () {
        $pattern = $this->randomizer->pattern();
        $leftOperand = $this->randomizer->operand();
        $operator = $this->randomizer->operator();
        $rightOperand = $this->randomizer->operand();
        return new Captcha($pattern, $leftOperand, $operator, $rightOperand);
    }
}