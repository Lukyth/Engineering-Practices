<?php
require "captcha.php";
require "randomizer.php";
class CaptchaTest extends PHPUnit_Framework_TestCase {
    function testController () {
        $stubRandomizer = $this->getMock('Randomizer');
        $stubRandomizer->expects($this->any())
            ->method('pattern')
            ->will($this->returnValue(1));
        $stubRandomizer->expects($this->any())
            ->method('operator')
            ->will($this->returnValue(1));
        $stubRandomizer->expects($this->any())
            ->method('operand')
            ->will($this->returnValue(1));
        $this->assertEquals("1", $stubRandomizer->pattern());
        $this->assertEquals("1", $stubRandomizer->operator());
        $this->assertEquals("1", $stubRandomizer->operand());
    }

    function testCaptcha1111ShoudBeOnePlus1 () {
        $captcha = new Captcha (1, 1, 1, 1);
        $this->assertEquals("One + 1", $captcha->toString());
    }
    function testCaptcha1121ShoudBeOneMinus1 () {
        $captcha = new Captcha (1, 1, 2, 1);
        $this->assertEquals("One - 1", $captcha->toString());
    }
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
