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
        
            /**
             * Array / List
             * ---> Indexed Array
             * 
             * Hash / Map / Associative Array
             * ---> Associative Array
             */

            /**
             * Data-Types?
             * * String
             * * Integer
             * * Float (Double)
             * * Boolean
             * * Classes / Object
             * * Array
             * * NULL
             * * Resource
             */

        ?>

        <h2>
            NULL
        </h2>

        <p>
            <?php

                $myNull1 = NULL;
                $myNull2 = null;
                $myNull3 = nUlL;

                echo '<pre>';
                var_dump($myNull1);
                echo '</pre>';

            ?>
        </p>

        <h2>
            Boolean
        </h2>

        <p>

            <?php
            
                $myTrue1 = TRUE;
                $myTrue2 = true;
                $myTrue3 = tRuE;

                $myFalse1 = FALSE;
                $myFalse2 = false;
                $myFalse3 = FaLsE;

                eChO '<pre>';
                VaR_dUmP($myTrue1);
                echo '</pre>';

                ECHO '<pre>';
                VAR_DUMP($myFalse1);
                echo '</pre>';

            ?>

        </p>

        <h2>Numbers (Integers and Floats)</h2>

        <p>

            <?php
            
                $myNum1 = 3;    // Integer
                $myNum2 = 3.14; // Float (Double)

                echo '<pre>myNum1: ';
                var_dump($myNum1);
                echo '</pre>';

                echo '<pre>myNum2: ';
                var_dump($myNum2);
                echo '</pre>';

                $mySum = $myNum1 + $myNum2;
            
                echo '<pre>mySum: ';
                var_dump($mySum);
                echo '</pre>';

            ?>

        </p>

        <h2>Strings</h2>

        <p>

            <?php
            
                $name = 'Katie';
                $greeting = 'Hello, ';

                // Concatenation character/operator in PHP is the: .
                $fullGreeting = $greeting . $name;

                echo '<pre>fullGreeting: ';
                var_dump($fullGreeting);
                echo '</pre>';

                // Double quotes support interpolation, curly braces are optional.
                $interpolatedGreeting = "$greeting{$name}";

                echo '<pre>interpolatedGreeting: ';
                var_dump($interpolatedGreeting);
                echo '</pre>';
            
            ?>

        </p>

        <h2>Objects</h2>

        <p>

            <?php
            
                $student = new stdClass();

                $student->name = 'Hossein';
                $student->school = 'Lighthouse Labs';

                echo '<pre>student: ';
                var_dump($student);
                echo '</pre>';
            
                echo '<pre>student->name: ';
                var_dump($student->name);
                echo '</pre>';

            ?>

        </p>

        <h2>
            Arrays
        </h2>

        <p>

            <?php
            
                /**
                 * INDEXED ARRAY:
                 */

                $animals = array('Elephant', 'Giraffe', 'Dog', 'Cat', 'Fish', 'Parrot');
                $animals = ['Elephant', 'Giraffe', 'Dog', 'Cat', 'Fish', 'Parrot'];

                echo '<pre>animals: ';
                var_dump($animals);
                echo '</pre>';

                echo '<pre>animals[1]: ';
                var_dump($animals[1]);
                echo '</pre>';

                array_push($animals, 'Tardigrade');

                echo '<pre>animals: ';
                var_dump($animals);
                echo '</pre>';

                /**
                 * ASSOCIATIVE ARRAY:
                 */
            
                $student = array(
                    'name'   => 'Hossein',
                    'school' => 'Lighthouse Labs'
                );

                $student = [
                    'name'   => 'Hossein',
                    'school' => 'Lighthouse Labs'
                ];

                echo '<pre>student: ';
                var_dump($student);
                echo '</pre>';

                echo '<pre>student["school"]: ';
                var_dump($student['school']);
                echo '</pre>';

            ?>

        </p>

    </body>
</html>