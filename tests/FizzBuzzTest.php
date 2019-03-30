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
        $this->assertEquals(10, $this->object->say(10));
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

}