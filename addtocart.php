<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'posterspace');
$productid = $_POST["add"];
$query = "INSERT INTO `".$_SESSION["name"]."` (productID, quantity) 
      	    	  VALUES ('$productid', '1')";
 
if(mysqli_query($con, $query)){
    echo "<script>
    alert('Product added to cart.');
    window.history.back();  
    </script>"; 
}
else{
echo "<script>
alert('Product already in cart.');
window.history.back();  
</script>";   }
?>