<?php

// The double-slash... single-line comment!

# The bash-style octothorpe single-line comment.

/* Multi-line

comments!

Wow! 

*/

// String 'String value', "Another string"
echo 3 + '3'; // Answer? 6

echo "\n";

// Concatenation operator: .
echo 3 . '3'; // Answer? 33

echo "\n";

$myString = 'Hello, ';

echo '$myString Matthieu';

echo "\n";

echo "$myString Matthieu";

echo "\n";

// Integer 3
// Float / Double 3.14
// Boolean TRUE, FALSE
// Array ['Value1', 2, NULL, FALSE], array('Value1', 2, NULL, FALSE)

// Indexed array...
$myArr = ['Value1', 2, NULL, FALSE];

echo 'Value 2 in array is: ' . $myArr[1];

echo "\n";

// Associative array...
$myAssocArray = array(
    'name' => 'Brent',
    'favourite_language' => 'Python'
);

echo $myAssocArray['favourite_language'];

echo "\n";

// Object 
$myObj = new stdClass();
$myObj->name = 'Nadya';
echo $myObj->name;
// Null null
// Resource

echo "\n";
