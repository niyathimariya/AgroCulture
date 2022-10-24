<?php
session_start();
include("login.php");
$fid=$_SESSION["id"];
$sql="select * from crop where farmer_id='$fid'";
$result = mysqli_query($con, $sql);

/*if($result) 
{
    $row = mysqli_fetch_row($result);
	$i=0;
    for($i; $i < count($row); $i++)
	{
        echo $row[$i];
    }
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
table, th, td
{
  border: 1px solid white;
  border-collapse: collapse;
	align-items: center;
text-align: center;

}
th, td {
  background-color: #90a4ae;
  cursor: grab;
  font-size:20px;
}
tr:hover{
	background-color:white;
}
</style>
<center>
<h1>THE FARMING COMPANY</h1>
<h3>Reports</h3>

<table>
<tr>
	<th><h3>Crop name</h3></th>
	<th><h3>Quantity remaining<h3></th>
	<th><h3>Amount credited<h3></th>
</tr>
<?php
if ($result->num_rows > 0)
{   
	while($row = $result->fetch_assoc()) 
	{
	?>

<tr>
	<td><br><?php echo ($row["Local_Name"]) ?><br></td>
	<td><br><?php echo ($row["Quantity"]) ?><br></td>
	<td><br><?php echo (50-$row["Quantity"])*($row["Rate"])?><br></td>
</tr>
<?php } ?>
</table>
<?php 
}
?>
</center>
</body>
</html>
