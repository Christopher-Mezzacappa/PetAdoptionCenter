<!DOCTYPE html>
<html lang = "en">
<head>
  <link rel="stylesheet" href="Question8.css">
  <title>Contact Us</title>
</head>
<body class="body">
  <div class="home">
    <div class="header">
      <div class="headerC1">
        <h1>Dog and Cat Adoption Center</h1>
      </div>
      <div>
        <a href="index.php"><img class="logo" src="Logo.png" alt="Screen%20Shot%202023-02-08%20at%208"></a>
        <p id ="time"></p>
      </div>
    </div>
    <div class="side-menu">
      <p class="pMenu">Menu  </p>
      <ul>
        <li>
          <a href="index.php">Home Page</a>
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
          <a class="activeList" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
    <div class="contentArea">
      <div id="privacyMessage">
        <p>Contact Infromation:</p>
        <ul>
          
          <li>Name: Christopher Mezzacappa</li>
          <li>Id: 40249451</li>
          <li>Mobile Phone: 438-882-1007</li>
          <li>Phone: 514-975-8855 ext.302</li>
          <li>Email:c_mezzac@concordia.live.com</li>
        </ul>
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
    
  
</div>
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