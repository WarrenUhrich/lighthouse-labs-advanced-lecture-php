<?php include './templates/head.php'; ?>
    
    <?php include './templates/navigation.php'; ?>
    
    <form method="GET" action="/calculator.php">
        <label for="num1">Number 1:</label>
        <input id="num1" type="number" name="num1" value="<?php echo $_GET['num1']; ?>">
        +
        <label for="num2">Number 2:</label>
        <input id="num2" type="number" name="num2" value="<?php echo $_GET['num2']; ?>">
        <input type="submit" value="Calculate Sum">
        <output for="num1 num2">
            <?php
                if (isset($_GET['num1']) && isset($_GET['num2'])) {
                    echo $_GET['num1'] . ' + ' . $_GET['num2'] . ' = ';
                    echo $_GET['num1'] + $_GET['num2'];
                }
            ?>
        </output>
    </form>

<?php include './templates/footer.php'; ?>