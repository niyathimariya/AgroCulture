<?php

    $l="localhost";
    $u="root";
    $p="";
    $db="agriculture";
    $con=mysqli_connect($l,$u,$p,$db);
    if(!$con)
    {
    die("not connected".mysqli_connect_error());
}
else
{
	echo ".";
}
?>
