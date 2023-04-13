<?php

/**
 * What are the Data-Types in PHP?
 * 
 * * String
 * * Boolean
 * * Integer
 * * Double/Float
 * * Objects
 * * Arrays
 * * Null
 * * Resource
 */

$myString = 'Hello';
$name = 'Aarij';

// Cancatenation operator...

$helloMessage = $myString . ' ' . $name;
echo $helloMessage;

// Double quotes support special characters.
echo "\n\tMy other string";

// In JS and Ruby this was +
// Interpolation in JS `${}`
// Interpolation in Ruby "#{}"

// Interpolation! Curly braces are optional, but 
// can be used to show PHP that a name ends.
echo "\n\n\t{$myString} $name" . '!';

// Integers and Floats

$myInteger = 3;
$myFloat = 3.14;

echo "\n";

var_dump($myString);
var_dump($myInteger);
var_dump($myFloat);

$answer = $myInteger + $myFloat;
var_dump($answer);

$myBool1 = true;
$myBool2 = TrUe;
$myBool3 = TRUE;

$myBool4 = false;
$myBool5 = fAlSe;
$myBool6 = FALSE;

var_dump($myBool1);
var_dump($myBool6);

$myNull = NULL;
vaR_dUmP($myNull); // Even function names are not case sensitive...

// Arrays come in two flavours...
// 1) Indexed Arrays
// 2) Associative Array

$myArray1 = array(1, 2, 3);
$myArray2 = [1, 2, 3];

$myArray1[0];
array_push($myArray1, 4); // Add value at new index.
$myArray1[] = 5; // Add value at new index.

$myAssociativeArray1 = array(
    'key1' => 'My first value!',
    'key2' => FALSE
);
$myAssociativeArray2 = [
    'key1' => 'My first value!',
    'key2' => FALSE
];

$myAssociativeArray1['key2'];

$myAssociativeArray2['key3'] = NULL;

var_dump($myAssociativeArray2);

$myNewObj = new stdClass;
$myNewObj->name = 'Ann-Marie';
$myNewObj->school = 'Lighthouse Labs';

var_dump($myNewObj);
