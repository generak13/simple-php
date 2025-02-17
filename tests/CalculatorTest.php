<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
  public function testAddition()
  {
    $calc = new Calculator();
    $this->assertEquals(5, $calc->add(2, 3));
  }

  public function testSubtraction()
  {
    $calc = new Calculator();
    $this->assertEquals(1, $calc->subtract(3, 2));
  }

  public function testMultiplication()
  {
    $calc = new Calculator();
    $this->assertEquals(6, $calc->multiply(2, 3));
  }

  public function testDivision()
  {
    $calc = new Calculator();
    $this->assertEquals(2, $calc->divide(6, 3));
  }

  public function testDivisionByZero()
  {
    $this->expectException(\InvalidArgumentException::class);
    $calc = new Calculator();
    $calc->divide(6, 0);
  }
}

