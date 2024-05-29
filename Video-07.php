<?php
/*
php Data types 
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
 */

//String
$name = "Arik";
echo $name;

//Integer
$income = 454;
$depts = -458;
echo $income;
echo "<br>";
echo $depts;

//Float
$income = 45.6;
echo $income;

//Boolean
$x = true;
echo $x;
echo var_dump($x); //bool(true)

//Object


//Array
$nums = array(1,2,3,4,5);
echo var_dump($nums);
echo "<br>";
echo var_dump($nums[0]);

//NULL
$name = NULL; // NULL meas no value is assigned.
echo var_dump($name);
?>