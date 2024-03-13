<?php require './templates/head.php'; ?>

        <title>PHP Intro Data-Types!</title>
    </head>
    <body>
        <h1>PHP Intro Data-Types!</h1>

        <?php require './templates/nav.php'; ?>

        <p>
            Lets go over PHP's data-types!
        </p>

        <?php

            /**
             * What data-types do we think might be in PHP?
             * * Integer
             * * Float
             * * String
             * * Boolean
             * * Null
             * * "Resource"
             * 
             * Complex Data Structures:
             * * Array
             *  * Indexed Arrays (Indexed/Numbered "List" of Values)
             *  * Associative Array (Hash, Map)
             * * Object (Always Instantiated from a Class)
             * * Function
             */

            eChO "<pre>\r\n\t"; // Double-quotes allow easy use of special chars!

            // String
            // All variables start with a dollar-sign!
            // Variables ARE case-sensitive (functions are not!)
            // Variables can be re-assigned.
            $hello = 'Hello, World!';
            echo $hello;

            $greeting = 'Hello, ';
            $name = 'Mike';

            echo "\r\n\t";

            // Concatenation in PHP uses the . character.
            echo $greeting . $name;

            echo "\r\n\t";

            // Interpolation! Uses double-quotes!
            echo "$greeting$name";

            echo "\r\n\t";

            // Integer is just non-decimal (whole) number.
            echo 5 + 5;

            echo "\r\n\t";

            // Float is just decimal number.
            echo 5.5 + 5;

            /**
             * Most data-types...
             */

            $myString = 'hello!';
            $myInt = 3;
            $myFloat = 3.14;
            $myTrue = TRUE;
            $myFalse = false;
            $myNull = nUlL;

            echo "\r\n\t";
            echo var_dump($myString);
            echo "\r\n\t";
            echo var_dump($myInt);
            echo "\r\n\t";
            echo var_dump($myFloat);
            echo "\r\n\t";
            echo var_dump($myTrue);
            echo "\r\n\t";
            echo var_dump($myFalse);
            echo "\r\n\t";
            echo var_dump($myNull);
            echo "\r\n\t";

            // We can write constants!
            define('LANG_NAME', 'php');
            echo 'LANG_NAME constant contains: ' . LANG_NAME;

            echo "\r\n\t";

            // Indexed array
            $animals = array('giraffe', 'zebra', 'ostrich', 'lion');
            $animals = ['giraffe', 'zebra', 'ostrich', 'lion'];

            foreach($animals as $index => $animal) {
                echo "* $index. $animal\r\n\t";
            }

            echo var_dump($animals);
            echo "\r\n\t";

            // Associative array (aka hash/map)
            $school = array(
                // KEY => VALUE
                'name'        => 'Lighthouse Labs',
                'cohort'      => 'January 8, 2024 (East)',
                'currentYear' => 2024
            );
            $school = [
                // KEY => VALUE
                'name'        => 'Lighthouse Labs',
                'cohort'      => 'January 8, 2024 (East)',
                'currentYear' => 2024
            ];

            foreach($school as $key => $value) {
                echo "* $key: $value\r\n\t";
            }

            echo var_dump($school);
            echo "\r\n\t";

            // Object (please don't do this though, write a class!)
            $school = new stdClass;
            $school->name = 'Lighthouse Labs';
            $school->cohort = 'January 8, 2024 (East)';
            $school->currentYear = 2024;

            echo $school->name;
            echo "\r\n\t";
            echo var_dump($school);

            echo '</pre>';
        ?>

<?php require './templates/foot.php'; ?>