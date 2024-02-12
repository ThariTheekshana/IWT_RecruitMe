<!DOCTYPE html>
<html>
<head>
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
input[type=text], select {
  width: 100%;
    background-color: #b7b795;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

.submit {
  width: 100%;
  background-color: #1a75ff;
  color: white;
  padding: 14px 20px;
  margin: 8px;
  border: none;
  border-radius: 5px;
}

.submit:hover {
  background-color: #005ce6;
}
    .container {
        background-color: rgb(0, 176, 133)
        background-color: rgba(0, 176, 133, 0.1);
        margin: 0px;
        width: 100%;
        
    }
.form1 {
        border-radius: 7px;
        background-color: #c1c1a4;
        padding: 30px;
        margin: 20px;
}
    .formtxt {
        padding: 10px;
        margin: 0px;
        color: whitesmoke;
    }
    .CVlb {
        font-size: 10px;
        color: white;
        background-color: #1a75ff;
        border: none;
        border-radius: 5px;
        margin: 6px;
        padding: 6px 6px;
    }
    .CVlb:hover{
        background-color: #005ce6;
     
    }
    .CV{
       
        display: none;
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
    <title>job seeker form</title>
    </head>
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
    $JID = $_POST['JID'];
    $Exp = $_POST['Experience'];
    $jName = $_POST['jobName'];
 
$sql = "SELECT MAX(Request_Form_Number) as 'max' FROM Request_Form ";//get current maximum id
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    
$ID = $row['max'] + 1;//generate new ID
$sql = "INSERT INTO Request_Form VALUES($ID,'Job seeker')";//insert data
$conn->query($sql);
    
$sql = "UPDATE Job_Seeker
        SET Request_Form_Number = $ID
        WHERE Job_Seeker_ID = $JID ";
$conn->query($sql);

$sql = "SELECT MAX(Talent_ID) as 'max' FROM Talent ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$ID = $row['max'] + 1;//generate new ID
$sql = "INSERT INTO Talent VALUES($ID,$Exp,$jName)";//insert data
$conn->close();

$file_name=$_FILES['cv']['name'];
$file_tmp=$_FILES['cv']['tmp_name'];
$directory='../CVs/';

    $uploaded = move_uploaded_file($file_tmp,$directory.$file_name);

    $subcnfm = $_POST['hidden'];
?> 
    <script>
   var subcnfm = '<?=$subcnfm ?>';
   console.log(subcnfm);
   if(subcnfm == 'submit'){
       alert('Submited successfully');
   }
         </script>
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

<div class="container">
    <h2 class="formtxt">Job seeker form</h2>
    <p class="formtxt"> Enter job details:</p>

<div class="form1">
        <form action="job_seeker_form.php" method="post" enctype="multipart/form-data">
        <label for="jSName">Name</label>
        <input type="text" id="cname" name="jSName" placeholder="Job seeker name.." required>
      <input type="hidden" name="hidden" value="submit" required>
        <label for="jname">Talent</label>
        <input type="text" id="jname" name="jobName" placeholder="Job name.." required>
            
        <label for="JID">Job seeker ID</label>
        <input type="text" id="JID" name="JID" placeholder="ID.." required>

        <label for="Experience">Experience level</label>
            <select id="Experience" name="Experience" required>
                 <option value="Senior">Senior</option>
                <option value="Junior">Junior</option>
                <option value="Intern">Intern</option>
            </select>
        <label for="duration">Duration</label>
            <select id="duration" name="duration">
                 <option value="Less than 1 year">less than 1 year</option>
                <option value="1 year">1 year</option>
                <option value="More than 1 year">More than 1 year</option>
            </select>
            <script>
  function file_input(){
      document.getElementById('myFile').click();
      Checkfiles();
  }
  
</script>
<script type="text/javascript">
    function Checkfiles()
    {
        var fup = document.getElementById('myFile');
        var fileName = fup.value;
        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
        var extention;

    if(ext =="pdf" || ext=="PDF")
    {
        var extention = "True";
    }
    else
    {
        alert("Upload pdf files only");
        var extention = "False";
    }
    }
    
</script>
        
    <input type="file" id='input_file' hidden>
            <label class="CVlb" for="cv" onclick="file_input()">Upload CV</label>
            <input class="CV" type="file" id="myFile" name="cv">
        
            <input class="submit"type="submit" value="Submit"  >
        </form>
    </div>
    <br><br><br>
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