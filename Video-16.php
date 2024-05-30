<?php
function processMarks($marksArr){
    $sum=0;
    foreach ($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

$student = [45,98,65,25,56,25];
$totalMarks = processMarks($student);
echo $totalMarks;
?>