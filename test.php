<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset ="UTF-8">
        <meta name ="viewport" content = "width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>
            <h3>Arithmethic Logic</h3>
        </p>
    </body>
</html>


<?php
$a = 15;
$b =4;

$x = $a + $b; // Addition = 19
$x = $a - $b; // Subtraction = 11
$x = $a / $b; // Division = 3.75
$x = $a * $b; // Multiplication = 60
$x = $a % $b; // Modulus (Reminder) = 3
$x = $a ** $b; // Exponentiation = 50,625

echo $x;

echo "<hr><h3>Koperasi PKT</h3>";

$a = 4; // Item price
$b = 5; // Quantity
$c = 0.06; // sst
$d = 2; //discount

$total = $a * $b;
$price_after_disc = $total - $d;
$sst_amount = $price_after_disc * $c;
$final_price = $sst_amount + $price_after_disc;

echo $final_price;

// using shorthand assignment operators
echo "<hr><h3>shorthand assignment operators</h3>";

$x = 15; // assigns the value 15
$x += 15; // addition assigment (x = x + 15)
$x -= 15; // subtraction assigment (x = x - 15)
$x *= 15; // multiplication assigment (x = x * 15)
$x /= 15; //division assigment (x = x / 15)
$x %= 15; // modulus assigment (x = x % 15)

$ao = 15;
$ao *= 15;
// $ao += 15;
// $ao -= 15;
// $ao *= 15;
// $ao /= 15;
// $ao %= 15;

echo "result" , $ao;

//using comporison operatos
echo "<hr><h3>comparison operators</h3>";

echo "Value x=90; <br> Value y=90 <br><br>";
$x = 90;
$y = 90;

if ($x >= $y) {
    echo "True";
} else {
    echo "False";
}


//example usage
echo "<hr><h3>Example</h3>";
$age = 20;
$hasLicense = true;
// Comparison: ($age >= 18)
// Logical: &&
if ($age >= 18 && $hasLicense == true) {
echo "You are allowed to drive.";
}


//example if statement
echo "<hr><h3> if statement</h3>";
$language = "en";
$name = "najala";
if ($language == 'en'){
    echo "Hi, Good Morning " .$name;
}

// if else statement
echo "<hr><h3> if else statement</h3>";
$language = "my";
$name = "najala";
if ($language == 'en') {
    echo "Hi, Good Morning " .$name;
    } else {
    echo "Hey ".$name;
    }

// try it
echo "<hr><h3> try it</h3>";

//if... else if... else
echo "<hr><h3> if...else if...else</h3>";
$language = "my";
$name = "najala";
if ($language == 'en') {
    echo "Hi, Good Morning " . $name;
    } elseif ($language == 'my') {
    echo "Hai, Selamat Pagi " . $name;
    } else {
    echo "Hey " . $name;
    }

//if...else if...else 
echo "<hr><h3> language statement</h3>";
$language = "ara";
$name = "najala";
if ($language == 'en') {
    echo "Hi, Good Morning " . $name;
    } elseif ($language == 'ara') {
    echo "mrhban, sabah alkhayri " . $name;
    } else {
    echo "Hey " . $name;
    }


//if else simple
echo "<hr><h3> if else simple statement</h3>";
$status = ($age >= 18) ? "Eligible" : "Not Eligible";
echo "Voting Status: " . $status;

//exercise 2
echo "<hr><h3> exercise 2 </h3>";

?>