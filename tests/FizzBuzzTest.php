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

}