<?php include './templates/head.php'; ?>
    
    <?php include './templates/navigation.php'; ?>
    
    <?php
        $url = 'https://ghibliapi.herokuapp.com/films/';
        $filmListJSON = file_get_contents($url);

        // var_dump($filmListJSON);

        $filmList = json_decode($filmListJSON);

        // Use the <pre> (preformatted) element for easier reading!
        // echo '<pre>';
        // var_dump($filmList);
        // echo '</pre>';
    ?>

    <ul>
        <?php foreach($filmList as $film) { ?>
            <li>
                <h2>
                    <?= $film->title; ?>
                    (<?php echo $film->original_title; ?>)
                </h2>
                <p>
                    <?php echo $film->description; ?>
                </p>
            </li>
        <?php } // End foreach. ?>
    </ul>

<?php include './templates/footer.php'; ?>