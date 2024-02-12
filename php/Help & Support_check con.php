<?php
	//connect
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "myhelp";
 	
	$con = new mysqli($servername, $username, $password, $db);
	
	//Check Connection
	
	if($con->connect_error){
		die("Connection failed: ".$con->connect_error);
	}
	else{
		echo "connected with DB";
	}
?>