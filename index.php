<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Web Page</title>
</head>
<body>
    <h1>My First PHP Web Page</h1>
    <?php include 'templates/navigation.php'; ?>
    <p>
        5 - 3 is...
        <?php
            $answer = 5 - 3;
            echo $answer;
        ?> 
    </p>
</body>
</html>