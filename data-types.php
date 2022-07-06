<?php

// Single-line comment.
# Different single-line comment.

/*
 Multi-line

 comments!
 */

// STRINGS

$name = 'Heather';
$greeting = 'Hello, ';

$concatenatedString =  $greeting . $name; // . is the concatenation operator.
echo 'Concatenated example:', $concatenatedString;
echo "\n";

$interpolatedString = "$greeting $name"; // Double quotes allow for interpolation.
echo "Interpolated example: $interpolatedString";
echo "\n";

var_dump($interpolatedString);
echo "\n";

// NUMBERS

echo '\'3\' + 3: ', '3' + 3;
echo "\n";

var_dump('3' + 3);
echo "\n";

echo '\'3.5\' + 3: ', '3.5' + 3;
echo "\n";
var_dump('3.5' + 3);
echo "\n";

// BOOLEANS

$myTrue = TRUE;
$myFalse = fAlSe;
var_dump($myTrue);
echo "\n";
var_dump($myFalse);
echo "\n";

// NULL

$myNull = NuLL;
var_dump($myNull);
echo "\n";

// GENERIC OBJECT

$myObj = new stdClass(); // Creating a new "standard class" object.
$myObj->name = 'Eduardo'; // Assigning a property.
$myObj->title = 'student';

echo 'Name and title in $myObj: ', "$myObj->name is a $myObj->title";
echo "\n";

// ARRAYS

// INDEXED ARRAY:
$myArray = array(34, 17, true, FALSE, null, 'Hello!');
$myArray = [34, 17, true, FALSE, null, 'Hello!'];
var_dump($myArray);
echo "\n";
echo '$myArray value at index 2: ', $myArray[2];
echo "\n";

// ASSOCIATIVE ARRAY:
$myAssocArray = array(
    'name' => 'Amera',
    'title' => 'student'
);
$myAssocArray = [
    'name' => 'Amera',
    'title' => 'student',
    'hobbies' => ['programming', 'hiking']
];
var_dump($myAssocArray);
echo "\n";
echo '$myAssocArray value at key \'title\' ', $myAssocArray['title'];
echo "\n";
echo '$myAssocArray second hobbie: ', $myAssocArray['hobbies'][1];
echo "\n";
