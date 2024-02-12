<?php
    $servername = "localhost";
    $dbUsername = "root";
    $Password = "";
    $db = "signup";

    //create connections
    $conn = new mysqli($servername, $dbUsername, $Password,$db);
    
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
       echo "Connected successfully";
     ?>
