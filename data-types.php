<?php
// Comments! Can be two forward-slashes...
# An octothorpe / hashtag!

/*
For multi-line
slash and asterisks!
*/

// Strings
$myString = 'Hello,';
$myS = 'test';
// Double-quoted strings allow for interpolation!
$myDoubleQuoteString
 = "{$myS}tring Bob!";

echo $myDoubleQuoteString, "\n";

// Concatenation character: .
echo 3 . 3, "\n"; // 33
echo 3 + '3', "\n"; // 6

// Integers and Floats
$myInt = 3;

// Use type-casting to force PHP to convert a value...
$myTypeCastedInt = (Integer)'4';
var_dump($myTypeCastedInt);

echo '3.14 + 6 = ' . (3.14 + 6), "\n";

// Arrays!

// Function Syntax
$functionSyntaxArray
 = array(1, 2, 3, 4, 5);
var_dump($functionSyntaxArray);

// Square-Bracket Syntax
$squareBracketSyntaxArray
 = [1, 2, 3, 4, 5];
var_dump($squareBracketSyntaxArray);

// Indexed Arrays; defaults to numbers as keys, starting at zero.
$indexArray
 = array('Dog', 'Cat', 'Fish');
var_dump($indexArray);
echo 'Index value 1: '.$indexArray[1], "\n";

// Associative Arrays
$assocArray
 = array(
    'name' => 'Sarah',
    'age'  => 34,
    'hobbies' => [
        'Programming',
        'Hiking'
    ]
 );
var_dump($assocArray);
echo 'Key value "age": '.$assocArray['age'], "\n";
echo $assocArray['hobbies'][0], "\n";

// PHP Objects

// Overly simple "standard class" example
$myObj = new stdClass();
$myObj->name = 'Sam';
$myObj->age = 42;
$myObj->hobbies = [
    'Painting',
    'Ballet'
];
var_dump($myObj);

// JSON is easy!
echo json_encode($myObj);

$jsonString = '{"name": "Sam"}';
$newJSONObj = json_decode($jsonString);
var_dump($newJSONObj);
