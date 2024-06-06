<!-- SOURCE: https://www.codewithharry.com/videos/php-tutorials-in-hindi-39/ -->

<?php
// What is a session?
// Used to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = "Arik";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";
?>
