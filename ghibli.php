<?php
    $title = 'Ghibli API Example';
    include './templates/header.php';
?>

<?php
    $filmListJSONString = file_get_contents('https://ghibliapi.herokuapp.com/films/');
    $filmList = json_decode($filmListJSONString); // Convert it into a PHP object.
?>

<?php if ($filmList) : ?>

    <ul>

        <?php foreach ($filmList as $film) : ?>

            <li>
                <h2><?php echo "$film->title ($film->original_title)"; ?></h2>
                <p><?php echo $film->description; ?></p>
            </li>

        <?php endforeach; ?>

    </ul>

<?php else : ?>

    <p>Sorry, no films found.</p>

<?php endif; ?>

<?php include './templates/footer.php';
