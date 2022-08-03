<?php

// This is a single-line comment.

# This is another single-line comment.

/*
 This is a
     multi-line
comment!
*/

// STRINGS!

$name = 'Calvin';
$greeting = 'Hello there, ';

// How do we concatenate?
echo $greeting . $name . '!'; // Concatenation operator is the .

echo "\n";

// What about interpolation?
echo "$greeting$name!"; // Interpolation requires double quotes.

echo "\n";

// Optional curly braces can help PHP understand which variable if you have similar names.
echo "{$greeting}{$name}!";

echo "\n";

// NUMBERS!

// Notice strings are coerced into numbers when performing mathematical operations.
echo '"3" + \'2.5\' - 0.7 * \'6\' = ';
echo "3" + '2.5' - 0.7 * '6';

echo "\n";

$myNum = 405.6;
var_dump($myNum);
// var_dump('Hello'); // Var dump tells you the type and value.

// BOOLEANS!

$myTrue = true;
$myFalse = FALSE;

$bool = tRuE;

var_dump($bool);

// NULL!

$myNull = NULL;
$myNull = nUlL;

var_dump($myNull);

// Are there constants?
define('PI', 3.14); // Use the define function for constants.
var_dump(PI); // No dollar sign in a constant.

// GENERIC OBJECT

/*
    Generic Obj in JS:
    const person = {
        name: 'Megan',
        school: 'Lighthouse Labs'
    };
*/

$person = new stdClass();
$person->name = 'Megan';
$person->school = 'Lighthouse Labs';

var_dump($person);

// ARRAYS

// Indexed... (numbered, starting at zero)
$myFavMovies = array('TRON', 'Dragonheart');
$myFavMovies = ['TRON', 'Dragonheart'];

var_dump($myFavMovies);

echo 'Second movie is: ' . $myFavMovies[1];

echo "\n";

// Associative Array... (key-value pairs)
$person = array(
    'name' => 'Megan',
    'school' => 'Lighthouse Labs'
);
$person = [
    'name' => 'Megan',
    'school' => 'Lighthouse Labs'
];

var_dump($person);

echo $person['name'] . '\'s school is: ' . $person['school'];
