<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data-Types</title>
</head>
<body>
    <h1>PHP Data-Types</h1>

    <?php
    
        /**
         * PHP Data-Types Include...
         * 
         * * Boolean
         * * Integer
         * * Float (Double)
         * * String
         * * Object
         * * NULL
         * * Array
         *  * Indexed Array
         *  * Associative Array (Hash / Map / Key-Value Pair)
         * * Resource
         */
    
    ?>

    <h2>Booleans</h2>

    <p>
        <?php
        
            $myBool1 = TRUE;
            $myBool2 = tRuE;
            $myBool3 = true;

            $myBool4 = FALSE;

            // echo $myBool1; // TRUE
            // echo '<br>';
            // echo $myBool4; // FALSE
        
            eChO '<pre>';
            vaR_dUmp($myBool1);
            echo '</pre>';

            echo '<pre>';
            var_dump($myBool4);
            echo '</pre>';

        ?>
    </p>

    <h2>Null</h2>

    <p>
        <?php
        
            $myNull1 = NULL;
            $myNull2 = nUlL;
            $myNull3 = null;

            echo '<pre>';
            var_dump($myNull1);
            echo '</pre>';
        
        ?>
    </p>

    <h2>Numbers</h2>

    <p>

        <?php
        
            $myNum1 = 3;    // Integer
            $myNum2 = 3.14; // Float

            $mySum = ($myNum1 + $myNum2); // Float

            echo '<pre>myNum1: ';
            var_dump($myNum1);
            echo '</pre>';

            echo '<pre>myNum2: ';
            var_dump($myNum2);
            echo '</pre>';

            echo '<pre>mySum: ';
            var_dump($mySum);
            echo '</pre>';
        
        ?>

    </p>

    <h2>Strings</h2>

    <p>

        <?php
        
            $name = 'Jaqueline';
            $greeting = 'Hello, ';

            $fullGreeting = $greeting . $name;

            echo '<pre>fullGreeting: ';
            var_dump($fullGreeting);
            echo '</pre>';

            $interpolatedString = "{$greeting}$name";

            echo '<pre>interpolatedString: ';
            var_dump($interpolatedString);
            echo '</pre>';
        ?>

    </p>

    <h2>Objects</h2>

    <p>

        <?php
        
            $student = new stdClass();

            $student->name = 'Ahmed';
            $student->school = 'Lighthouse Labs';
        
            echo '<pre>student object: ';
            var_dump($student);
            echo '</pre>';

            echo 'Hello, ' . $student->name;
        ?>

    </p>

    <h2>Arrays</h2>

    <p>

        <?php
        
            // INDEXED ARRAY:

            $animals = array('dog', 'cat', 'fish', 'bird');
            $animals = ['dog', 'cat', 'fish', 'bird'];

            echo '<pre>animals: ';
            var_dump($animals);
            echo '</pre>';

            echo 'Animal at index 2 is: ' . $animals[2];

            // ASSOCIATIVE ARRAY:

            $student = array(
                'name'   => 'Ahmed',
                'school' => 'Lighthouse Labs'
            );

            $student = [
                'name'   => 'Ahmed',
                'school' => 'Lighthouse Labs'
            ];

            echo '<pre>student array: ';
            var_dump($student);
            echo '</pre>';

            echo 'Hello, ' . $student['name'];

        ?>

    </p>

</body>
</html>