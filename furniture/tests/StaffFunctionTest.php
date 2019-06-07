<?php
	require 'functions/StaffFunction.php';

	class StaffFuntionTest extends \PHPUnit_Framework_TestCase {	

		function testInvalidUsername() {
			$row = [
				'username' => '',
				'password' => 'staff123'
			];
			$valid = testStaff($row);
			$this->assertFalse($valid);
		}

		function testInvalidPassword() {
			$row = [
				'username' => 'staff',
				'password' => ''
			];
			$valid = testStaff($row);
			$this->assertFalse($valid);
		}

		function testValidStaff() {
			$row = [
				'username' => 'staff',
				'password' => 'staff123'
			];
			$valid = testStaff($row);
			$this->assertTrue($valid);
		}
	}
?>