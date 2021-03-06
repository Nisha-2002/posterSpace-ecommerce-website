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
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Poster Space - Products</title>
</head>

<body class="area">
  <!-- Header -->
  <header id="happy">
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
      <h1>Your Order History</h1>
    </div></header>

    <section class="section featured">
    <div class="product-center container">
  <?php

    if(!($con = mysqli_connect("localhost","root","","posterspace")))
        {  
            die("Could not connect");
        }
    $con = mysqli_connect("localhost","root","","posterspace");
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM orders WHERE customerID = '$id'";
    $result = mysqli_query($con, $sql);
    global $row;
    while($row = mysqli_fetch_assoc($result)) {
     echo($row["date"]);
      echo("<br><br>");
      /*echo($row['image']);*/
      $str_arr = explode (",", $row["products"]); 
      
      foreach($str_arr as $prod){
        $selectproduct = "SELECT * FROM posters WHERE productID = '$prod'";
        $res = mysqli_query($con, $selectproduct);
        while($pro = mysqli_fetch_assoc($res)){
            echo "<div class='product'>";
      echo("<div class='product-header'>");
      echo '<img src="data:image/jpeg;base64,'.base64_encode( $pro['image'] ).'"/>';
      echo("</div>");
      echo("<div class='product-footer'>");
        echo("<a href='#'>");
        echo("<h3>".$pro["title"]."</h3>");
        echo("</a>");
        echo("<h4 class='price'>???".$pro["price"]."</h4></div></div><br><br>");}}}
        mysqli_close($con);
    ?>
</div>
    </section>
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
    