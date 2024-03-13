<?php

    // php write-to-file.php

    $arrayOfSongs = array(
        'I Don\'t want to set the World on Fire',
        'Radioactive',
        'Du Hast'
    );

    $stringForFile = '# List of Songs:';
    $stringForFile .= "\r\n";
    
    foreach($arrayOfSongs as $song) {
        $stringForFile .= "* $song\r\n";
    }

    file_put_contents('./list-of-songs.md', $stringForFile);

    echo 'list-of-songs.md written!';

?>