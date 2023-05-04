<!DOCTYPE html>
<html lang = "en">

<head>

<link rel="stylesheet" href = "Question8.css">
<title>Find an Animal</title>
</head>

<body class = "body">
<div class = "find-cat-dog">
<div class = "header">
	<div class = "headerC1" ><h1> Dog and Cat Adoption Center </h1> </div>
	<div>
    <a  href = "index.php" > <img class = "logo" src = "Logo.png" alt = "logo"> </a>
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
          <a class="activeList" href="findPet.php">Find a Dog/Cat</a>
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

<div class = "contentArea">

    <div class = "find-a-dog">
        <form onsubmit ="return validate()" method="POST">

            <fieldset>
                <legend>Find a dog/cat</legend>
                
                <input name ="dogInput"id = "dogInput" type="checkbox">Dog 
                <input name ="catInput" id = "catInput" type="checkbox">Cat <br>
             	Breed:<input name ="breedInput"id = "breedInput" type="text"> <input id ="breedAny" type = "checkbox"> Any <br>
				Prefered Age:<input name ="ageInput"id = "ageInput" type="text"> <input id = "ageAny" type = "checkbox"> Any <br> 
				Prefered Gender: <input name ="genderInput" id = "genderInput" type="text"><input id = "genderAny" type = "checkbox"> Any <br>
				
                <p>Does it need to get along with:<br>
					<input name = "adog" id = "getAlongDogs" type="checkbox" checked >dogs 
					<input name = "acat" id = "getAlongCats" type="checkbox" checked >cats 
					<input name = "akid" id = "getAlongkids" type="checkbox" checked >small children 
				</p>
                
                <p> Thank you!</p>
	          
            </fieldset>
			
			<input type="submit" value = "Submit">
			<input type="reset" value = "Reset">

        </form>
		
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

        <?php

        if(isset($_SESSION['name'])){

        
        // Get the search inputs from the form
        $dogInput = isset($_POST['dogInput']) ? 'Dog' : '';
        $catInput = isset($_POST['catInput']) ? 'Cat' : '';
        $breedInput = isset($_POST['breedInput']) ? $_POST['breedInput'] : '';
        $ageInput = isset($_POST['ageInput']) ? $_POST['ageInput'] : '';
        $genderInput = isset($_POST['genderInput']) ? $_POST['genderInput'] : '';
        $getAlongDogs = isset($_POST['getAlongDogs']) ? 'Dogs' : '';
        $getAlongCats = isset($_POST['getAlongCats']) ? 'Cats' : '';
        $getAlongkids = isset($_POST['getAlongkids']) ? 'Small children' : '';

        // Construct the search input string
        $searchInputString = "1:$dogInput:$catInput:$breedInput:$ageInput:$genderInput:$getAlongDogs:$getAlongCats:$getAlongkids";

        // Open the file for reading
        $filenamePets = "pets.txt";
        $fileReader = fopen($filenamePets, "r");

        // Initialize the output string
        $outputString = "";

        // Iterate over each line in the file and compare the search inputs
        while (($line = fgets($fileReader)) !== false) {
            $fieldsComp = explode(":", $line);

            $searchCompString = "$fieldsComp[1]:$fieldsComp[2]:$fieldsComp[4]:$fieldsComp[5]:$fieldsComp[6]:$fieldsComp[7]:$fieldsComp[8]";

            if ($searchInputString == $searchCompString) {
                $outputString .= "<p>$line is available to purchase!</p>";
            }
        }

        fclose($fileReader);

        // Output the results in an h1 element
        echo("<h1>Search Results:</h1>");
        echo($outputString);

      }
      else{
        header("Location: logIn.php");
      }
        ?>

   
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


</div>
<script src = "DateAndTime.js"></script>
<script src = "FindDogCat.js"></script>

</body>




</html>