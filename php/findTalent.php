<!-- IT21282836 - Mallawaarachchi T. D. R. -->
<?php
	include 'config.php';

		$r_Name = $_POST["rFName"];
		$r_Email = $_POST["rEmail"];
		$r_Msg = $_POST["rMsg"];
		
	$sql = "INSERT INTO find_talent_issues(R_FullName, R_Email, R_Issue)
	VALUES
	('$r_Name', '$r_Email', '$r_Msg')";
	
	if($conn->query($sql)){
		echo"Data Inserted";
	}
	else{
		echo"Error: ".$conn->error;                                                 
	}
	
	$conn->close();
?>   