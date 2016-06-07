<?php

use teampat\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

	protected $calc;

	protected function setUp(){
		$this->calc = new Calculator;
	}

	public function testAddNumber(){
		$this->assertEquals(4,$this->calc->add(2,2));
	}

	public function testDiffNumber(){
		$this->assertEquals(0,$this->calc->diff(2,2));
	}

}
