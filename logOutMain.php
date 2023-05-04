<!DOCTYPE html>
<html lang = "en">
<head>
  <link rel="stylesheet" href="Question8.css">
  <title>Home</title>
 
</head>
<body class="body">
  <div class="home">
    <div class="header">
      <div class="headerC1">
        <h1>Dog and Cat Adoption Center</h1>
      </div>
      <div>
        <p>
          <a href="index.php"><img class="logo" src="Logo.png" alt="Screen%20Shot%202023-02-08%20at%208"></a>
        </p>
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

    
		<div> 
      <a  class = "button1" href = "#aboutUs"> About Us </a> 
      <div id="logInSource">
        <?php
            session_start();
            if (isset($_SESSION['name'])) {
            echo '<p><a href="logout.php">Log Out</a></p>';
            } else {
            echo '<p>Successfully Loged Out <br><a href="login.php">Log In</a></p>';
            }
        ?>
  
</div>
    </div>
		<div > <a class = "button2" href = "Donate.html">  Donate  </a> </div>


      <div class="homePicture"><img class="dogs" src="2Dog.png" alt="2Dog.png"></div>
      <div class="homePicture"><img class="catDog" src="CatandDog.png" alt="CatandDog"></div>
      <div class="aboutUs" id="aboutUs">
        <ol>
          <li>We're about helping animals find new loving homes</li>
          <li>We have a team of specialist to give the best care possible</li>
          <li>Our remission programs are the best in the country helping injured animals recover to 100%</li>
          <li>Each year we host two fundraisers to support local animal business and to buy new products for our animals</li>
          <li>We believe in safe and fun environment for all our animals</li>
          <li>We are located right by the Beef Gristle Mill</li>
        </ol>
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