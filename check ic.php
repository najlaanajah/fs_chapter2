
<hr><h3>Check NRIC</h3>
<?php
$nric = "060815140982";

function extractIC($nric) {
    //Validate pastikan user masukkan 12 karakter ic
    if (strlen($nric) != 12) {
        return "Invalid IC Format. Please enter 12 character only";
    }

    //extract data
    $year = substr($nric,0,2);
    $month = substr($nric, 2,2);
    $day = substr($nric,4,2);

    // check gender
    $lastDigit = substr($nric,-1);
    $gender = ($lastDigit % 2 !=0) ? "Male" : "Female";
    echo $gender;

    //convert tahun
    $dob_year = ($year > 20) ? "19" . $year : "20" . $year;
    $currentYear = date("Y");
    $age = $currentYear - $dob_year;

    //place of birt
    $kod_negeri = substr($nric ,6,2);

    if (in_array($kod_negeri,['01','22','23','24'])){
        $negeri = "Johor";
    }elseif (in_array($kod_negeri,['11','45','46'])){
        $negeri = "Terengganu";
    }elseif (in_array($kod_negeri,['03'])){
        $negeri = "Kelantan";
    }elseif (in_array($kod_negeri,['14'])){
        $negeri = "Kuala Lumpur";
    }

    return"
    <strong>IC Number : </strong> $nric <br>
    <strong>DOB : </strong> $day - $month - $dob_year <br>
    <strong>Gender : </strong> $gender <br>
    <strong>Age : </strong> $age <br>
    ";



}

echo extractIC("060815140982");
?>


<hr><h3>Numeric Array</h3>
<?php
// Creating a numeric array
$colors = ["Red", "Green", "Blue"];

echo $colors[0]."<br>"; // Output: Red
echo $colors[2]."<br><br>"; // Output: Blue

$colors[] = "Pink";
$colors[0] = "Yellow";

// Looping through the array using for loop
for ($i = 0; $i < count($colors); $i++) {
    echo "Color: " . $colors[$i] . "<br>";
    }
?>

<hr><h3>Associative Array</h3>
<?php
// Syntax: "Key" => "Value"
$student_age = [
    "Abu" => 20,
    "Raj" => 22,
    "Nilam" => 19
];
//echo "Abu is " . $student_age["Abu"] . "years old.";

// Looping using foreach loop
foreach ($student_age as $name => $age) {
    echo "$name is $age years old.<br>";
}
?>

<hr><h3>Multidimensional Array</h3>
<?php
$students = [
    ["Abu", 20, "Perak"],
    ["Raj", 22, "Johor"],
    ["Nilam", 19, "Kedah"]
];
    // Accessing: [Row][Column]
    echo $students[0][0]."<br>"; // Output: Abu
    echo $students[2][2]."<br><br>"; // Output: Kedah

    foreach ($students as $data){
        echo "Name : ". $data[0] ."<br>Age : ".$data[1] ."<br>State : ".$data[2] ."<br><br>";
        echo "<hr>";
    }

?>