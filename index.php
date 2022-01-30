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
  <title>Poster Space - Home Page</title>
</head>

<body>
  <!-- Header -->
  <header id="home" class="header">
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

    <!-- Hero -->
    <img src="images/q1.png" alt="" class="hero-img" />

    <div class="hero-content">
      <h1>
        <span>Posters for</span>
        <span>every mood!</span>
      </h1>
      <a class="btn" href="products.html">Shop now</a>
    </div>
  </header>

 
    
    <!-- Product Banner -->
    <section class="section">
      <div class="product-banner">
        <div class="left">
          <img src="images/b1.png" alt="" />
        </div>
        <div class="right">
          <div class="content">
            <h1>
              <span>Shop Our</span>
              <span>Latest Creations</span>
            </h1>
            <a class="btn" href="products.html">Shop now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="section">
      <div class="testimonial-center container">
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            These posters inspire me everyday!
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="img-cover">
            <img src="./images/profile1.jpg" alt="" />
          </div>
          <h4>Sean</h4>
        </div>
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Definitely worth the money!
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="img-cover">
            <img src="images/profile2.jpg.crdownload" alt="" />
          </div>
          <h4>Ricochet</h4>
        </div>
        <div class="testimonial">
          <span>&ldquo;</span>
          <p>
            Awesome posters! Keeps me motivated all day. 
          </p>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="img-cover">
            <img src="./images/profile3.jpg" alt="" />
          </div>
          <h4>Boslin</h4>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="about.html">About</a>
          <a href="privacypolicy.html">Privacy Policy</a>
          <a href="terms.html">Terms & Conditions</a>
          <a href="contact.html">Contact Us</a>
          
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="account.html">My Account</a>
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
</body>

</html>