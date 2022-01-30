<?php 
session_start();
if(!isset($_SESSION["id"]))
header("Location:account.php");

  $db = mysqli_connect('localhost', 'root', '', 'posterspace');
    $name= $_POST["fname"];
    $id = $_SESSION["id"];
    $phone = $_POST["phone"];
    $address = $_POST["address1"].", ".$_POST["address2"].", ".$_POST["address3"];
    $products="";
  	$sql_u = "SELECT * FROM `".$_SESSION["name"]."`";
  	$res_u = mysqli_query($db, $sql_u);
      while($row1 = mysqli_fetch_assoc($res_u)){
        $products = $products.$row1["productID"].", ";
      }
  	

           $query = "INSERT INTO orders (customerID, orderID, date, address, products, phone, name) 
      	    	  VALUES ('$id', '', now(),'$address', '$products', '$phone', '$name')";
          
           if(mysqli_query($db, $query)){
            $del = "DELETE FROM `".$_SESSION['name']."`";
            $del_res= mysqli_query($db, $del);
            echo "<script>
            alert('Your order is successfully placed. Continue shopping!');
            
            </script>";
           header("Location:index.php");}
              else
              mysqli_error($db);
           
  	
  
?>
