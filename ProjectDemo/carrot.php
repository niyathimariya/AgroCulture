<?php
session_start();
include("login.php");
echo "<br>";
$query1="select * from crop where Local_Name='Carrot'";
$result = mysqli_query($con,$query1);
$_SESSION["veggie"]="Carrot";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	a{
  background-color: #FFFFFF; /* Green */
  border: none;
  color: black;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
	
}
button
{
 background-color: #FFFFFF; /* Green */
 border-radius: 12px;
}
button:hover
{
opacity:0.5;
cursor: grab;
}
	</style>
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrot</title>
    <link rel="stylesheet" href="/ProjectDemo/css/carrotcss.css">
</head>
<body>
   
    <h1><b>CARROT</b></h1>
    <table>
        <thead>
            <tr>
                <th colspan="2">DESCRIPTION</th>
            
            </tr>
        </thead>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tbody> 
            <tr>
                <td>Scientic Name</td>
                <td><?php echo $row["Scient_name"] ?></td>
            </tr>
            <tr>
                <td>Nutrition Value</td>
                <td><?php echo $row["Nutritional-value"]  ?>
                    </td>
                
            </tr>
            <tr>
                <td>Recepies</td>
                <td><?php echo $row["Recipe"]?></td>
            </tr>
            <tr>
                <td>Rate(per kg)</td>
                <td><?php echo $row["Rate"] ?></td>
                <?php $_SESSION["Rate"]=$row["Rate"];?>
            </tr>
            <tr>
                <td>Quantity Available</td>
                <td><?php echo $row["Quantity"] ?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <br><br><br><br><br>
    <center><button type="submit" name="paynow"  ><a href="payment.php"> Pay Now </a></button></center>
    <br><br><br><br><br><br><br><br><br><br><br>
   </body>
</html>

       