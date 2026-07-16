<?php
$name = "Abu";
$marks = "90";

if ($marks >= 80 && $marks <= 100){
    $grade = "A";
} elseif ($marks >= 70 && $marks <= 79){
    $grade = "B";
} elseif ($marks >= 60 && $marks <= 69){
    $grade = "C";
} elseif ($marks >= 50 && $marks <= 59){
    $grade = "D";
} elseif ($marks <= 50 && $marks >= 0){
    $grade = "E";
} else {
    $grade = "Invalid Marks";
}

echo $grade."</br>";
echo $name;
?>