<?php
include 'dischi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Britpop</title>
</head>
<body>
    <div>
        <a href="index.php"> Homepage </a>
        <a href="inserimento_dischi.php"> Inserimento nuovo disco </a>
        <a href="gestione_dischi.php"> Gestione dischi </a>
    </div>
    <div>
        <h1>I miei dischi</h1>
        <?php foreach($dischi as $disco): ?>
            <h2> Titolo: <?php echo $disco["titolo"];?></h2>
            <p> Artista: <?php echo $disco["artista"];?></p>
            <p> Anno: <?php echo $disco["anno"];?></p>
            <hr>
        <?php endforeach ?>

    </div>

    
</body>
</html>
