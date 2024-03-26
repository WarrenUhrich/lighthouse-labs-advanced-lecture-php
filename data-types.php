<?php require './templates/head.php'; ?>

        <title>PHP Data-Types Practice!</title>
    </head>
    <body>
        
        <h1>PHP Data-Types Practice!</h1>

        <?php require './templates/nav.php'; ?>

        <h2>PHP's Data-Types</h2>

        <?php
            // No symbol!
            // No undefined!
        ?>

        <ul>
            <li>
                Primitives
                <ul>
                    <li>NULL</li>
                    <li>Integer (Whole Numbers)</li>
                    <li>Float (Decimal Numbers)</li>
                    <li>String</li>
                    <li>Boolean</li>
                </ul>
            </li>
            <li>
                Complex Data Structures:
                <ul>
                    <li>Array</li>
                    <li>Object</li>
                    <li>Resource</li>
                </ul>
            </li>
            
        </ul>

        <h2>Data-Type Practice</h2>

        <pre>

            Hi I am indented!

            <?php

                /**
                 * Strings!
                 */                

                $hello = 'Hello, World!';
                // Functions are NOT case-sensitive.
                ECHO $hello;
                echo "\r\n";
                echo $hello;
                EcHo "\r\n";
                eChO "\r\n";

                // Concatenation in PHP:
                $greeting = 'Hello, ';
                $name = 'Dustin';

                // Plus + in PHP is reserved ONLY for addition.
                // For concatenation we use: .
                $fullString = $greeting . $name;
                echo $fullString;

                echo "\r\n";

                // Interpolation in PHP:
                $newFullString = "$greeting$name!"; // Double-quotes are used for this!
                echo $newFullString;

                // Single-quotes don't handle special characters or interpolation.
                // Double-quotes do!

                echo "\r\n";
                echo var_dump($newFullString);
                echo "\r\n";

                /**
                 * Integers
                 */

                $myInteger = 5;
                echo var_dump($myInteger);

                /**
                 * Floats
                 */

                 $pi = 3.14;
                 echo var_dump($pi);
                 echo "\r\n";

                /**
                 * NULL
                 */

                $myNull = nUlL;
                $myNull = null;
                $myNull = NULL;
                echo var_dump($myNull);
                echo "\r\n";

                /**
                 * Constant
                 */
                define('CURRENT_LANG', 'php');
                echo "\r\n", var_dump( CURRENT_LANG ), "\r\n";

                /**
                 * Arrays
                 * 
                 * 2 types of array:
                 *  1. Indexed Array (List)
                 *  2. Associative Array (Hash/Map)
                 */

                // INDEXED:

                $animals = array('giraffe', 'tardigrade', 'polar bear', 'wolf');
                $animals = ['giraffe', 'tardigrade', 'polar bear', 'wolf'];
                
                echo "\r\n", var_dump($animals), "\r\n";

                echo "\r\nAnimal at Index 2: ", $animals[2], "\r\n";

                // ASSOCIATIVE:

                $school = array(
                    // KEY        => VALUE
                    'name'        => 'Lighthouse Labs',
                    'cohort'      => 'September 18, 2023 Day',
                    'currentYear' => 2024
                );
                $school = [
                    // KEY        => VALUE
                    'name'        => 'Lighthouse Labs',
                    'cohort'      => 'September 18, 2023 Day',
                    'currentYear' => 2024
                ];

                // Foreach is good for both indexed and associative arrays! 🙌
                foreach($school as $key => $value) {
                    echo "\r\n\t * $key: $value\r\n";
                }

                /**
                 * Objects
                 */
                $schoolObj = new stdClass;

                $schoolObj->name = 'Lighthouse Labs';
                $schoolObj->cohort = 'September 18, 2023 Day';
                $schoolObj->currentYear = 2024;

                echo "\r\n", var_dump($schoolObj), "\r\n";

                echo "\r\n", "The name of my school is $schoolObj->name!", "\r\n";
            ?>

        </pre>

<?php require './templates/foot.php'; ?>