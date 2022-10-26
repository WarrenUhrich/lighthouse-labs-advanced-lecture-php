<?php
    $pageTitle = $_SERVER['SCRIPT_NAME']; // Global array!
    $pageTitle = str_replace(['/', '.php'], '', $pageTitle);
    $pageTitle = str_replace(['-', '_'], ' ', $pageTitle);
    $pageTitle = ucwords($pageTitle);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <h1><?php echo $pageTitle; ?></h1>
