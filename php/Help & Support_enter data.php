<?php
	include 'Help & Support_check con.php';
	
	$Qustion = $_POST["question"];
	$Email = $_POST["email"];
	
	$sql = "INSERT INTO help (question,email)VALUES('$Qustion', '$Email')";
	

	if($con->query($sql))
	{
		echo "Inserted Success";
		header ("Location: ../html/Help & Support.html");
	}
	
	else{
		echo "Error: ".$con->error;
	}
	
	$con->close();

?>