<?php
require "captcha.php";
class CaptchaTest extends PHPUnit_Framework_TestCase {
    function testWhenInputIs1111ResultShoudBeOnePlus1() {
        $this->assertEquals("One + 1", captcha(1, 1, 1, 1));
    }
    function testWhenInputIs1121ResultShoudBeOneMinus1 () {
        $this->assertEquals("One - 1", captcha(1, 1, 2, 1));
    }
    function testWhenInputIs1931ResultShoudBeNineMultiply1 () {
        $this->assertEquals("Nine * 1", captcha(1, 9, 3, 1));
    }
    function testWhenInputIs2111ResultShoudBe1PlusOne () {
        $this->assertEquals("1 + One", captcha(2, 1, 1, 1));
    }
    function testWhenInputIs2121ResultShoudBe1MinusOne () {
        $this->assertEquals("1 - One", captcha(2, 1, 2, 1));
    }
    function testWhenInputIs2131ResultShoudBe1MultiplyOne () {
        $this->assertEquals("1 * One", captcha(2, 1, 3, 1));
    }
}
