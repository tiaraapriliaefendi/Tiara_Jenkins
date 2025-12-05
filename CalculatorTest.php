<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        $this->assertEquals(5, 2 + 3);
    }
}
