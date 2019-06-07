<?php
	require 'functions/FurnitureFunction.php';

	class FurnitureFuntionTest extends \PHPUnit_Framework_TestCase {	

		function testInvalidName() {
			$row = [
				'name' => '',
				'description' => 'Its really Good!',
				'price' => '999',
				'categoryId' => '1',
				'img1' => 'sofa1.png',
				'img2' => 'sofa2.png',
				'img3' => 'sofa3.png',
				'img4' => 'sofa4.png',
				'state' => 'new'
			];
			$valid = testFurniture($row);
			$this->assertFalse($valid);
		}

		function testInvalidDescription() {
			$row = [
				'name' => 'Corner Sofa',
				'description' => '',
				'price' => '999',
				'categoryId' => '1',
				'img1' => 'sofa1.png',
				'img2' => 'sofa2.png',
				'img3' => 'sofa3.png',
				'img4' => 'sofa4.png',
				'state' => 'new'
			];
			$valid = testFurniture($row);
			$this->assertFalse($valid);
		}

		function testInvalidPrice() {
			$row = [
				'name' => 'Corner Sofa',
				'description' => 'Its really Good!',
				'price' => '',
				'categoryId' => '1',
				'img1' => 'sofa1.png',
				'img2' => 'sofa2.png',
				'img3' => 'sofa3.png',
				'img4' => 'sofa4.png',
				'state' => 'new'
			];
			$valid = testFurniture($row);
			$this->assertFalse($valid);
		}

		function testInvalidCategoryId() {
			$row = [
				'name' => 'Corner Sofa',
				'description' => 'Its really Good!',
				'price' => '999',
				'categoryId' => '',
				'img1' => 'sofa1.png',
				'img2' => 'sofa2.png',
				'img3' => 'sofa3.png',
				'img4' => 'sofa4.png',
				'state' => 'new'
			];
			$valid = testFurniture($row);
			$this->assertFalse($valid);
		}

		function testInvalidImage1() {
			$row = [
				'name' => 'Corner Sofa',
				'description' => 'Its really Good!',
				'price' => '999',
				'categoryId' => '1',
				'img1' => '',
				'img2' => 'sofa2.png',
				'img3' => 'sofa3.png',
				'img4' => 'sofa4.png',
				'state' => 'new'
			];
			$valid = testFurniture($row);
			$this->assertFalse($valid);
		}

		function testInvalidImage2() {
			$row = [
				'name' => 'Corner Sofa',
				'description' => 'Its really Good!',
				'price' => '999',
				'categoryId' => '1',
				'img1' => 'sofa1.png',
				'img2' => '',
				'img3' => 'sofa3.png',
				'img4' => 'sofa4.png',
				'state' => 'new'
			];
			$valid = testFurniture($row);
			$this->assertFalse($valid);
		}

		function testInvalidImage3() {
			$row = [
				'name' => 'Corner Sofa',
				'description' => 'Its really Good!',
				'price' => '999',
				'categoryId' => '1',
				'img1' => 'sofa1.png',
				'img2' => 'sofa2.png',
				'img3' => '',
				'img4' => 'sofa4.png',
				'state' => 'new'
			];
			$valid = testFurniture($row);
			$this->assertFalse($valid);
		}

		function testInvalidImage4() {
			$row = [
				'name' => 'Corner Sofa',
				'description' => 'Its really Good!',
				'price' => '999',
				'categoryId' => '1',
				'img1' => 'sofa1.png',
				'img2' => 'sofa2.png',
				'img3' => 'sofa3.png',
				'img4' => '',
				'state' => 'new'
			];
			$valid = testFurniture($row);
			$this->assertFalse($valid);
		}

		function testInvalidState() {
			$row = [
				'name' => 'Corner Sofa',
				'description' => 'Its really Good!',
				'price' => '999',
				'categoryId' => '1',
				'img1' => 'sofa1.png',
				'img2' => 'sofa2.png',
				'img3' => 'sofa3.png',
				'img4' => 'sofa4.png',
				'state' => ''
			];
			$valid = testFurniture($row);
			$this->assertFalse($valid);
		}

		function testValidFurniture() {
			$row = [
				'name' => 'Corner Sofa',
				'description' => 'Its really Good!',
				'price' => '999',
				'categoryId' => '1',
				'img1' => 'sofa1.png',
				'img2' => 'sofa2.png',
				'img3' => 'sofa3.png',
				'img4' => 'sofa4.png',
				'state' => 'new'
			];
			$valid = testFurniture($row);
			$this->assertTrue($valid);
		}
	}
?>