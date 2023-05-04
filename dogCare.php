<!DOCTYPE html>
<html lang = "en">
<head>
  <link rel="stylesheet" href="Question8.css">
  <title>Dog Care</title>
</head>
<body class="body">
  <div class="home">
    <div class="header">
      <div class="headerC1">
        <h1>Dog and Cat Adoption Center</h1>
      </div>
      <div>
        <a href="index.php"><img class="logo" src="Logo.png" alt="Logo"></a>
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
          <a class="activeList" href="dogCare.php">Dog Care</a>
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
      <div class="dogCare">
        <h1>Dog Care Page</h1>
      </div>
      <div class="dgImg1"><img src="SingleDog.png" class="dgImg" alt="SingleDog"></div>
      <div class="pWrapper">
        <p>This page includes links on tips,tricks and different ways to take care of your dog while he is feeling sick,sad or hurt.</p>
        
         
	   <p> <a class="dog-links" href="https://www.bowmanvet.com/blog/top-10-signs-your-dog-may-be-sick-and-what-you-can-do/"> General Care</a> </p>
       <p> <a class="dog-links" href="https://www.petmd.com/dog/care/evr_dg_managing_pain_in_dogs">  My dog is sick</a> </p>
       <p> <a class="dog-links" href="https://www.petmd.com/dog/care/evr_dg_managing_pain_in_dogs"> My dog is hurt </a> </p>
       <p> <a class="dog-links" href = "https://www.eatingwell.com/article/7669367/signs-your-dog-is-stressed-or-sad/">     My dog is sad</a> </p>
        
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