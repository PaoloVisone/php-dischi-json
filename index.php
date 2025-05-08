<?php

require_once("./functions.php");

$dischi = getData();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>

<body>

    <nav>
        <h1>DISCHI</h1>
    </nav>

    <div id="content">

        <?php

        foreach ($dischi as $disco) {
            echo "<div class='card'>
                <div class='card-img'>  
                     <img src='{$disco["url della cover"]}' alt='{$disco["titolo"]}'>  
                </div>
                <div class='card-text'>
        <h2>{$disco["titolo"]}</h2>
        <p>{$disco["artista"]}</p>
           <p>{$disco["anno di pubblicazione"]} - {$disco["genere"]}</p> 
    </div>
</div>";
        }

        ?>
    </div>

    <form method="post" action="./server.php">

        <label for=""> TITOLO
            <input type="text" name="titolo" id="titolo">
        </label>

        <label for=""> ARTISTA
            <input type="text" name="artista" id="artista">
        </label>

        <label for=""> IMMAGINE
            <input type="url" name="url" id="url">
        </label>

        <label for=""> ANNO
            <input type="number" name="anno" id="anno">
        </label>

        <label for=""> GENERE
            <input type="text" name="genere" id="genere">
        </label>

        <button type="submit">Genera</button>

    </form>

</body>

</html>