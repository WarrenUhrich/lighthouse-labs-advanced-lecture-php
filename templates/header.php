<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucwords(sTr_rEpLaCe(['/', '.php'], '', $_SERVER['SCRIPT_NAME'])); ?></title>
</head>
<body>
    <h1><?php echo ucwords(str_replace(['/', '.php'], '', $_SERVER['SCRIPT_NAME'])); ?></h1>
