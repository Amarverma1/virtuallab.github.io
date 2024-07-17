<?php
session_start();
include 'backend/db.php';

if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    header("Location: main.php");
    exit;
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_SESSION['email'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $whatsapp = $_POST['whatsapp'];

  // Insert new user into the database
  $query = "INSERT INTO users (email, name, phone, whatsapp_phone) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->bind_param('ssss', $email, $name, $phone, $whatsapp);
  $stmt->execute();

  header('Location: otp.php');
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
   naivotechlab, vilnaivotech,vilnaivo, vilnaivo, ntvillabs, ntvillabs , ntlabs, virtual labs, villabs, lab, virtual, labinnovtion, ntvilabs ">


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

 <main>
 <div class="login-form">
    <div class="container-form">
      <h3>Welcome to Virtual Innovation Lab</h3>
      <form action="signup.php" method="POST">
        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <div class="checkbox">
          <input type="checkbox" id="whatsapp_same" onchange="toggleWhatsapp()">
          <label for="whatsapp_same">WhatsApp number same as mobile</label>
        </div>
        <input type="text" name="whatsapp" id="whatsapp_number" placeholder="WhatsApp number" required>
        <div>
          <button class="sign-button" type="submit">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
 </main>



 <script>
    function toggleWhatsapp() {
      var checkbox = document.getElementById('whatsapp_same');
      var whatsappInput = document.getElementById('whatsapp_number');
      if (checkbox.checked) {
        whatsappInput.value = document.querySelector('input[name="phone"]').value;
        whatsappInput.readOnly = true;
      } else {
        whatsappInput.value = '';
        whatsappInput.readOnly = false;
      }
    }
  </script>


<!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/')" style="display: none;">

<div class="footer-top section">
  <div class="container grid-list">

    <div class="footer-brand">

      <a href="#" class="logo">
        <img src="./assets/images/naivologo.png" width="250" height="90" alt="naivotech logo">
      </a>

      <p class="footer-brand-text">
        NaivoTech aims to integrate experiential learning and technology at the core of academic curricula by
        establishing Innovation Labs in schools.
      </p>

      <div class="wrapper">
        <span class="span">Add:</span>

        <address class="address">Ram Ram bank Chauraha Aliganj Lucknow</address>
      </div>

      <div class="wrapper">
        <span class="span">Call:</span>

        <a href="tel:+91 9653006686" class="footer-link">(+91) 7007362892, 9653006686</a>
      </div>

      <div class="wrapper">
        <span class="span">Email:</span>

        <a href="mailto:info@naivotech.com" class="footer-link">nfo@naivotech.com</a>
      </div>

    </div>

    <ul class="footer-list">

      <li>
        <p class="footer-list-title">Platform</p>
      </li>

      <li>
        <a href="#about" class="footer-link">About</a>
      </li>

      <li>
        <a href="#courses" class="footer-link">Courses</a>
      </li>

      <li>
        <a href="educators.html" class="footer-link">Educators</a>
      </li>

      <li>
        <a href="#" class="footer-link">Events</a>
      </li>

      <li>
        <a href="#" class="footer-link">Instructor Profile</a>
      </li>

      <li>
        <a href="#" class="footer-link">Purchase Guide</a>
      </li>

    </ul>

    <ul class="footer-list">

      <li>
        <p class="footer-list-title">Links</p>
      </li>

      <li>
        <a href="#Contact" class="footer-link">Contact Us</a>
      </li>

      <li>
        <a href="#" class="footer-link">Gallery</a>
      </li>

      <li>
        <a href="#newsletter" class="footer-link">News & Articles</a>
      </li>

      <li>
        <a href="#" class="footer-link">FAQ's</a>
      </li>

      <li>
        <a href="#" class="footer-link">Sign In/Registration</a>
      </li>

      <li>
        <a href="#" class="footer-link">Coming Soon</a>
      </li>

    </ul>

    <div class="footer-list">

      <p class="footer-list-title">Contacts</p>

      <p class="footer-list-text">
        Enter your email address to register to our newsletter subscription
      </p>

      <form action="backend\subscribe.php" id="newsletter" class="newsletter-form" method="post">
        <input type="email" id="email" name="email" placeholder="Your email" required class="input-field">

        <button type="submit" class="btn has-before">
          <span class="span">Subscribe</span>
          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </button>
      </form>
      <div id="successMessage" class="success-message" style="display:none;">You have successfully subscribed to
        the newsletter!</div>
    </div>

    <ul class="social-list">

      <li>
        <a href="https://www.facebook.com/NaivoTech/" class="social-link">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>

      <li>
        <a href="https://www.linkedin.com/company/naivotech/mycompany/" class="social-link">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
      </li>

      <li>
        <a href="https://www.instagram.com/naivotech/" class="social-link">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-youtube"></ion-icon>
        </a>
      </li>

    </ul>

  </div>

</div>
</div>
<div class="footer-bottom" style="background-color: #111111" ;>
<div class="container">
<p class="copyright" style="background-color: #111111" ;>
  Copyright 2024 All Rights Reserved by <a href="#" class="copyright-link">NaivoTech</a>
</p>
</div>
</div>

</footer>



<!-- 
- #BACK TO TOP
-->

<a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
<ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>


</div>

<!--========================================
FIXED Buttons
========================================-->

<div class="fixed-button">
<a href="#" class="fixed-btn one" >
<img src="assets/images/images/telephone.png" alt=""></a>

<a class="fixed-btn" aria-label="Chat on WhatsApp" href="https://wa.me/917355295772">
  <img alt="Chat on WhatsApp" src="assets/images/images/whatsapp1.png" /></a>


</div>

  
  <script>
  var myVar;
  
  function myFunction() {
    myVar = setTimeout(showPage, 000);
  }
  
  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
  }
  </script>
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script_main.js" defer></script>
  <script src="./assets/js/contact.js" defer></script>

  <!--- ionicon link-->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  
</body>
</html>  

