<?php
	require 'functions/CategoryFunction.php';

	class CategoryFunctionTest extends \PHPUnit_Framework_TestCase {	

		function testInvalidName() {
			$row = [
				'name' => '',
			];
			$valid = testCategory($row);
			$this->assertFalse($valid);
		}

		function testValidCategory() {
			$row = [
				'name' => 'Beds',
			];
			$valid = testCategory($row);
			$this->assertTrue($valid);
		}
	}
?>