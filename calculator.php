<?php include './templates/head.php'; ?>
        
        <title>PHP Calculator</title>
    </head>
    <body>
        <h1>PHP Calculator</h1>

        <?php include './templates/nav.php'; ?>

        <p>Welcome to the PHP Calculator!</p>

        <!--
            TECHNICAL DIFFERENCE BETWEEN:
            * GET -> any submitted data is in the address
                  -> are shareable / repeatable
                  -> https://google.com/search?q=PHP.net
            * POST -> any submitted data is in the BODY
                   -> NOT easy to repeat
         -->

        <!-- Method is TYPE of submission... -->
        <!-- Action is WHERE to submit to... -->
        <form method="GET" action="/calculator.php">
            <label>
                Number 1:
                <input
                    id="num-1"
                    type="number"
                    name="num-1"
                    value="<?php echo $_GET['num-1']; ?>"
                >
            </label>
            +
            <label>
                Number 2:
                <input
                    id="num-2"
                    type="number"
                    name="num-2"
                    value="<?php echo $_GET['num-2']; ?>"
                >
            </label>

            <input type="submit" value="Calculate">

            <br>

            <output for="num-1 num-1">
                <?php
                    if(isset($_GET) && !empty($_GET)) {
                        echo $_GET['num-1'] . ' + ' . $_GET['num-2'];
                        echo ' = ' . $_GET['num-1'] + $_GET['num-2'];
                    }
                ?>
            </output>
        </form>

<?php include './templates/foot.php';
