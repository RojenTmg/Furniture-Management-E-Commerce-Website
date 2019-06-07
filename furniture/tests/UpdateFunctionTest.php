<?php
	require 'functions/UpdateFunction.php';

	class UpdateFuntionTest extends \PHPUnit_Framework_TestCase {	

		function testInvalidTitle() {
			$row = [
				'title' => '',
				'description' => 'Hello World!!!',
				'photo' => 'photo1.jpg'
			];
			$valid = testUpdate($row);
			$this->assertFalse($valid);
		}

		function testInvalidDescription() {
			$row = [
				'title' => 'On Sale',
				'description' => '',
				'photo' => 'photo1.jpg'
			];
			$valid = testUpdate($row);
			$this->assertFalse($valid);
		}

		function testInvalidPhoto() {
			$row = [
			'title' => 'On Sale',
				'description' => '',
				'photo' => ''
			];
			$valid = testUpdate($row);
			$this->assertFalse($valid);
		}
		
		function testValidUpdate() {
			$row = [
				'title' => 'On Sale',
				'description' => 'Hello World!!!',
				'photo' => 'photo1.jpg'
			];
			$valid = testUpdate($row);
			$this->assertTrue($valid);
		}
	}
?>