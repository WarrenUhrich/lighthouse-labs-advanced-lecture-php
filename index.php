<?php
    //$GLOBALS['title'] = 'Home Page';
    $title = 'Home Page';
    include './templates/header.php';
?>
    
    <h2>Data-Types</h2>
    <ul>
        <li>String</li>
        <li>Object</li>
        <li>Boolean</li>
        <li>Integer</li>
        <li>Float</li>
        <li>Null</li>
        <li>Array</li>
        <li>Resource</li>
    </ul>
    <h3>String</h3>
    <p>
        <?php
            $name = 'Kosta';
            $greeting = 'Hello, ';

            // Concatenation:
            echo $greeting . $name; 

            // Interpolation in PHP uses double-quotes:
            echo " $greeting Sneha!";
        ?>
    </p>
    <h3>Booleans</h3>
    <?php
        // All function names, true/false, and null are case-insensitive.
        // BUT VARIABLE NAMES ARE CASE-SENSITIVE!
        $myBool1 = tRuE;
        $myBool2 = FaLsE;

        $myBool3 = true;
        $myBool4 = TRUE;

        // echo $myBool1;
        var_dump($myBool1);
        var_dump($myBool2);
    ?>
    <h3>Arrays</h3>
    <ul>
        <?php
            // Arrays can be made using JS syntax []
            // OR the array constructor function array()
            $myArr = [];
            $myArr = array();

            // INDEXED array...
            $animals = array('Giraffe', 'Tardigrade', 'Angelfish', 'Wolf', 'Bumble Bee');

            // for...of or the Array().forEach((animal, index) => {})
            foreach($animals as $index => $animal) {
                ?>
                    <li>
                        <?php echo $index; ?>:
                        <?php echo $animal; ?>
                    </li>
                <?php
            }

            // Hashmap in PHP is called an ASSOCIATIVE array...
            $favouriteLanguages = array(
                'Caitlin' => 'Python',
                'Warren' => 'PHP',
                'Sneha' => 'JavaScript'
            );

            foreach($favouriteLanguages as $person => $language) {
                echo "<li>$person's favourite language is: $language</li>";
            }
        ?>
    </ul>
    <h3>Generic Object</h3>
    <p>
        <?php
            $myFirstObj = new stdClass();

            $myFirstObj->name = 'Lighthouse Labs';
            $myFirstObj->type = 'College / School';
            $myFirstObj->subject = 'Full-Stack Web Application Development';

            echo "$myFirstObj->name is a $myFirstObj->type that focuses on $myFirstObj->subject.";

            echo '<pre>';
            var_dump($myFirstObj);
            echo '</pre>';
        ?>
    </p>

<?php include './templates/footer.php';
