<?php require '../partials/head.php'; ?>

    <h1>Vehicle API</h1>

<?php require '../partials/nav.php'; ?>

    <?php
    
        $apiURL = 'https://vpic.nhtsa.dot.gov/api/vehicles/decodevin/5UXWX7C5*BA?format=json&modelyear=2011';

        // Reach out into internet and request the data.
        $response = file_get_contents($apiURL); // Comes back as JSON...
        // var_dump($response);

        // Deal with the response.. make sure it is an appropriate format.
        $obj = json_decode($response); // Converts JSON string into PHP array/object.

        // Output it to the browser in HTML.
        // echo'<pre>'; print_r($obj); echo'</pre>';
    ?>

    <ul>

        <?php foreach($obj->Results as $result) : ?>

            <li>
                <dl>
                    <?php foreach(get_object_vars($result) as $property => $value) : ?>

                        <dt><?php echo $property; ?></dt>
                        <dd><?php echo $value; ?></dd>

                    <?php endforeach; ?>
                </dl>
            </li>

        <?php endforeach; ?>

    </ul>

<?php require '../partials/foot.php'; ?>
