<?php

$animals = ['frog', 'dog', 'cat', 'fish', 'rat'];

$myString = "# List of Animals\r\n";

foreach($animals as $index => $animal) {
    $num = $index + 1;
    $myString .= "\r\n$num. $animal";
}

file_put_contents('animals.md', $myString);
