<?php include '../partials/head.php'; ?>
    
        <?php include '../partials/nav.php'; ?>

        <h2>Basic Addition Calculator</h2>

        <form method="GET" action="/calculator.php">

            <label for="num-1">
                Number 1:
            </label>

            <input
                id="num-1"
                type="number"
                name="number-1"
                value="<?php echo $_GET['number-1']; ?>"
            >

            +

            <label for="num-2">
                Number 2:
            </label>

            <input
                id="num-2"
                type="number"
                name="number-2"
                value="<?php echo $_GET['number-2']; ?>"
            >

            <input type="submit" value="Calculate Sum">
        </form>

        <?php if(isset($_GET['number-1']) && isset($_GET['number-2'])) { ?>

            <h2>Result</h2>

            <p>
                <?php echo $_GET['number-1']; ?>
                +
                <?php echo $_GET['number-2']; ?>
                =
                <?php echo $_GET['number-1'] + $_GET['number-2']; ?>
            </p>

        <?php } // end of if ?>

        <?php // if(isset($_GET['number-1']) && isset($_GET['number-2'])) : ?>

        <?php // endif; ?>

        <h2>DEBUG OUTPUT</h2>

        <pre><?php
            var_dump($_GET);
        ?></pre>

<?php include '../partials/foot.php'; ?>