<?php
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {

    public function setUp()
    {
        $this->object = new FizzBuzz;
    }

    public function testResultShouldBe1WhenEnter1()
    {
        $this->assertEquals(1, $this->object->say(1));
    }

    public function testResultShouldBe2WhenEnter2()
    {
        $this->assertEquals(2, $this->object->say(2));
    }

    public function testResultShouldBeFizzWhenEnter3()
    {
        $this->assertEquals("Fizz", $this->object->say(3));
    }

    public function testResultShouldBe4WhenEnter4()
    {
        $this->assertEquals(4, $this->object->say(4));
    }

    public function testResultShouldBeBuzzWhenEnter5()
    {
        $this->assertEquals("Buzz", $this->object->say(5));
    }

    public function testResultShouldBeFizzWhenEnter6()
    {
        $this->assertEquals("Fizz", $this->object->say(6));
    }

    public function testResultShouldBe7WhenEnter7()
    {
        $this->assertEquals(7, $this->object->say(7));
    }

    public function testResultShouldBe8WhenEnter8()
    {
        $this->assertEquals(8, $this->object->say(8));
    }

    public function testResultShouldBeFizzWhenEnter9()
    {
        $this->assertEquals("Fizz", $this->object->say(9));
    }

    public function testResultShouldBe10WhenEnter10()
    {
        $this->assertEquals("Buzz", $this->object->say(10));
    }

    public function testResultShouldBe11WhenEnter11()
    {
        $this->assertEquals(11, $this->object->say(11));
    }

    public function testResultShouldBeFizzWhenEnter12()
    {
        $this->assertEquals("Fizz", $this->object->say(12));
    }

    public function testResultShouldBe13WhenEnter13()
    {
        $this->assertEquals(13, $this->object->say(13));
    }

    public function testResultShouldBe14WhenEnter14()
    {
        $this->assertEquals(14, $this->object->say(14));
    }

    public function testResultShouldBeFizzBuzzWhenEnter15()
    {
        $this->assertEquals("FizzBuzz", $this->object->say(15));
    }

    public function testResultShouldBe16WhenEnter16()
    {
        $this->assertEquals(16, $this->object->say(16));
    }

    public function testResultShouldBe17WhenEnter17()
    {
        $this->assertEquals(17, $this->object->say(17));
    }

    public function testResultShouldBeFizzWhenEnter18()
    {
        $this->assertEquals("Fizz", $this->object->say(18));
    }

    public function testResultShouldBe19WhenEnter19()
    {
        $this->assertEquals(19, $this->object->say(19));
    }

    public function testResultShouldBeBuzzWhenEnter20()
    {
        $this->assertEquals("Buzz", $this->object->say(20));
    }

    public function testResultShouldBeFizzWhenEnter21()
    {
        $this->assertEquals("Fizz", $this->object->say(21));
    }

    public function testResultShouldBe22WhenEnter22()
    {
        $this->assertEquals(22, $this->object->say(22));
    }

    public function testResultShouldBe23WhenEnter23()
    {
        $this->assertEquals(23, $this->object->say(23));
    }

    public function testResultShouldBeFizzWhenEnter24()
    {
        $this->assertEquals("Fizz", $this->object->say(24));
    }

    public function testResultShouldBeBuzzWhenEnter25()
    {
        $this->assertEquals("Buzz", $this->object->say(25));
    }

    public function testResultShouldBe26WhenEnter26()
    {
        $this->assertEquals(26, $this->object->say(26));
    }

    public function testResultShouldBeFizzWhenEnter27()
    {
        $this->assertEquals("Fizz", $this->object->say(27));
    }


}