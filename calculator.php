<?php include './templates/header.php'; ?>
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
