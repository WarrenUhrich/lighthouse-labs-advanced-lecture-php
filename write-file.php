<?php

$programmingLanguages = ['PHP', 'JavaScript', 'Ruby'];

$myString = "# List of Programming Languages\r\n";

foreach($programmingLanguages as $index => $language) {
    $num = $index + 1;
    $myString .= "\r\n$num. $language";
}

file_put_contents('programming-languages.md', $myString);
