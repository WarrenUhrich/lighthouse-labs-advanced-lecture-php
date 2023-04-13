<?php require '../partials/head.php'; ?>

    <h1>Addition Calculator</h1>

<?php require '../partials/nav.php'; ?>

    <form method="GET" action="/addition-calculator.php">

        <label>
            Number 1:
            <input type="text" name="num1" value="<?php
                echo !empty($_GET['num1']) ? $_GET['num1'] : '';
            ?>">
        </label>

        +

        <label>
            Number 2:
            <input type="text" name="num2" value="<?php
                echo !empty($_GET['num2']) ? $_GET['num2'] : '';
            ?>">
        </label>

        <?php if(!empty($_GET)) : ?>

            =

            <p>
                <?php echo (integer) $_GET['num1'] + (integer) $_GET['num2']; ?>
            </p>

        <?php endif; ?>

        <input type="submit" value="Calculate!">

    </form>

    <h3>DEBUG OUTPUT</h3>

    <pre>
        <?php var_dump($_GET); ?>
    </pre>

<?php require '../partials/foot.php'; ?>
