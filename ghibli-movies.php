<?php require './templates/head.php'; ?>

        <title>Ghibli Movies! Request to API Practice</title>
    </head>
    <body>
        
        <h1>Ghibli Movies! Request to API Practice</h1>

        <?php require './templates/nav.php'; ?>

        <?php

            // We want to reach out to an external API endpoint.
            $responseFromAPI = file_get_contents('https://ghibliapi.vercel.app/films');
            // echo "<pre>\r\n", var_dump($responseFromAPI), "</pre>";

            // We want to parse the data in a way that PHP will understand.
            $ghibliMovies = json_decode($responseFromAPI); // Converts it from JSON into PHP array of objects.
            // echo "<pre>\r\n", var_dump($ghibliMovies), "</pre>";

            // We want to output the list of movies as HTML.
        ?>

        <ul>
            
            <?php foreach($ghibliMovies as $movie) : ?>

                <li>
                    <h2>
                        <?php echo $movie->title; ?>
                        (<?php echo $movie->original_title; ?>)
                    </h2>
                    <p>
                        <img src="<?php echo $movie->movie_banner; ?>" alt="<?php echo $movie->title; ?>" width="300px">
                        <?php echo $movie->description; ?>
                    </p>
                </li>

            <?php endforeach; ?>

        </ul>

<?php require './templates/foot.php'; ?>