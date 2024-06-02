<!-- SOURCE: https://www.codewithharry.com/videos/php-tutorials-in-hindi-36/ -->

<?php

$fptr = fopen("myfiles.txt", "r");
// echo fgets($fptr); //fgets() reads only 1 line from the file but not entire file.
// echo fgets($fptr);
// echo fgets($fptr); 
// echo var_dump(fgets($fptr));

/*
Reading a file line by line
while($a=fgets($fptr)){
    echo $a;
}
echo "End of the file has been reached";
*/

// echo fgetc($fptr); 
/*
Reading a file character by character
while($a=fgetc($fptr)){
    echo $a;
    break;
}
echo "End of the file has been reached";
*/
// Write a program which reads the content of a file until . has been encountered
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);

?>
