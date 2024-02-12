<?php
include 'configx.php';


$Nam = $_POST["name"];
$Uname = $_POST["username"];
$Eadd = $_POST["email"];
$Conpass = $_POST["pass"];

$sql = "INSERT INTO sign(Name, Username, Email_Address, Confirm_password) VALUES('$Nam', '$Uname', '$Eadd', '$Conpass')";

if($conn->query($sql)) {
    echo "<script>alert('Records added successfully!!');</script>";
    header("Location: ../html/Home - afterLog.html");
}
else{
    echo "<script>alert('Error: Records not added!')</script>";
}

$conn->close();

?>