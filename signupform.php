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
  <title>Poster Space - Sign Up</title>
</head>

<body class="area">
  <!-- Header -->
  <header id="signup">
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
            
          </ul>
        </div>

    </nav>
    <div class = "title">
        <h1>Sign-Up</h1>
    </div></header>
    <form action="signup.php" method="post" class="form">
    
      <div class="form-control">
        <label for="username">Username</label>
        <input type="text" placeholder="" id="username" name="username" />
        <i class='bx bxs-check-circle' ></i>
        <i class='bx bxs-error-circle'></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="email">Email</label>
        <input type="email" placeholder="" id="email" name="mail" />
        <i class='bx bxs-check-circle' ></i>
        <i class='bx bxs-error-circle'></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="password">Password</label>
        <input type="password" placeholder="" id="password" name="pw"/>
        <i class='bx bxs-check-circle' ></i>
        <i class='bx bxs-error-circle'></i>
        <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="password2">Re-type password</label>
        <input type="password" placeholder="" id="password2"/>
        <i class='bx bxs-check-circle' ></i>
        <i class='bx bxs-error-circle'></i>
        <small>Error message</small>
      </div>
      <button class="btn">Sign Up</button>
      <br><br>
      <p>Already have an account? <a href="account.php"> Log in!</a></p>
    </form>
  
  
  
    <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
  <script>
    const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
var val1 = true;
var val2 =true;
var val3= true;
var val4= true;
form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
  if (val1 && val2 && val3 && val4) e.currentTarget.submit();
});

function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
    val1= false;
	} else {
		setSuccessFor(username);
    val1= true;
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
    val2 = false;
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
    val2 =false;
	} else {
		setSuccessFor(email);
    val2 = true;
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
    val3 = false;
	} else {
		setSuccessFor(password);
    val3 = true;
	}
	
	if(password2Value === '') {
		setErrorFor(password2, 'Password2 cannot be blank');
    val4= false;
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords do not match');
    val4 = false;
	} else{
		setSuccessFor(password2);
    val4 = true;
	}
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