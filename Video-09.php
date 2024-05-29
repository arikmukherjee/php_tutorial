<?php
//operators in php
$a = 5;
$b = 10;
echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $a ** $b;
echo "<br>";
echo $a += $b;
echo "<br>";
echo var_dump($a == $b); //false
echo "<br>";
$a = 5;
echo var_dump($a > $b); //false
echo "<br>";
echo var_dump($a < $b);
echo "<br>";
echo var_dump($a <= $b);
echo "<br>";
echo var_dump($a >= $b);
echo "<br>";
echo var_dump($a != $b);
echo "<br>";
echo var_dump($a <> $b); //<> and != are same

$x = true;
$y = false;
echo "<br>";
echo var_dump($x and $y); //false
echo var_dump($x && $y); //false
echo "<br>";
echo var_dump($x or $y); //true
echo var_dump($x || $y); //true
echo "<br>";
echo var_dump(!$x); //false
?>