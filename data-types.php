<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data-Types</title>
</head>
<body>
    <h1>Data-Types</h1>

    <?php
    
        // Browser never sees these comments! This is a single-line comment.
        # Another single-line comment.
        /*
        Here is a multi-line
        comment! 
         */

        /**
         * What were the data-types in JS???
         * Boolean
         * Number (Integer/Float/NaN/Infinity)
         * -> BigInt
         * String
         * (Complex Data Structure) -> Array
         * Null
         * (Complex Data Structure) -> Object
         * Undefined
         * Symbol
         * 
         * Ruby -> Integer
         *      -> Float
         * Array -> indexed list of values
         * Hash -> key-value pair of values
         * 
         * PHP Data-Types?
         * 
         * Boolean
         * Integer
         * Float
         * String
         * Null (we do NOT have undefined)
         * Object
         * Array
         *  1. Indexed
         *  2. Associative (hash, map) (key-value pairs)
         * Resource
         *  
         */

        eChO "<pre>\r\n\t"; // Double quotes allow easy use of special chars \r\n\t /etc.

        // String
        // All vars start with a dollar-sign!
        // Vars are case-sensitive (functions are not.)
        $hello = 'Hello, World!';
        echo $hello;

        $greeting = 'Hello, ';
        $name = 'Jill';

        echo "\r\n\t";

        // Concatenation in PHP is using .
        echo $greeting . $name . '!' . ' ' . 123;

        echo "\r\n\t";

        // Interpolation in PHP: (use double-quotes)
        echo "$greeting$name!";

        echo "\r\n\t";

        echo 5 + 5; // Integer + Integer = 10

        echo "\r\n\t";

        echo 5.5 + 5; // Float + Integer = 10.5

        echo "\r\n\t";

        echo 3 . 3; // Integer CONCAT Integer = '33'

        echo "\r\n\t";

        $myString = 'hello';
        $myInteger = 123;
        $myFloat = 3.14;
        $myTrue = TRUE;
        $myFalse = fAlSe;
        $myNull = null;
        echo
            var_dump($myString), "\r\n\t",
            var_dump($myInteger), "\r\n\t",
            var_dump($myFloat), "\r\n\t",
            var_dump($myTrue), "\r\n\t",
            var_dump($myFalse), "\r\n\t",
            var_dump($myNull), "\r\n\t";

        // There does exist the idea of a CONSTANT in PHP:
        define('PI', 3.14); // The constant PI now equals 3.14
        echo 'PI: ' . PI;

        echo "\r\n\t";

        // Indexed Array
        $animals = array('giraffe', 'zebra', 'tardigrade', 'tinfoil barb');
        $animals = ['giraffe', 'zebra', 'tardigrade', 'tinfoil barb'];

        foreach($animals as $animal) {
            echo '* ' . $animal . "\r\n\t";
        }

        echo 'Animal at index 3: ' . $animals[3]; // tinfoil barb

        // Associative Array
        $school = array();
        $school = [
            // KEY   => VALUE
            'name'   => 'Lighthouse Labs',
            'cohort' => 'November 13, 2023 (A - East)',
            'currentYear' => 2024
        ];

        foreach($school as $schoolKey => $schoolValue) {
            echo "\r\n\t$schoolKey: $schoolValue\r\n\t";
        }

        // Object
        $school = new stdClass;
        $school->name = 'Lighthouse Labs';
        $school->cohort = 'November 13, 2023 (A - East)';
        $school->currentYear = 2024;

        echo var_dump($school);

        ECHO '</pre>';
    
    ?>

</body>
</html>
