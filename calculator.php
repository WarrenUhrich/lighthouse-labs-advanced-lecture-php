<?php include './templates/head.php'; ?>

    <?php include './templates/navigation.php'; ?>

    <form action="/calculator.php" method="GET">
        <label>
            Number 1:
            <input id="num-1" type="number" name="num_1" value="<?php echo $_GET['num_1']; ?>">
        </label>
        +
        <label>
            Number 2:
            <input id="num-2" type="number" name="num_2" value="<?php echo $_GET['num_2']; ?>">
        </label>
        <input type="submit" value="Calculate Sum">
        <output for="num-1 num-2">
            <?php
                if (isset($_GET) && !empty($_GET)) {
                    echo $_GET['num_1'] . ' + ' . $_GET['num_2'];
                    echo ' = ' . $_GET['num_1'] + $_GET['num_2'];
                }
            ?>
        </output>
    </form>

<?php include './templates/footer.php';
