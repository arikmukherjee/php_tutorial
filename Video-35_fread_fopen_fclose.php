<!--SOURCE: https://www.codewithharry.com/videos/php-tutorials-in-hindi-35/-->

<?php
// syntax: fopen("filename","mode");
// https://www.php.net/manual/en/function.fopen.php
$fptr = fopen("myfiles.txt", "r");
// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file.Please enter a valid filename");
}
// https://www.php.net/manual/en/function.fread
$content = fread($fptr, filesize("myfiles.txt"));
// filesize("myfile.txt") counts number of characters.
// https://www.php.net/manual/en/function.fclose.php
fclose($fptr);
echo $content;

?>
