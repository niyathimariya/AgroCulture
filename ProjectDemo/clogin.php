<?php
	session_start();
	include("login.php");
	//require("signin.php");
	
	if(isset($_POST['submit']))
	{
	$userid = $_POST['userid'];
    $password = $_POST['password']; 
	$_SESSION["userid1"]=$userid;
	$_SESSION["password1"]=$password;
    $query = "select * from customer where custid = '$userid' && custpass= '$password'";
	$result = mysqli_query($con,$query) ;
	$count= mysqli_num_rows($result);
    	echo $count;
    	if($count==0)
		{
    		echo "   Invalid username and password";
    		echo $count;
    		
    	}
    	else{
    	
    	//$_SESSION['userid']=$id;
    	//$_SESSION['password']=$pass;
    	
    	//echo " Yeah its connected";
    	
   	header('Location:home.php');
    	}
    	}
    	/*else{
    	echo "no login details";
    	}*/
?>



<!DOCTYPE html>
<html>
<body>
<style>
body
{
	background-image: url("farmerblurr.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
#header
{
	display:flex;
	align-items: center;
}
input[type=submit]
{
	background-color: #04AA6D;
	border: none;
	color: white;
	padding: 16px;
	text-decoration: none;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 6px;
}

input[type=submit]:hover
{
	opacity:0.5;
	cursor: grab;
}
	
</style>
<div id="header">
    <img src="css/photoscss/logo.png" height="100" width="100">
    <h1><b><u>THE FARMING COMPANY</u></b></h1>
</div>
<center>
<h2>CUSTOMER LOGIN</h2>
<form action ="clogin.php" method="post">
  <div class="container">
    <label for="userid"></label>
    <input type="text" placeholder="Enter User Id" name="userid" required>
    </div>
<br>
<br>

  <div class="container">
    <label for="password"></label>
    <input type="password" placeholder="Enter password" name="password" required>
    </div>
<br>
<br>

<input type = "submit" name = "submit" value = "Submit">
</form>
</center>
</body>
</html>
