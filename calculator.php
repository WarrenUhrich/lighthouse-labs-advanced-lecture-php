<?php include './templates/head.php'; ?>

    <?php include './templates/navigation.php'; ?>

    <p>
        Please enter your numbers below:
    </p>

    <pre>
        <?php echo "Test output:\n"; var_dump($_POST); ?>
    </pre>

    <form action="/calculator.php" method="POST">
        <label for="num1">First Number:</label>
        <input id="num1" type="number" name="number1" value="<?php echo $_POST['number1']; ?>">
        <label for="num2">Second Number:</label>
        <input id="num2" type="number" name="number2" value="<?php echo $_POST['number2']; ?>">
        <input type="submit" value="Calculate Sum">
        <?php if (!empty($_POST)) : ?>
            <p>
                <?php echo $_POST['number1']; ?>
                +
                <?php echo $_POST['number2']; ?>
                =
                <?php echo $_POST['number1'] + $_POST['number2']; ?>
            </p>
        <?php endif; ?>
    </form>

<?php include './templates/footer.php'; ?>
