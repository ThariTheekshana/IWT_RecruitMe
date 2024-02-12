<!DOCTYPE html>
<html>

    <style>
.body{
	background-image: url("../images/thishbackground.jpg");
	background-position: center;
	background-size: cover;
}
.header{
	

	
	height: 100vh;
	width: 100%;
	padding: 0 8%;
	position: relative;

}
.nav-link li{
	display: inline-block;
	margin: 0 15px;
}

.nav-link li a{
	text-decoration: none;
	color: white;
	padding: 5px 0;
	position: relative;
	font-size: 25px;
}

.nav-link li a:hover{
	font-size: 30px;
	color: yellow;
	
}

.button-in{
	color: white;
	padding: px 30px;
	border-radius: 3px;
	cursor: pointer;	
}

.button-up{
	color: white;
	padding: 0px 0px;
	border-radius: 3px;
	cursor: pointer;	
}

.button-in:hover{
	font-size: 26px;
}

.button-up:hover{
	font-size: 26px;
}
.card {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.9);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: rgba(0, 71, 176); 
  background-color: rgba(0, 71, 176, 0.52);
}
.userD {
    
}

.details {
  color: whitesmoke;
  font-size: 18px;
  text-align: left;
  padding-left: 30px;
}
.topic {
  color: whitesmoke;
  font-size: 18px;
  text-align: left;
  padding-left: 100px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
.left{
	background-color: black;
	text-align: center;
	
	
}

.left b{
	text-decoration: underline;
	color:#D948DD;
	
}
.left a{
	text-decoration:none;
	font-size: 18px;
	color: white;
	
}

.left a:active{
	color: darkred;
}

.left a:hover{
	color: orange;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 8px 4px;
}

/* Add hover */
.fa:hover {
  opacity: 0.6;
  
}


.Social-right{
	text-align: center;
	
}

.fa-facebook {
  background: #3B5998;
  color: white;
  
}


.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-whatsapp {
  background: #4FCE5D;
  color: white;
}

</style>
<body class="body">
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitme";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $ID = $_POST['ID'];
    $table = $_POST['table'];
    $sql1;
    $sql2;
    $id;
    $name;
    $rDate;
    $email;
    
 if ($table == 'job_seeker')
 {
     $sql1 = "SELECT * FROM $table
             WHERE Job_Seeker_ID = $ID ";
     
    $sql2 = "SELECT Job_Seeker_Email FROM job_seeker_contact
            WHERE Job_Seeker_ID =$ID ";  
 }
 
   
if ($table == 'Recruiter')
 {
     $sql1 = "SELECT * FROM $table
             WHERE Recruiter_ID = $ID ";
    
    
    $sql2 = "SELECT Rrecruiter_Email FROM recruiter_contact
            WHERE Recruiter_ID =$ID ";
     
    
 }
$conn->query($sql1);
     $result = $conn->query($sql1);
    $row = $result->fetch_assoc();
$conn->query($sql2);
     $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
if ($table == 'job_seeker')
 {
    $id = $row['Job_Seeker_ID'];
    $name = $row['Job_Seeker_Name'];
    $rDate = $row['Registration_Date'];
    $email =$row2['Job_Seeker_Email'];
 }
 
   
if ($table == 'Recruiter')
 {
    $id = $row['Recruiter_ID'];
    $name = $row['R ecruiter_Name'];
    $rDate = $row['Registration_Date'];
    $email =$row2['Recruiter_Email'];
    
 }

$conn->close();	 	

?> 

<div class = "header">
			
			<nav>
	<!--Add logo image -->
				<img src = "../images/logo.png" alt = "Logo image not found " class = "logo">
	<!-- Navigation bar -->			
				<ul class = "nav-link">
					<li class = "button-in" > <li><a href = "#" ><b>Sign-in</b></a></li>
					<li class = "button-up" ><li><a href = "#" ><b>Sign-up</b></a></li>
					<li> <a href = "#" > Home </a> </li>
					<li> <a href = "" > Find Job </a> </li>
					<li> <a href = "" > Find Talent </a> </li>
					<li> <a href = "" > Payment </a> </li>
					<li> <a href = "" > Contact Us </a> </li>
					<li> <a href = "" > About Us </a> </li>
					<li> <a href = "" > Help & Support </a> </li>
					
				</ul>
			</nav>
    </div>

<div class="card">
    <h2 style="text-align:center">User Profile</h2>
  <img src="../images/user_icon.png" alt="John" style="width:100%">
    <table>
        <tr><td><p class="topic">ID:</p></td>
            <td><p class="details"><?php echo "$id" ?></p></td></tr>
        <tr><td><p class="topic">Name:</p></td>
            <td><p class="details"><?php echo "$name" ?></p></td></tr>
        <tr><td><p class="topic">Registeration date:</p></td>
            <td><p class="details"><?php echo "$rDate" ?></p></td></tr>
        <tr><td><p class="topic">Email:</p></td>
            <td><p class="details"><?php echo "$email" ?></p></td></tr>
                            
        
    </table>
</div>
  
<footer class = "left">
		<hr><br>
			
			  <b>SITE LINKS</b>				   <br><br>
			  <a href=""> Home </a>            <br><br>
			  <a href=""> Find Job </a>        <br><br>
			  <a href=""> Find Talent </a>     <br><br>
			  <a href=""> Payment </a>         <br><br>
			  <a href=""> Contact Us </a>      <br><br>
			  <a href=""> About Us </a>        <br><br>
			  <a href=""> Help & Support </a>  <br><br>
    
    <div class = "Social-right">
			
			<!-- Add social media icon library -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

			<!-- Add social media icons -->
			<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-google"></a>
			<a href="#" class="fa fa-youtube"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-whatsapp"></a>
			
		</div>
</footer>


    </body>
</html>