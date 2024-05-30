<?php
echo "Mulltidimensional Array in php";
/*Introduction
You have learned about arrays and loops in the previous lectures. Now we are good to go for some variety of arrays. In this lesson, we will introduce you to two-dimensional arrays (2D arrays) in PHP. We have discussed the arrays before containing one key against each value, but multidimensional arrays consist of arrays within arrays. So, there can be multiple keys against a value in multidimensional arrays.

What is two-dimensional arrays (2D array) in Php
A two-dimensional array is an array of arrays. For your better understanding, we would like to define the three-dimensional array as an array of arrays of arrays.

So, dimensionality refers to the number of arrays within arrays.

The general syntax of 2d array in Php is;
array (
    array (elements...),
    array (elements...),
   ...
)
Note: You can use the count function instead of specifying the number of rows and columns.

Note: Var_dump() function in Php displays the structure of an array.
*/
$multiDim = array(
    array(2, 5, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 1)
);

echo var_dump($multiDim);
echo "<br>";
echo $multiDim[0][0]; //2
echo $multiDim[0][1]; //5

echo "<br>";

for ($i = 0; $i < count($multiDim); $i++) {
    for ($j = 0; $j < count($multiDim[$i]); $j++) {
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

$vehicles = array(
    array("Suzuki", 21, 12),
    array("Honda", 12, 9),
    array("BMW", 22, 1),
    array("Corolla", 17, 12)
);