<?php
	$title = 'Enquiry Page';
	$furniture = new OperationTable('updates');
	
	$table = new tableGenerator();
	$headings = array('Name', 'Email','Phone Number','Description', 'Mark');
	$table->setHeadings($headings);

	$enquiryQuery = new OperationTable('enquiry');
	$enquiry = $enquiryQuery->findAll();


	foreach ($enquiry as $row) {
		$mark = '';
		if ($row['mark'] == 1) { $mark = "In Complete"; } else { $mark = "Complete"; }

		$table->addRow(['name'=>$row['name'],
						'email'=>$row['email'],
						'phone'=>$row['phone'],
						'description'=>$row['description'],
						'mark'=>'<button class="e-mark" id="' . $row['enquiry_id'] . '" onClick="getMark('. $row['enquiry_id'] . ')">'. $mark . '</button>'
					   ]); 
	}

	$nav = loadTemp('../templates/nav_template.php',[]);
	$left = loadTemp('../templates/aside_template.php',[]);

	$content = loadTemp('../templates/enquiry_template.php',['nav'=>$nav, 'left'=>$left, 'table'=>$table]);
?>