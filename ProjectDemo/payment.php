<?php
session_start();
include("login.php");
$userid = $_SESSION["userid1"];
$password = $_SESSION["password1"];
//echo $userid; 
$query2="select Name,Location,Contact from customer where custid='$userid' && custpass='$password'";
$result2 = mysqli_query($con,$query2);
while($row2 = mysqli_fetch_assoc($result2))
{
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
p{
	background-color: #FFD700;
	width: 20%;
	height: 25px;
}
#header
{
	display:flex;
	align-items: center;
}
</style>
<center>
<br><br><br><br><br>
<div id="header">
    <img src="css/photoscss/logo.png" height="100" width="100">
    <h1><b><u>THE FARMING COMPANY</u></b></h1>
</div>
<center><p>PAYMENT</p></center>

<form action ="payment.php" method="post">
<label for="name"><b>Name</b></label>
<input type="text" id="name" name="name" value= <?php echo ($row2["Name"]) ?> ><br><br>	
<?php $_SESSION["Name"]=$row2["Name"]; ?>
<label for="address"><b>Address</b></label>
<input type="text" id="name" name="name" value= <?php echo ($row2["Location"]) ?>><br><br>
<?php $_SESSION["Location"]=$row2["Location"]; ?>
<label for="farmerid"><b>Contact<b></label>
<input type="text" id="name" name="name" value= <?php echo ($row2["Contact"]) ?> ><br><br>
<label for="cardno"><b>Cardno<b></label>
<input type="text" placeholder="Enter Card number" name="cardno" required><br><br>
<label for="quantity"><b>Quantity</b></label>
<?php
		$veggie=$_SESSION["veggie"];
		$query1="select * from crop where Local_Name='$veggie'";
		$result1 = mysqli_query($con,$query1);
		while($row = mysqli_fetch_assoc($result1))
		{
			$og= $row["Quantity"];
			$_SESSION["Quantity"]=$row["Qunatity"];
			if($og <=0)
			{
				?>
				<input type="text" placeholder= <?php echo "Nostock"; ?> name="quantity" required><br><br>
				<?php
			}
			else
			{
			?>

				<input type="text" placeholder= <?php echo $og ?> name="quantity" required><br><br>
				<input type = "submit" name = "submit" value = "Submit">
<br>
		</form>
<?php
				$quan=$_POST["quantity"];
				$new=((int)$og-(int)$quan);
			}
		}
	}
		//echo $quan;
		//echo "<br>";
		//echo $new;
		if(isset($_POST['submit']))
		{
		$query3="update crop set Quantity='$new' where Local_Name='$veggie'";
		$result = mysqli_query($con,$query3) ;
		header('Location:bill.php');
	}
	
?>
</center>
</body>
</html>
