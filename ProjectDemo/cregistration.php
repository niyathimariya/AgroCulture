<?php
include("login.php");
$name=$_POST["username"];
if (!is_null($name))  
{
	
	$loc = $_POST['location'];
	$contact = $_POST['contact'];
	$uid = $_POST['userid'];
	$pass = $_POST['password'];
	$query = "INSERT INTO Customer(Name,Location,Contact,custid,custpass) values ('$name','$loc','$contact','$uid','$pass')";
	$result=mysqli_query($con,$query);
	if($result)
	{
	//echo "Successfully registered...$result";
	header('location:clogin.php');
	}
	else
	{
	echo "Something went wrong while registering.$result";
	}
}
?>


<!DOCTYPE html>
<html>
<body>
<style>
body{
	background-image: url("image2.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
/*a{
  background-color: #808080;
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;	
}*/
input[type=submit],input[type=reset],input[type=submit]
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
input[type=reset]:hover
{
opacity:0.5;
cursor: grab;
}
input[type=submit]:hover
{
opacity:0.5;
cursor: grab;
}
.header
{
  display:flex;
  align-items: center;
}
</style>
<div class="header">
    <img src="css/photoscss/logo.png" height="100" width="100"><h1><b><u>THE FARMING COMPANY</u></b></h1>
</div>
<form action="clogin.php" method="post" name="Register">
<center>
<h2>REGISTER</h2>
  <div class="container">

    <label for="username"></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    </div><br>
    <label for="location"></label>
    <input type="location" placeholder="Enter your location" name="location" required>
    <br><br>
    <label for="contact"></label>
    <input type="contact" placeholder="Enter contact number" name="contact" required>
    <br><br>
    <label for="userid"></label>
    <input type="userid" placeholder="Enter userid" name="userid" required>
    <br><br>
    <label for="password"></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br><br>
    <input type="submit" value="Register" name="Register">
    <input type="reset" value="Clear"><br>
    </div></form>
<form action="clogin.php" method="post">	
<a href="clogin.php"><input type="submit"  value="LogIn" name="LogIn"/></a></form>

</center>
</body>
</html>





	





