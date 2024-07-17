<?php
session_start();
include 'backend/db.php'; // Include your database connection file
require_once 'vendor/autoload.php'; // Include Twilio SDK

use Twilio\Rest\Client;

$sid    = ""; // Your Account SID from www.twilio.com/console
$token  = "";  // Your Auth Token from www.twilio.com/console

$twilio = new Client($sid, $token);

$service_sid = ""; // Your Service SID
$phone_number = "+917355295772"; // The phone number you want to verify

try {
    $verification = $twilio->verify->v2->services($service_sid)
                                        ->verifications
                                        ->create('917355295772', "sms");
    echo "Verification started successfully!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

//

// Function to generate OTP
function generateOTP() {
    return rand(100000, 999999);
}

// Function to send OTP via Twilio Verify API
function sendOTP($serviceSid, $phone) {
    global $twilio;

    try {
        $verification = $twilio->verify->v2->services($serviceSid)
                                           ->verifications
                                           ->create($phone, "sms");
        return $verification->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send_otp'])) {
    $email = $_SESSION['email'];

    // Fetch phone number from the database
    $query = "SELECT phone FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $phone = $user['phone'];
        
        // Send OTP
        $verificationSid = sendOTP($serviceSid, $phone);
        
        if ($verificationSid) {
            $_SESSION['message'] = "OTP sent to your mobile number.";
        } else {
            $_SESSION['error'] = "Failed to send OTP. Please try again.";
        }
    } else {
        $_SESSION['error'] = "User not found.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verify_otp'])) {
    $enteredOtp = $_POST['otp'];
    $phone = $_SESSION['phone']; // Assuming phone number is stored in session

    // Verify OTP
    try {
        $verification_check = $twilio->verify->v2->services($serviceSid)
                                                 ->verificationChecks
                                                 ->create($enteredOtp, array('to' => $phone));
        
        if ($verification_check->status == "approved") {
            $_SESSION['authenticated'] = true;
            header('Location: users/dashboard.php'); // Redirect to the dashboard or desired page
            exit;
        } else {
            $_SESSION['error'] = "Invalid OTP. Please try again.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="./assets/css/login.css">  
<script src="assets/js/loader.js"></script>
  
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


          <a href="school.php" class="btn has-before" id="openLoginFormBtn">
            <span class="span">School</span>

            <!-- <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>-->
          </a>

          <a href="educators.php" class="btn has-before" id="openLoginFormBtn">
            <span class="span">Educators</span>

            <!-- <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>-->
          </a>

          <a href="login.php" class="btn has-before" id="openLoginFormBtn">
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

  </div>
  
 <main>
 <div class="otp-form">
    <div class="container-form">
        <h3>Verify OTP</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p style='color: green;'>{$_SESSION['message']}</p>";
            unset($_SESSION['message']);
        }
        if (isset($_SESSION['error'])) {
            echo "<p style='color: red;'>{$_SESSION['error']}</p>";
            unset($_SESSION['error']);
        }
        ?>
        <form action="otp.php" method="POST">
            <input type="text" name="otp" placeholder="Enter OTP" required>
            <div>
                <button class="sign-button" type="submit" name="verify_otp">Verify OTP</button>
            </div>
        </form>
        <form action="otp.php" method="POST">
            <div>
                <button class="sign-button" type="submit" name="send_otp">Resend OTP</button>
            </div>
        </form>
    </div>
 </main>
</div>
</body>
</html>
    <?php include 'common/footer.php'; ?>




 