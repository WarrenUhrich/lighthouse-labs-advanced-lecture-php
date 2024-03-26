<?php require './templates/head.php'; ?>

        <title>Calculator! Form Practice</title>
    </head>
    <body>
        
        <h1>Calculator! Form Practice</h1>

        <?php require './templates/nav.php'; ?>

        <section>
            <h2>Calculator Form</h2>

            <!-- What's the difference between GET and POST? -->
            <form method="GET" action="/calculator.php">
                <label>
                    Number 1:
                    <input id="number-1" type="number" name="num1" value="<?php echo $_GET['num1']; ?>">
                </label>
                +
                <label>
                    Number 2:
                    <input id="number-2" type="number" name="num2" value="<?php echo $_GET['num2']; ?>">
                </label>
                <input type="submit" value="Calculate Sum">
            </form>

            <output for="number-1 number-2">
                <?php
                    $num1 = $_GET['num1'];
                    $num2 = $_GET['num2'];

                    if($num1 && $num2) {
                        // + is for mathematical addition only!
                        echo "$num1 + $num2 = ", $num1 + $num2;
                    }
                ?>
            </output>
        </section>

<?php require './templates/foot.php'; ?>