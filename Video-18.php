<?php
echo "Associative Arrays / Indexed Arrays";

$favCol = array('subham' => 'red', 'harry' => 'green', 'rohan' => 'blue',8=>'this');
echo '<br>';
echo $favCol['subham']; //red
echo '<br>';
echo $favCol[8]; //this

foreach ($favCol as $key => $value) {
    echo '<br>';
    echo "favourite color of $key is $value";
    echo '<br>';
}

foreach ($favCol as $value) {
    echo '<br>';
    echo $value;
    echo '<br>';
}
?>