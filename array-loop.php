<?php include './templates/header.php'; ?>
    <?php include './templates/navigation.php'; ?>
    
    <?php
        $pets = array(
            ['name' => 'Keesha', 'type' => 'dog'],
            ['name' => 'London', 'type' => 'cat'],
            ['name' => 'Monica', 'type' => 'budgie'],
            ['name' => 'Francis', 'type' => 'fish'],
            ['name' => 'Quorra', 'type' => 'dog']
        );
    ?>

    <h2>List of Class Pets</h2>
    <ul>
        <?php foreach ($pets as $pet) : ?>
            <li>
                <h3><?php echo $pet['name']; ?></h3>
                <p>
                    I am a(n):
                    <?php echo $pet['type']; ?> 
                </p>
            </li>
        <?php endforeach; ?>
    </ul>

<?php include './templates/footer.php'; ?>
