<?php
session_start();
session_destroy(); // This will destroy the session
header("Location: logOutMain.php"); // This will redirect the user to the login page
exit;
?>