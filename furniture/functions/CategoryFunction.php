<?php 

	function testCategory($category) {

		$valid = true;

		if ($category['name'] == '') {
			$valid = false;
		}
		
		return $valid;	
	}
?>