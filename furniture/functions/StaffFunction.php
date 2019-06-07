<?php 

	function testStaff($furniture) {

		$valid = true;

		if ($furniture['username'] == '') {
			$valid = false;
		}
		if ($furniture['password'] == '') {
			$valid = false;
		}
		
		return $valid;	
	}
?>