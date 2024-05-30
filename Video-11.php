<?php
$age = 67;
//type 1
switch ($age):
    case 12:
        echo "You are 12 years old.";
        break;
    case 56:
        echo "You are 56 years old.";
        break;
    case 67:
        echo "You are 67 years old.";
        break;
    default:
        echo "You are 1 year old.";
endswitch;

//type 2
switch ($age) {
    case 12:
        echo "You are 12 years old.";
        break;
    case 56:
        echo "You are 56 years old.";
        break;
    case 67:
        echo "You are 67 years old.";
        break;
    default:
        echo "You are 1 year old.";
}
