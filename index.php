<?php

require_once("./functions.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                             <img src='{$disco->{"url della cover"}}' alt='$disco->titolo'>  
                        </div>
                        <div class='card-text'>
                <h2>$disco->titolo</h2>
                <p>$disco->artista</p>
                   <p>{$disco->{"anno di pubblicazione"}} - $disco->genere</p> 
            </div>
        </div>";
        }

        ?>

    </div>

</body>

</html>