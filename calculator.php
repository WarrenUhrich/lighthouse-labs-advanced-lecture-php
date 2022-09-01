<?php
    $title = 'PHP Calculator (Form Practice)';
    include './templates/header.php';
?>

<form method="POST" action="/calculator.php">
    <label for="num-1">Number 1:</label>
    <input name="num_1" id="num-1" type="number" value="<?php echo $_POST['num_1']; ?>">
    +
    <label for="num-2">Number 2:</label>
    <input name="num_2" id="num-2" type="number" value="<?php echo $_POST['num_2']; ?>">

    <input type="submit" value="Calculate Sum">

    <output for="num-1 num-2"><?php
        if (isset($_POST['num_1']) && isset($_POST['num_2'])) {
            echo "{$_POST['num_1']} + {$_POST['num_2']} = ";
            echo $_POST['num_1'] + $_POST['num_2'];
        }
    ?></output>
</form>

<?php include './templates/footer.php';