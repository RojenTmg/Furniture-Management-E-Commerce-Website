<?php 

	function testUpdate($furniture) {

		$valid = true;

		if ($furniture['title'] == '') {
			$valid = false;
		}
		if ($furniture['description'] == '') {
			$valid = false;
		}
		if ($furniture['photo'] == '') {
			$valid = false;
		}
		
		return $valid;	
	}
?>