<!DOCTYPE html>
<html lang = "en">
<head>
  <link rel="stylesheet" href="Question8.css">
  <title>Privacy</title>
</head>
<body class="body">
  <div class="home">
    <div class="header">
      <div class="headerC1">
        <h1>Dog and Cat Adoption Center</h1>
      </div>
      <div>
        <img class="logo" src="Logo.png" alt="logo">
        <p id ="time"></p>
      </div>
    </div>
    <div class="side-menu">
      <p class="pMenu">Menu  </p>
      <ul>
        <li>
          <a class="activeList" href="index.php">Home Page</a>
        </li>
        <li>
          <a href="petsToSell.php">Browse Available Pets</a>
        </li>
        <li>
          <a href="findPet.php">Find a Dog/Cat</a>
        </li>
        <li>
          <a href="dogCare.php">Dog Care</a>
        </li>
        <li>
          <a href="catCare.php">Cat Care</a>
        </li>
        <li>
          <a href="giveAway.php">Have a pet to give away?</a>
        </li>
        <li>
          <a href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
    <div class="contentArea">
      <div id="privacyMessage">
        <p>Privacy Disclaimer:</p>
        <ul>
          
          <li>We will never sell your information</li>
          <li>We will never misuse your information</li>
          <li>No employee will ever ask for any credentials</li>
          <li>We are not responsible for any wrong information about the animals</li>
        </ul>
	</div>
      </div>
      <div id="logInSource">
  <?php
    session_start();
    if (isset($_SESSION['name'])) {
      echo '<p><a href="logout.php">Log Out</a></p>';
    } else {
      echo '<p><a href="login.php">Log In</a></p>';
    }
  ?>
    </div>
  
  <div class="footer">
    <div class="footer-content">
      <div>
        <p>Thank you checking the website!</p>
        <p>For more information: christophermezzacappa818@yahoo.ca</p>
        <p>Other than images used, All Rights Reserved</p>
      </div>
      <div class="privacy">
        <p><a href="privacy.php">Privacy Statement</a></p>
      </div>
    </div>
  </div>
  <script src = "DateAndTime.js"></script>
</body>
</html>