<?php 
  $db = mysqli_connect('localhost', 'root', '', 'posterspace');
    $username= $_POST["username"];
    $email = $_POST["mail"];
    $password = $_POST["pw"];
    $sql_u = "SELECT * FROM customer_details WHERE username='$username'";
  	$sql_e = "SELECT * FROM customer_details WHERE email ='$email'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  echo '<script>alert("Sorry..Username already taken!")</script>';
        header("Location:signupform.php");
  	}else if(mysqli_num_rows($res_e) > 0){
  	  echo '<script>alert("Sorry..Email already exists!")</script>';
        header("Location:signupform.php");

  	}else{
           
           
           $query = "INSERT INTO customer_details (username, email, password) 
      	    	  VALUES ('$username', '$email', '$password')";
            $qcustid= "SELECT customerID FROM customer_details WHERE username = '$username'";
            $resultid = mysqli_query($db, $qcustid);
            $resultidacc  = mysqli_fetch_array($resultid);
            $custid = $resultidacc['customerID'];
            echo "$custid";
           $sql ="CREATE TABLE `".$username."`(
   
            ". "productID INT(4) NOT NULL PRIMARY KEY, ".
             "quantity INT(4) NOT NULL
    )";
           
           $resulttab = mysqli_query($db, $sql);
           $results = mysqli_query($db, $query);
           
           
           $_SESSION["id"] = $row['customerID'];
            $_SESSION["name"] = $row['username'];
           header("Location:index.php");}
              
           
  	
  
?>
