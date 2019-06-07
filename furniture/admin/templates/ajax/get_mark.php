<?php
	require '../../../classes/OperationTable.php';
	require '../../../connect.php';

	$enquiryQuery = new OperationTable('enquiry');

	$enquiry = $enquiryQuery->find('enquiry_id', $_POST['id']);
	$value = $enquiry->fetch();

	if ($value['mark'] == 0) {
		$criteria = ['enquiry_id'=>$_POST['id'],
					 'mark'=>1
					];
		$enquiryQuery->update($criteria, 'enquiry_id');
		echo 'In Complete';
	}elseif ($value['mark'] == 1) {
		$criteria = ['enquiry_id'=>$_POST['id'],
					 'mark'=>0
					];
		$enquiryQuery->update($criteria, 'enquiry_id');
		echo 'Complete';
	}
?>