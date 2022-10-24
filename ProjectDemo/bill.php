<?php
session_start();
include("login.php");
$Name=$_SESSION["Name"];
$Location=$_SESSION["Location"];
$veggie=$_SESSION["veggie"];
$Quantityf=$_SESSION["Quantity"];
$Rate=$_SESSION["Rate"];
$gross=$Quantityf * $Rate;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILL</title>
</head>
<body>
    <center>
    <h3>INVOICE</h3>
    </center>
    <p>Sold by:The Farming Company<br>23/432 MG Road Palakkad Kerala<br>
    Phone:0491-2526052</p>
    <table>
        <tr>
        <th>OrderNo</th>
        <th>BillTo</th>
        <th>ShipTo</th>
        </tr>
        <hr>
        <tr>
        <td><?php echo $Name ?></td>
        <td><?php echo $Location ?></td>
        <td><?php echo $Location ?></td>
        </tr>
    </table>
    <hr>
    <div id="bill">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Gross Amount</th>
                <th>Discount</th>
                <th>Tax</th>
                <th>Total</th>
            </tr>
            <tr>
            <td><?php echo $veggie ?></td>
            <td><?php echo $Quantityf ?></td>
            <td><?php echo $Rate ?></td>
            <td><?php echo $gross ?></td>
            <td>0.00</td>
            <td>0.00</td>
            <td><?php echo $gross ?></td>
        </tr>
        </table>
    
    </div>
    <hr>
<p>Thank you for shopping from the Farming Company.Visit Again </p>
<p>Please Note:Keep this invoice safe for refund purposes.</p>
<!--<form>
<input type="button" value="Print" onclick=window.open('bill.php'); return false;" target="_blank"/>
</form>-->
<a href ="bill.php" attributes-list download > Print</a>
</body>
</html>