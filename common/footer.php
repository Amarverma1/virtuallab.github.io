
<body id="top" onload="myFunction()" style="margin:0;">
  <div style="display:block;" id="myDiv" class="animate-bottom">


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
      <img src="assets/images/images/telephone.png" alt="">

      <a class="fixed-btn" aria-label="Chat on WhatsApp" href="https://wa.me/917355295772">
        <img alt="Chat on WhatsApp" src="assets/images/images/whatsapp1.png" /><a />


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
  

  <!--- ionicon link-->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>