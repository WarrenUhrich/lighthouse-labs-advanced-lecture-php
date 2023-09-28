<?php include '../templates/head.php'; ?>

    <h1>Calculator</h1>

    <?php include '../templates/navigation.php'; ?>

    <p>Welcome to the calculator form example.</p>

    <h2>Calculator Form</h2>

    <form method="GET" action="/calculator.php">

        <label>
            Number 1:
            <input type="number" name="num-1" value="<?php echo $_GET['num-1']; ?>">
        </label>

        +

        <label>
            Number 2:
            <input type="number" name="num-2" value="<?php echo $_GET['num-2']; ?>">
        </label>

        <input type="submit" value="Calculate!">

    </form>

    <p>
        <?php echo $_GET['num-1']; ?> + <?php echo $_GET['num-2']; ?> = <?php echo $_GET['num-1'] + $_GET['num-2']; ?>
    </p>

    <pre>
        <?php var_dump($_GET); ?>
    </pre>

<?php include '../templates/foot.php';