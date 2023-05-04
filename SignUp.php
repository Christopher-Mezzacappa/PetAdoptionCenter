<!DOCTYPE html>
<html lang = "en">
<head>
<link rel="stylesheet" href="logIn-SignUp.css">
  <title>Home</title>
 
</head>



<body class="body">

<div id="login" >
<h1 id="login_text">Sign Up</h1>
<div id ="info">
<form method="POST">
<ul>
<li> <p>Username:</p> </li>
<li> <input type="text" name = "usernameS"/> </li>
<li> <p>Password:</p> </li>
<li> <input type="text" name = "passwordS"/> </li>
</ul>

</div>
<div id="sub">
<input type = "submit" name = "submit" value="Submit">
</form>
</div>
</div>
<div id="rules">
    <ul>
        <li> Username: Letters and Digits only</li>
        <li> Password must contain Letter and Digits Only</li>
        <li> Password must have 1 letter and 1 Digit </li>
        <li> Password must be 4 characters or longer</li>
    </ul>

</div>


<div id="sign-up">
<p>Click <a href ="logIn.php"> here </a> to Log in </p>

<?php
    $username = $_POST['usernameS'];
    $password = $_POST['passwordS'];

    //opening a file
    $file = fopen("users.txt","a");

    if($username !=""){

    if(strlen($password)>4 && preg_match('/[A-Za-z]/',$password)&& preg_match('/\d/', $password) && preg_match('/^[A-Za-z0-9]+$/', $username)){
        
            $file = fopen("users.txt","a");
            fwrite($file,"$username:$password\n");
            fclose($file);
            echo("<p>Success</p>");

    }
    else{
        header("Location: SignUpError.php");
    }
}
  
?>

</div>

</body>
</html>