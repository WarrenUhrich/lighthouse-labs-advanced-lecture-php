<?php require './templates/head.php'; ?>

        <title>PHP Intro Request to API</title>
    </head>
    <body>
        <h1>PHP Intro Request to API</h1>

        <?php require './templates/nav.php'; ?>

        <p>
            Sample request to an API using PHP.
        </p>

        <h2>Ghibli Movies</h2>

        <ul>
            <?php
            
                $ghibliMoviesResponse = file_get_contents('https://ghibliapi.vercel.app/films');
                //echo '<pre>' . var_dump($ghibliMoviesResponse) . '</pre>';

                $ghibliMoviesArray = json_decode($ghibliMoviesResponse);

                foreach($ghibliMoviesArray as $ghibliMovie) :
                    ?>

                        <li>

                            <h3>
                                <?php echo $ghibliMovie->title; ?>
                                (<?php echo $ghibliMovie->original_title; ?>)
                            </h3>

                            <p>
                                <?php echo $ghibliMovie->description; ?>
                            </p>

                            <img
                                src="<?php echo $ghibliMovie->movie_banner; ?>"
                                alt="<?php echo $ghibliMovie->title; ?> Banner Image"
                                width="500"
                            >

                        </li>

                    <?php
                endforeach;

            ?>
        </ul>

<?php require './templates/foot.php'; ?>