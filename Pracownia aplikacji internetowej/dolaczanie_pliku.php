<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Plik główny</h3>

    <h3>Koniec pliku głównego</h3>

    <?php

    include './file.php';
    include_once './file.php';

    require './file.php';
    require_once './file.php';

    
    ?>

</body>
</html>