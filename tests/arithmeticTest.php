<?php
use PHPUnit\Framework\TestCase; // unit test 
use PHP\Arithmetic; // want to test

class ArithmeticTest extends TestCase {
    private $arithmetic;

    protected function setUp(): void {
        $this->arithmetic = new Arithmetic();
    }

    public function testAdd() {
        $this->assertEquals(30, $this->arithmetic->add(10, 20));
        $this->assertEquals(0, $this->arithmetic->add(-10, 10));
    }

    public function testSubtract() {
        $this->assertEquals(10, $this->arithmetic->minus(20, 10));
        $this->assertEquals(-20, $this->arithmetic->minus(-10, 10));
    }
}
?>