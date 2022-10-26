<?php

// This is a single-line comment!

# This is another single-line comment!

/*
Multi-line
comment
syntax.
*/

// STRINGS!

$name = 'Mohamed';
$greeting = 'Hello, ';

// Concatenation?
echo $greeting . $name; // We use .

echo "\n";

// String interpolation.
echo "$greeting$name"; // Double quotes allow interpolation.

echo "\n";

// Numbers!

echo 3 . 3;

echo "\n";

echo '3' + '3';

echo "\n";

var_dump(64);
var_dump('64');

// Does PHP have constants?

define('PI', 3.14); // Name the constant and set a value.
var_dump(PI); // No dollar sign here!

echo "\n";

/**
 * In JavaScript we may have written...
 * {name: "Shaun", school: "Lighthouse Labs"}
 */

$person = new stdClass();
$person->name = 'Shaun';
$person->school = 'Lighthouse Labs';

var_dump($person);

// Arrays!

// INDEXED ARRAY!

$myArray1 = array('Tardigrade', 'Red-Tipped Shark', 'Giraffe');
var_dump($myArray1);

echo $myArray1[1];

$myArray2 = ['Dog', 'Cat', 'Bearded Dragon'];
var_dump($myArray2);

// ASSOCIATIVE ARRAY! (hash / map)

$myArray3 = array(
    'name' => 'Lighthouse Labs',
    'topics' => ['JS', 'React', 'Ruby', 'SQL']
);

var_dump($myArray3);
