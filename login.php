<?php
session_start();
include 'backend/db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];

  // Check if email exists in the database
  $query = "SELECT * FROM users WHERE email = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param('s', $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // Email exists, redirect to OTP page
    $_SESSION['email'] = $email;
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    header('Location: otp.php');
  } else {
    // Email does not exist, redirect to sign-up form
    $_SESSION['email'] = $email;
    header('Location: signup.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--- primary meta tag-->
    <title>NaivoTech - Virtual Innovation Lab</title>
    <meta name="title" content="NaivoTech - The Best Program to Enroll for Exchange">
    <meta name="NaivoTech aims to integrate experiential learning and technology at the core of academic curricula by
              establishing Innovation Labs in schools. These labs provide students with hands-on opportunities to work
              with tools and equipment, enabling them to better understand the what, how, and why aspects of STEM
              subjects"
      content="ntvilabs, vil, villabs, Vilabs, Virtual Innovation lab, Naivotech,
   naivotechlab, vilnaivotech,vilnaivo, vilnaivo, ntvillabs, villabs , labs, virtual labs, villabs, lab, virtual, labinnovtion, vilabs ">


    <link rel="stylesheet" href="assets/css/styl.css">
    <link rel="stylesheet" href="assets/css/login.css">


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script_main.js" defer></script>
    
    

    <!--- ionicon link-->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- 
    - custom css link
  -->



    <!-- 
  - google font link
-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
      rel="stylesheet">
  </head>


  <body id="top" onload="myFunction()" style="margin:0;">
  <!--LOADER-->
    <div class="letter-container" id="loader">
      <div class="letter-n">
          <div class="vertical left"></div>
          <div class="diagonal"></div>
          <div class="vertical right"></div>
      </div>
  </div>



  <!-- 
    - #HEADER
  -->
  <div style="display:none;" id="myDiv" class="animate-bottom">


    <header class="header" data-header>
      <div class="container">

        <a href="#" class="logo">
          <img src="./assets/images/transparentImage.png" width="162" height="50" alt="NaivoTech logo">
        </a>

        <nav class="navbar" data-navbar>

          <div class="wrapper">
            <a href="#" class="logo">
              <img src="./assets/images/transparentImage.png" width="162" height="50" alt="VIL logo">
            </a>

            <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
              <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

<!-- <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="#top-skills" class="navbar-link" data-nav-link>Courses</a>
            </li>

            <li class="navbar-item">
              <a href="#about" class="navbar-link" data-nav-link>About</a>
            </li>

            <li class="navbar-item">
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>

            <li class="navbar-item">
              <a href="#Contact" class="navbar-link" data-nav-link>Contact</a>
            </li>

          </ul>
-->
        </nav>

        <div class="header-actions">
          <!-- <li class="navbar-item">
          <h2 class="iam">I'm</h2>
        </li>-->

          <!-- <button class="header-action-btn" aria-label="toggle search" title="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>-->

          <!-- <button class="header-action-btn" aria-label="cart" title="Cart">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>-->

        <a href="school.php" class="btn has-before" target="_blank">
          <span class="span">School</span>

          <!-- <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>-->
        </a>

        <a href="educators.php" class="btn has-before" >
          <span class="span">Educators</span>

          <!-- <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>-->
        </a>

        <a href="login.php" class="btn has-before" target="_blank">
          <span class="span">Student</span>

          <!-- <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>-->
        </a>

<!-- <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
            <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
          </button>-->

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>

      </div>
    </header>

<!--===== login form =========-->
<main>
 <div class="login-form">
    <div class="container-form">
      <h3>Sign in to Virtual Innovation Lab</h3>
      <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Enter your email" required>
        <div>
          <button class="sign-button" type="submit">Sign In</button>
        </div>
  
      </form>
      <button class="gsi-material-button">
  <div class="gsi-material-button-state"></div>
  <div class="gsi-material-button-content-wrapper">
    <div class="gsi-material-button-icon">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
        <path fill="none" d="M0 0h48v48H0z"></path>
      </svg>
    </div>
    <span class="gsi-material-button-contents">Sign in with Google</span>
    <span style="display: none;">Sign in with Google</span>
  </div>
</button>
    </div>
  </div>

</main>



<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <!-- 
    - custom js link
  -->
  

  <!--- ionicon link-->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <?php include 'common/footer.php';?>
</body>


