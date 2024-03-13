<?php require './templates/head.php'; ?>

        <title>PHP Intro Calculator</title>
    </head>
    <body>
        <h1>PHP Intro Calculator</h1>

        <?php require './templates/nav.php'; ?>

        <p>
            Welcome to the PHP Calculator!
        </p>

        <!-- 
            Technical difference between GET and a POST form submission?

            https://google.com/search?q=PHP.net

            GET  -> uses the address (query parameter string) to send data!
                * Easily repeatable, bookmarkable, shareable
            POST -> uses the BODY of the request to send data!
                * Not easily repeatable, bookmarkable, shareable, etc.
                * Great for server actions (update/save/delete)
                * Great for private information (sign-in)
         -->

         <form method="GET" action="/calculator.php">
            <label>
                Number 1
                <input id="num-1" type="number" name="num1" value="<?php echo $_GET['num1']; ?>">
            </label>
            +
            <label>
                Number 2
                <input id="num-2" type="number" name="num2" value="<?php echo $_GET['num2']; ?>">
            </label>
            <input type="submit" value="Calculate Sum">

            <br>

            <output for="num-1 num-2">
                <?php
                    $num1 = $_GET['num1'];
                    $num2 = $_GET['num2'];

                    if($num1 && $num2) {
                        echo $num1 + $num2;
                    }
                ?>
            </output>
         </form>

<?php require './templates/foot.php'; ?>