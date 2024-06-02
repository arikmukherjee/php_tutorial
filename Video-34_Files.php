<!-- SOURCE: https://www.codewithharry.com/videos/php-tutorials-in-hindi-34/ -->

<?php

$a = readfile("myfiles.txt"); // returns number of characters.
echo $a;

readfile("myfiles.txt"); // does not return number of characters.
// readfile("image.jpg");
readfile("file.html");

?>