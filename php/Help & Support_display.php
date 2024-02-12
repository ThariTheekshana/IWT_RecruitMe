<?php
	require 'Help & Support_check con.php';
	
	$sql = "INSERT INTO help (question,answer)VALUES('Is this website secure with viruses and malware?', 'This website is a secure website.');";
	$sql.= "INSERT INTO help (question,answer)VALUES('How can I change my password','Step 1: Select Forgot Password? on Sign-in page. Step 2: Sign-in to your google account. Step 3: Enter & Conform your new password');";
	$sql.= "INSERT INTO help (question,answer)VALUES('How can I believe the information is true?', 'We have been providing the service for 5 years and provided service over 1000+ clients. We guarantee you can trust us')";

	if($con->multi_query($sql))
	{
		echo "Inserted Success";
	}
	
	else{
		echo "Error: ".$sql."<br>".$con->error;
	}
	
	$con->close();

?>