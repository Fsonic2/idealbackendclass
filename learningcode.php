<?php
echo "my website <br>";

$myName = 'evans';

var_dump($myName);

$yearsOfExperience = 5;

echo "<br>";

var_dump($yearsOfExperience);

$height = 6.1;

echo "<br>";

var_dump($height);

$isMale = true;
echo "<br>";
var_dump($isMale);

// array
$fullName = array("evans", "nduoma", "edike");
echo "<br>";
var_dump($fullName);
echo "<br>";
echo $fullName[1];

echo "<br>";

echo "my first name is $fullName[0];
and my surname is $fullName[1]";

// 28/10/2024
// NULL
$nothing = null;

echo "<br>";

var_dump($nothing);

// constant
define("pi", 3.142);
echo "<br>";
var_dump(pi);

// const gravityAcceleration = 10;
define("gravityAcceleration", 20);
echo "<br>";

var_dump(gravityAcceleration);
echo "<br>";
//31/10/2024
//operators
//arithmetic operators
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

//increment and decrement operators
$x++;

echo $x;

echo "<br>";

$x--;

echo $x;

//Assignment operators

$a = 100;
$b = 50;

// addition assignment
$a += $b;
echo "<br>";
echo $a;

//subtraction assignment
$a -= $b;

echo "<br>";
echo $a;

//logical operators
// Examples of logical operators are: AND(&&), OR(||), XOR, NOT(!)

if ($a == 100 && $b == 50 ) {
    echo "We are good to go.";
}
echo "<br>";
if ($a == 100 || $b == 50 ) {
    echo "We are good to go.";
}
echo "<br>";
if ($a == 100 xor $b == 55 ) {
    echo "We are good to go.";
}
echo "<br>";
if (!($a == 101) ) {
    echo "We are good to go.";
}

// 11/7/24

// PHP Conditional Statements
//  There are four notable conditional Statements in PHP viz

// If statement

// If... else statement

// if... elseif... else statement

// Switch statement


// IF STATEMENT
// _________________

// The if statement is one of the most important statements in PHP

// Example:
// ____________
echo "<br>"; 
if (7>3) {
    echo "Have a good day";
}

echo "<br>";
// variable declaration
$my_name = "abkpt";

$present_time = date (format: "H:i"); 

echo "<br>";

echo "present_time: $present_time <br>";





if ($present_time >= 00.00 && $present_time < 12.00) {
    echo "<h3> Good Morning, $my_name!  </h3>";
}

elseif ($present_time >= 12.00 && $present_time < 16.00) {
    echo "<h3> Good Afternoon, $my_name!  </h3>";
}
elseif ($present_time >= 16.00 && $present_time <= 23.59) {
    echo "<h3> Good Night, $my_name! </h3>";
}

else {
    echo "<h3> Hello, $my_name! </h3>";
    
}


// Switch Statement
// ________________

$today = date (format: "D");
echo "Today is: $today <br>"; 


switch ($today) {
    case "Mon":
        echo "Hello everybody, It's Monday. Have a great week!";
        break;
    case "Tue":
        echo "Hello everybody, it's Tuesday. Do have a splendid week!";
        break;
    case "Wed":
        echo "Hello everybody, it's Wednesday. Do have a wonderful week!";
        break;
    case "Thu":
        echo "Hello everybody, it's Thursday. Do have a miraculous week!";
        break;
    case "Fri":
        echo "Hello everybody, it's Friday. Do have a blessed week!";
        break;
    case "Sat":
        echo "Hello everybody, it's Saturday. Do have a fabulous week!";
        break;
    case "Sun":
        echo "Hello everybody, it's Sunday . Do have a glorious week!";
        break;
    default:
        echo "Sorry, this is not a day in the week!";
        break;

}

echo "<br>";


// Php loops

// --while loops

$j = 2;
while ($j < 8) {
    echo $j;
    $j++;
}

echo "<br>";

$j = 2;
while ($j <= 8) {
    echo $j;
    $j++;
}



// --do...while loops

// --for -loops

// foreach -loops
    

// 15/11/2024
// Arrays
$domesticAnimals = array('Dog', 'Cat', 'Horse', 'Goat', 'Cow');
$cities = ['Asaba', 'Warri', 'Ughelli', 'Sapele', 'Agbor'];

echo '<br>' . $domesticAnimals[0] . '<br>';

// indexed array
// associative array
// multi-dimensional array

// count
echo count($domesticAnimals) . '<br>';

//array_push
array_push($cities, 'Abraka', 'Effurun', 'Patani', 'Ozoro');

var_dump($cities);

$cities[2] = 'Ogwashi-uku';

echo '<br>';

var_dump($cities);

// associative array
$phone = ['brand'=>'iphone', 'model'=>'14 pro', 'color'=>'white', 'ROM'=>256];

echo '<br>';

var_dump($phone);

$phone["model"] = '15 pro';

echo '<br>';

var_dump($phone);

// function

function greetMe() {
    echo "<br> good afternoon";
}

greetMe();

echo "<br>";
echo "<br>";

function streetName ($sname) {
    echo "$sname Asaba. <br>";
}

streetName("DLA");
streetName("Ezenei");

echo "<br>";
echo "<br>";

function HomeAddress ($snumber, $sname) {
    echo "$snumber street $sname Asaba. <br>";
}

HomeAddress("5th" ,"DLA");
HomeAddress("8th","Ezenei");
?>