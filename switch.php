<?php
$favColor = "red";

switch ($favColor) {
    case "red":
        echo "Your favorite color is red!";
        break; // Stops the execution
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "purple":
        echo "Your favorite color is purple!";
        break;
    default:
        echo "Your favorite color is neither red nor blue or purple!";
}


echo "<hr><h3>Exercise</h3>";

$item = "Coffee";

switch ($item){
    case "Coffee":
        $price = "1.00";
        break;
    case "Tea":
        $price = "0.08";
        break;
    case "Cappucino":
        $price = "5.00";
        break;
    case "Orange":
        $price = "2.50";
        break;
    default:
        echo "Item not found";
}

echo "Item : " .$item."</br>";
echo "Price : ".number_format($price,2)."</br>";
echo "Total price : RM";
echo $price * 15;

echo "<hr><h3> For Loop</h3>";
for ($x = 0; $x <= 10; $x += 2){
    echo "Even number: $x <br>";
 }

echo "<hr><h3> While Loop</h3>";
$i = 1;
while ($i <= 5) {
    echo "The number is: $i <br>";
    $i++;
}

echo "<hr><h3> Do While Loop</h3>";
$b = 1;
do{
    echo "The number is: $b <br>";
    $b++;
} while ($b <= 5);


echo "<hr><h3> Foreach Loop</h3>";
//arry
$students = ["Abu", "Raj", "Nilam"];
foreach ($students as $name){
    echo "Student Name: $name <br>";
}


echo "<hr><h3>Multiplication Table for 5</h3>";
for ($i = 1; $i <= 12; $i ++){
    $result = $i * 5;
    echo "$i X 5 = $result.<br>";
 }

echo "<hr><h3>Defining the Function</h3>";
function greetStudent($name){
    echo "Hello $name, welcome to Full Stack class!<br>";
}
greetStudent("Najala");

echo "<hr><h3>Return Values</h3>";
function calculateTotal($price, $quantity){
    $total = $price * $quantity;
    return $total; //send the result back
}
$bill = calculateTotal(10, 5);
echo "Total Bill: RM ". $bill;
?>