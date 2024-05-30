<?php
echo "ForEach loops.";
$arr = array(1,2,3,4,5,6,7);

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
// }

foreach($arr as $value){
    echo $value;
}
?>