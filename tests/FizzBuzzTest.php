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

}