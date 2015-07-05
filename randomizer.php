<?php
class Randomizer {
    function pattern () {
        return rand (1, 2);
    }
    function operator () {
        return rand (1, 3);
    }
    function operand () {
        return rand (1, 9);
    }
}