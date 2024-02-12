<!-- IT21282836 - Mallawaarachchi T. D. R. -->
<?php
	include 'config.php';

		$cxName = $_POST["fName"];
		$cxMobNo = $_POST["mobNo"];
		$cxEmail = $_POST["email"];
		$cxMsg = $_POST["msg"];
		
	$sql = "INSERT INTO contactus(FullName, MobNo, Email, Msg) VALUES ('$cxName', '$cxMobNo', '$cxEmail', '$cxMsg')";
	
	if($conn->query($sql)){
		echo"Data Inserted";
		header("Location:../html/contactUs.html");
	}
	else{
		echo"Error: ".$conn->error;
		header("Location:../html/contactUs.html");		
	}
	
	$conn->close();
?>                              