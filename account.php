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
  <title>Poster Space - Log In</title>
</head>

<body class="area">


  <!-- Header -->
  <header id="account">
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
             
          </ul>
        </div>

        <a href="#" class="cart-icon">
          <i class="bx bx-shopping-bag"></i>
        </a>

        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </nav>
    <div class = "title">
        <h1>Log In</h1>
    </div></header>
    <form action="login.php" method="POST" id="signupform" class="form">
     <div class="form-control">
        <label for="mail">Email</label>
        <input type="email" placeholder="" id="mail" name="mail"/>
        <i class='bx bxs-check-circle' ></i>
        <i class='bx bxs-error-circle'></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="pw">Password</label>
        <input type="password" placeholder="" id="pw" name="pw"/>
        <i class='bx bxs-check-circle' ></i>
        <i class='bx bxs-error-circle'></i>
        <small>Error message</small>
      </div>
     
      <button type="submit" class="btn">Log In</button>
      <br><br>
      <p>Don't have an account? <a href="signupform.php"> Sign-up now!</a></p>
    </form>
  
  
  
    <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
  
  <script>
    const form = document.getElementById('signupform');
    const email = document.getElementById('mail');
    const password = document.getElementById('pw');
  var val1 = true;
  var val2 = true;
form.addEventListener('submit', e => {
	e.preventDefault();

	checkInputs();
 
  if (val1 && val2) e.currentTarget.submit();
});

function checkInputs() {
	// trim to remove the whitespaces
  
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	
	
	
	if(emailValue === '') {
    val1 = false;
		setErrorFor(email, 'Email cannot be blank');
   
    
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
    val1= false;
	} else {
		setSuccessFor(mail);
    val1 = true;
    }
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
    val2=false;
	} else {
		setSuccessFor(password);
    val2 = true;
    
	}
  
	
	

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';

}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
}

  </script>
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

</body>
</html>