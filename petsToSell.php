<!DOCTYPE html>
<html lang = "en">
<head>
  <link rel="stylesheet" href="Question8.css">
  <title>Browse Available Pets</title>
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
          <a class="activeList" href="petsToSell.php">Browse Available Pets</a>
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
      <div id = "listOfPets">
        <ol class = "adoptionPageList">
          <li> <img  alt = "CatDogPic" class = "adoptionImages" src = "adopt1.png"></li>
          <li> <img alt = "CatDogPic" class = "adoptionImages" src = "adopt2.png"></li>
          <li> <img alt = "CatDogPic" class = "adoptionImages" src = "adopt3.png"></li>
          <li> <img alt = "CatDogPic" class = "adoptionImages" src = "adopt4.png"></li>
        </ol>

       
        <ol id ="list1">
          <li class = "adoptList">Dog:Insert</li>
          <li class = "adoptList">Age 4</li>
          <li class = "adoptList">Female</li>
          <li class = "adoptList"> Gets along with: dogs & small children</li>
          <li class = "adoptList"> Family Friendly of all ages </li>
          <li class = "adoptList"> Current owner: Dog and Cat Adoption Center </li>
        </ol>
    
        
        <ol id ="list2">
          <li class = "adoptList"> <strong>Dog: </strong> Brown Golden Retriever</li>
          <li class = "adoptList"> Age 1</li>
          <li class = "adoptList"> Male </li>
          <li class = "adoptList"> Not safe around small children </li>
          <li class = "adoptList"> Family Friendly of ages 7+</li>
          <li class = "adoptList"> Current Owner: Jane Doe 514-432-3143 </li>
        </ol>
        
        <ol id ="list3">
          <li class = "adoptList"> <strong> Cat: </strong> American Wirehair </li>
          <li class = "adoptList"> <strong> Age: </strong> 1 </li>
          <li class = "adoptList"> <strong> Sexe: </strong> 4</li>
          <li class = "adoptList">  Safe Around all ages </li>
          <li class = "adoptList"> Family Friendly</li>
          <li class = "adoptList"> <strong> Current Owner: </strong> Dog and Cat Adoption Center </li>
        </ol>

        <ol id ="list4">
          <li class = "adoptList" > <strong> Dog: </strong> French Poodle </li>
          <li class = "adoptList"> <strong> Age: </strong> 4</li>
          <li class = "adoptList"> <strong> Sexe: </strong> Female</li>
          <li class = "adoptList">  Safe Around all ages </li>
          <li class = "adoptList"> Family Friendly</li>
          <li class = "adoptList"> <strong> Current Owner: </strong> Sofia St-Pierre </li>
        </ol>

        <button id = "intrested1">Intrested</button>
        <button id = "intrested2">Intrested</button>
        <button id = "intrested3">Intrested</button>
        <button id = "intrested4">Intrested</button>
  
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