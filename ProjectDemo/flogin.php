<?php
	session_start();
	include("login.php");
	if(isset($_POST["login"]));
	{
		$farmerid = $_POST["farmerid"];
    	$password = $_POST["password"]; 
    	$query = "select farmer_id,password from farmers where farmer_id = '$farmerid' and password= '$password'";
    	$result = mysqli_query($con,$query) ;
    	$count= mysqli_num_rows($result);
    	if($count==0)
		{
    		echo "Invalid username and password";
    	}
    	else
		{
    		$_SESSION["id"]=$farmerid;
    		$_SESSION["pass"]=$password;
    		header('Location:farmer.php');
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
body{
	background-image: url("farmerblurr.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
/*a{
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
	
}*/
button
{
 background-color: #4CAF50; 
 border-radius: 30px;
}
button:hover
{
opacity:0.5;
cursor: grab;
}
#container1,#container2
{
	border-style:solid;
	border-width:1px;
	border-color:#000;
	border-radius:25%;
	background-color:#90a4ae;
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
<center>
<div class="header">
    <img src="css/photoscss/logo.png" height="100" width="100"><h1><b><u>THE FARMING COMPANY</u></b></h1>
</div>
<h2>FARMER LOGIN</h2>
<form action ="flogin.php" method="post">
  <div class="container1">
    <label for="farmerid"></label>
    <input type="text" placeholder="Enter Farmer Id" name="farmerid" required>
</div><br><br>
<div class="container2">
    <label for="password"></label>
    <input type="password" placeholder="Enter password" name="password" required>
	</div><br><br>												
	<input type = "submit" name = "submit" value = "Submit">
   <!-- <button type="login" name="login" value="login"><a href="farmer.html">Log in</a></button>-->
</form>
</center>
</body>
</html>
