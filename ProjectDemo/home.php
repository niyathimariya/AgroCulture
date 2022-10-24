<?php
session_start();
include("login.php");
$userid=$_SESSION["userid1"];
echo $userid;
$password=$_SESSION["password1"];
echo $password;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href=/ProjectDemo/css/home.css>
</head>
<body>
<header>
    <div id="header">
    <img src="css/photoscss/logo.png" height="100" width="100">
    <h1><b><u>THE FARMING COMPANY</u></b></h1>
</div>
    <h3>WE AIM TO PROVIDE YOU WITH THE BEST AND FRESH PRODUCTS THAT MAKES YOU HEALTHY WITHIN</i></h3>
    <hr>
</header>
<div id="main">
    <h1>DEALS OF THE DAY</h1>
    <br>
    <br>
    <br>
    <marquee loop="2" behaviour="alternate">
    <div id="veggies">
        <div id="carrot">
            <a href="carrot.php"><img id="crt"  src="css/photoscss/Carrots.jpg" alt="Carrots" height="200" width="200">
            </a>
        </div>
        <div id="beetroot">
            <a href="beetroot.php"><img src="css/photoscss/beetroot.png" alt="BeetRoots" height="200" width="200">
            </a>
        </div>
        <div id="cabbage">
            <a href="cabbage.php"><img src="css/photoscss/cabbage.jpg" alt="Cabbage" height="200" width="200">
            </a>
        </div>
        <div id="cauliflower">
            <a href="cauliflower.php"> <img src="css/photoscss/cauliflower.jpg" alt="Cauliflower" height="200" width="200">
            </a>
        </div>
        <div id="wheat">
            <a href="wheat.php"><img src="css/photoscss/wheat.jpg" alt="Wheat" height="200" width="200"></a>
        </div>
        <div id="chilli">
            <a href="chilli.php"><img src="css/photoscss/chilli.jpg" alt="Chilli" height="200" width="200"></a>
        </div>
        <div id="rice">
            <a href="rice.php"><img src="css/photoscss/ricefg.png" alt="Rice" height="200" width="200"></a>
        </div>
        <div id="eggs">
            <a href="egg.php"><img src="css/photoscss/eggs2.jpg" alt="Eggs" height="200" width="200"></a>
        </div>
        <div id="tomato">
             <a href="tomato.php"><img src="css/photoscss/tomatofg.jpg" alt="Tomato" height="200" width="200"></a>
        </div>
        <div id="ladysfinger">
            <a href="ladysfinger.php"><img src="css/photoscss/lfimage2.jpg" alt="Ladysfinger" height="200" width="200"></a>
        </div>
    </div>
</marquee>
<br><br><br><br><br>
</div>
<footer>
    <hr>
    <p>CONTACT:+101 6789994</p>
    <p>write to us :xyz@gmail.com</p>
</footer>
</body>
</html>
