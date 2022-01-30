<?php
    session_start();
    $message="";
    
        if(!($con = mysqli_connect("localhost","root","","posterspace")))
        {  
            die("Could not connect");
        }
    $con = mysqli_connect("localhost","root","","posterspace");
    $mail = isset($_POST["mail"]) ? $_POST["mail"] : '';
    $pw = isset($_POST["pw"]) ? $_POST["pw"] : '';
    
    $sql= "SELECT * FROM customer_details WHERE email ='$mail' and password = '$pw'";
    $result = mysqli_query($con,$sql);
    $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        
        $_SESSION["id"] = $row['customerID'];
        $_SESSION["name"] = $row['username'];
        header("Location:index.php");
        } 
    
    else {
      $message = "Invalid Username or Password!";
      header("Location:account.php");
     }
   


?>