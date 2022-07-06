<?php include './templates/head.php'; ?>

    <?php include './templates/navigation.php'; ?>

    <?php
        $url = 'https://ghibliapi.herokuapp.com/films/';
        $moviesListJSONString = file_get_contents($url);

        // Convert JSON string to PHP object.
        $moviesList = json_decode($moviesListJSONString);

        // var_dump($moviesList);
    ?>

    <h2>List of Ghibli Movies:</h2>

    <?php if($moviesList) : ?>

        <ul>

            <?php foreach($moviesList as $movie) : ?>
                <li>
                    <h3>
                        <?php echo $movie->title; ?>
                        (<?php echo $movie->original_title; ?>)
                    </h3>
                    <p><?php echo $movie->description; ?></p>
                </li>
            <?php endforeach; ?>

        </ul>

    <?php endif; ?>

<?php include './templates/footer.php'; ?>
