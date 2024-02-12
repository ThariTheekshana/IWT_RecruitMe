<?php
include_once 'configy.php';

 
$Namecard = $_POST["Name_On_Card"];
$Cnum = $_POST["Credit_Card_Number"];
$ExpM = $_POST["Exp_Month"];
$ExpY= $_POST["Exp_Year"];
$cvv = $_POST["CVV"];
 
$sql = "INSERT INTO pay(Name_On_Card,Credit_Card_Number,Exp_Month,Exp_Year,CVV) VALUES('$Namecard', '$Cnum', '$ExpM' , '$ExpY', '$cvv')";

if($conn->query($sql)) {
    echo "<script>alert('Records added successfully!!');</script>";
    header("Location: ../html/Home - afterLog.html");
}
else{
    echo "<script>alert('Error: Records not added!')</script>";
}

$conn->close();
?>