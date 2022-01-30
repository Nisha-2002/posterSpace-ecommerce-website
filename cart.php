<?php
    session_start();
    if(!isset($_SESSION["id"]))
    header("Location:account.php");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="author" content="Nisha Pushpam"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="css\styles.css" />
  <title>Poster Space - Products</title>
  <script>
     document.getElementById("autoSubmit").submit();
     echo "<meta http-equiv='refresh' content='0'>";
</script>
</head>

<body class="area">
  <!-- Header -->
  <header id="motivational">
    <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <div class="logo">
          <a href="index.php"><h1>Poster Space</h1></a>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
              <a href="index.php"><h1>Poster Space</h1></a>
            </div>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="products.php" class="nav-link">Products</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Log-Out</a>
            </li>
            <li class="nav-item">
              <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
            </li>
          </ul>
        </div>

        <a href="cart.php" class="cart-icon">
          <i class="bx bx-shopping-bag"></i>
        </a>

        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </nav>
    <div class="title">
        <h1>Your Cart</h1>
      </div>
  </header>
  <!-- Cart Items -->
  <div class="container-md cart">
    <table>
      <tr>
        <th>Product</th>
        <!--<th>Quantity</th>-->
        <th>Price</th>
      </tr>
      <?php
    global $total;
    $total = 0;
    if(!($con = mysqli_connect("localhost","root","","posterspace")))
        {  
            die("Could not connect");
        }
    $con = mysqli_connect("localhost","root","","posterspace");
    $query1 = "SELECT * FROM `".$_SESSION['name']."`";
    $cart_items = mysqli_query($con, $query1 );
    global $row1;
    while($row1 = mysqli_fetch_assoc($cart_items)){
        $id = $row1["productID"];
        

        $query2 = "SELECT * FROM posters WHERE productID='$id'";
        $item_details = mysqli_query($con, $query2 );
        global $row2;
        
        while($row2 = mysqli_fetch_assoc($item_details)){
            $_SESSION["pro_id"] = $id;
      echo "<tr>";
       echo "<td>";
         echo( "<div class='cart-info'>");
         echo ('<img src="data:image/jpeg;base64,'.base64_encode( $row2["image"] ).'"/>');
           echo "<div>";
          
              echo ("<p>".$row2['title']."</p>");
              /*echo("<span>Price:".$row2['price'] ."</span>");*/
              echo("<br />");
             echo("<a href='deletefromcart.php'>Remove</a>");
            echo("</div>");
          echo("</div>");
        echo("</td>");
        $quantity = $row1["quantity"];/*
        echo("<td><form id='autoSubmit' action='update_quantity.php'><input type='number' name='quantity' value='".$quantity."'  min='1'></form></td>");
        */$sub = $row2['price'] * $row1["quantity"];
        $total = $total+ $sub;
        echo("<td>₹".$sub."</td>");
      echo("</tr>");}}?>
      
    </table>

    <div class="total-price">
      <table>
        <tr>
          <td>Subtotal</td>
          <td>₹<?php echo $total;?></td>
        </tr>
        <tr>
          <td>GST 18%</td>
          <td>₹<?php echo $total * 0.18?></td>
        </tr>
        <tr>
          <td>Delivery Charges</td>
          <td>₹<?php echo $total * 0.03?></td>
        </tr>
        <tr>
          <td>Total</td>
          <td>₹<?php echo $total+50;?></td>
        </tr>
      </table>
      <a href="deliverydetails.php" class="checkout btn">Proceed To Checkout</a>

    </div>
    
  </div>
        

  <br><br>
        <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="about.html">About Us</a>
          <a href="privacypolicy.html">Privacy Policy</a>
          <a href="terms.html">Terms & Conditions</a>
          <a href="contact.html">Contact Us</a>
          
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="logout.php">Log-Out</a>
          <a href="orderhistory.php">Order History</a>
          
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            555 K.K.Nagar, Madurai,
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
            Tamil Nadu, India.
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            posterspace@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            +91 9965482382
          </div>
    
        </div>
      </div>
    </div>
    
  </footer>
  <!-- End Footer -->
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
</body></html>
    
    