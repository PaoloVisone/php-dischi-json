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
            echo "<h1>$disco->titolo</h1>";
        }

        ?>

    </div>

</body>

</html>