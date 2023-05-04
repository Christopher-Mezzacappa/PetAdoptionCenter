<!DOCTYPE html>
<html lang = "en">
<head>
  <link rel="stylesheet" href="Question8.css">
  <title>Give Away</title>
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
          <a href="dogCare.php">Dog Care</a>
        </li>
        <li>
          <a href="catCare.php">Cat Care</a>
        </li>
        <li>
          <a class="activeList" href="giveAway.php">Have a pet to give away?</a>
        </li>
        <li>
          <a href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
    <div class="forumGiveAway">
      <form onsubmit ="return validate()" method="POST">
        <fieldset>
          <legend>Give Away</legend> 
          <input name ="dog" type="checkbox" id = "dog2">Dog 
          <input name = "cat" type="checkbox" id = "cat2">Cat<br>
          Breed: <input name ="breed" id ="breed2" type="text">
          <input name ="mixed" type ="checkbox" id = "mixed">Mixed<br>
          <p>Prefered Age: <input name ="age" id ="age2" type="text"></p>
          <p>Prefered Gender: <input name ="gender" id = "gender2" type="text"></p>
          <p>Does it need to get along with:
            <input name ="gad" checked type="checkbox" id = "getAlongD2">dogs 
            <input name= "gac" checked type="checkbox" id = "getAlongC2">cats 
            <input name = "gachild" checked type="checkbox" id = "getAlongK2">small children
          </p>
          <p>Suitable for family with small children 
            <input name ="familyfriendly" type="checkbox"></p>
          <p>Comments:</p>
          <textarea class="commentBox"></textarea>
          <p>Current owner: <input name ="owner" type="text" placeholder="FirstName lastName" id = "owner"></p>
          <p>Email: <input name ="email" type="text" placeholder="JohnDoe@concordia.ca" id = "email"></p>
          <input type="submit" value="Submit"> 
          <input type="reset" value="Reset">

          <?php

            if (isset($_COOKIE['count'])) {
                $count = $_COOKIE['count'];
            } else {  
                $count = 0;
            }


            $count += 1;
            
            setcookie("count", $count, time()+3600*24*30); 

            
            $dogIn = isset($_POST['dog']) ? 'Dog' : '';
            $catIn = isset($_POST['cat']) ? 'Cat' : '';
            $breedIn = isset($_POST['breed']) ? $_POST['breed'] : '';
            $mixedIn = isset($_POST['mixed']) ? 'Mixed' : '';
            $ageIn = isset($_POST['age']) ? $_POST['age'] : '';
            $genderIn = isset($_POST['gender']) ? $_POST['gender'] : '';
            $gad = isset($_POST['gad']) ? 'Dogs' : '';
            $gac = isset($_POST['gac']) ? 'Cats' : '';
            $gachild = isset($_POST['gachild']) ? 'Small children' : '';
            $friendly = isset($_POST['familyfriendly']) ? 'Yes' : 'No';
            $comments = isset($_POST['comments']) ? $_POST['comments'] : '';
            $ownerIn = isset($_POST['owner']) ? $_POST['owner'] : '';
            $emailIn = isset($_POST['email']) ? $_POST['email'] : '';

            // Open the file for writing
            $file = fopen("pets.txt", "a");

            // Construct the string to be written to the file
            $infoString = "$count;$dogIn:$catIn:$breedIn:$mixedIn:$ageIn:$genderIn:$gad:$gac:$gachild:$friendly:$comments:$ownerIn:$emailIn";
            
            // Write the string to the file and close it
            fwrite($file, $infoString . "\n");
            fclose($file);
            
            ?>

<div id="logInSource">
  <?php
    session_start();
    if (isset($_SESSION['name'])) {
      echo '<p><a href="logout.php">Log Out</a></p>';
    } else {
      echo '<p><a href="login.php">Log In</a></p>';
    }
  ?>





      


        </fieldset>
      </form>
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
  <script src = "GiveAway.js"></script>
</body>
</html>