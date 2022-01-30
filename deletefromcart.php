<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'posterspace');

$id = $_SESSION["pro_id"];
$query2 = "DELETE FROM `".$_SESSION["name"]."` WHERE productID= '$id'";

if (mysqli_query($con, $query2)) {
unset($_SESSION["pro_id"]);

header("location:cart.php");
    }
            
?>