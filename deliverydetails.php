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
    <section class="section featured">
      <div class="title">
        <h1>Delivery Details</h1>
      </div>
  </header>
  <form action="confirm.php" method="post" class="form">
        <label for="fname">Name</label>
        <input type="text" placeholder="" id="fname" name="fname" />
        <label for="phone">Contact No.</label>
        <input type="number" id="phone" name="phone" required>

        <label for="adress1">Address Line 1</label>
        <input type="text" placeholder="" id="address1" name="address1" required/>
        <label for="adress2">Address Line 2</label>
        <input type="text" placeholder="" id="address2" name="address2"/>
        <label for="adress3">Address Line 3</label>
        <input type="text" placeholder="" id="address3" name="address3"/>
        <label for="pin">Pin-Code</label>
        <input type="number" placeholder="" id="pin" name="pin" required>
        <button class="btn">Make Payment</button>
      <br><br>
     </form>
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
    
    