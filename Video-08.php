<?php
$name = "ARIK";
echo "<br>";
echo "The length of $name is " ,strlen($name);  //string length
echo "The length of string is ".strlen($name); // "." is used to concat
$sentence = "I am learning php";
echo "<br>";
echo str_word_count($sentence); //counts number of words in a sentence.
echo "<br>";
echo strrev($name); //reverse the string . //KIRA 
echo "<br>";
echo strpos($sentence,"am"); //2 //finds the position of the string.
echo "<br>";
echo str_replace("I am","Arik is",$sentence); //replaces string
echo "<br>";
echo str_repeat($name,10);
echo "<br>";
// echo rtrim("<pre>  this is php  </pre>")
echo "<pre>";
echo rtrim("  this is php  "); //removes spaces from right.
echo ltrim("  this is php  "); //removes spaces from left.
echo "</pre>";
?>