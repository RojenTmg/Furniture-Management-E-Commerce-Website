<?php
	require 'functions/EnquiryFunction.php';

	class EnquiryFuntionTest extends \PHPUnit_Framework_TestCase {	

		function testInvalidName() {
			$row = [
				'name' => '',
				'email' => 'rojen.tmg123@gmail.com',
				'phone' => '9088383431',
				'description' => 'Hello World!!!'
			];
			$valid = testEnquiry($row);
			$this->assertFalse($valid);
		}

		function testInvalidEmail() {
			$row = [
				'name' => 'Rojen Moktan',
				'email' => '',
				'phone' => '9088383431',
				'description' => 'Hello World!!!'
			];
			$valid = testEnquiry($row);
			$this->assertFalse($valid);
		}

		function testInvalidPhone() {
			$row = [
				'name' => 'Rojen Moktan',
				'email' => 'rojen.tmg123@gmail.com',
				'phone' => '',
				'description' => 'Hello World!!!'
			];
			$valid = testEnquiry($row);
			$this->assertFalse($valid);
		}


		function testInvalidDescription() {
			$row = [
				'name' => 'Rojen Moktan',
				'email' => 'rojen.tmg123@gmail.com',
				'phone' => '9808383431',
				'description' => ''
			];
			$valid = testEnquiry($row);
			$this->assertFalse($valid);
		}

		function testValidEnquiry() {
			$row = [
				'name' => 'Rojen Moktan',
				'email' => 'rojen.tmg123@gmail.com',
				'phone' => '9808383431',
				'description' => 'Hello World!!!'
			];
			$valid = testEnquiry($row);
			$this->assertTrue($valid);
		}
	}
?>