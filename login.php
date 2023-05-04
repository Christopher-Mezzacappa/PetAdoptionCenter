<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="logIn-SignUp.css">
  <title>Home</title>
</head>
<body class="body">
  <div id="login">
    <h1 id="login_text">Log In</h1>
    <div id="info">
      <form method="POST">
        <ul>
          <li><p>Username:</p></li>
          <li><input type="text" name="usernameLog"/></li>
          <li><p>Password:</p></li>
          <li><input type="password" name="passwordLog"/></li>
        </ul>
        <div id="sub">
      <input type="submit" name="submit">
    </div>
      </form>
    </div>
    
  </div>

  <div id="sign-up">
    <p>Click <a href="signUp.php">here</a> to Sign Up</p>

    <?php
      if (isset($_POST['submit'])) {
        $username = $_POST['usernameLog'];
        $password = $_POST['passwordLog'];

        $filename = "users.txt";
        $file = fopen($filename, "r");

        if ($file) {
          $loggedin = false;
          while (($line = fgets($file)) !== false) {
            $fields = explode(":", trim($line));
            $Checkusername = $fields[0];
            $Checkpassword = $fields[1];

            if ($Checkusername == $username && $Checkpassword == $password) {
              $loggedin = true;
              break;
            }
          }
          fclose($file);

          if ($loggedin) {
            session_start();
            $_SESSION["name"] = $username;
            header("Location: index.php");
          } else {
            echo "Invalid username or password";
          }
        }
      }
    ?>
  </div>
</body>
</html>
