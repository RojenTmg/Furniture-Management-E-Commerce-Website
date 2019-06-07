<?php 

	function testFurniture($furniture) {

		$valid = true;

		if ($furniture['name'] == '') {
			$valid = false;
		}
		if ($furniture['description'] == '') {
			$valid = false;
		}
		if ($furniture['price'] == '') {
			$valid = false;
		}
		if ($furniture['categoryId'] == '') {
			$valid = false;
		}
		if ($furniture['img1'] == '') {
			$valid = false;
		}
		if ($furniture['img2'] == '') {
			$valid = false;
		}
		if ($furniture['img3'] == '') {
			$valid = false;
		}
		if ($furniture['img4'] == '') {
			$valid = false;
		}
		if ($furniture['state'] == '') {
			$valid = false;
		}
		
		return $valid;	
	}
?>