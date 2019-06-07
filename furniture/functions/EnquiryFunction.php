<?php 

	function testEnquiry($enquiry) {

		$valid = true;

		if ($enquiry['name'] == '') {
			$valid = false;
		}
		if ($enquiry['email'] == '') {
			$valid = false;
		}
		if ($enquiry['phone'] == '') {
			$valid = false;
		}
		if ($enquiry['description'] == '') {
			$valid = false;
		}
		
		return $valid;	
	}
?>