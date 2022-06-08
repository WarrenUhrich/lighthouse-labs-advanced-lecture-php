<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <?php include './templates/navigation.php'; ?>

    <form action="/calculator.php" method="GET">
        <input type="number" name="num1" value="<?php echo $_GET['num1']; ?>">
        +
        <input type="number" name="num2" value="<?php echo $_GET['num2']; ?>">
        =
        <?php echo $_GET['num1'] + $_GET['num2']; ?>
        <input type="submit" value="Calculate Sum">
    </form>

<?php include './templates/footer.php'; ?>
