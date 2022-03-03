<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $txt = 'Hello, world!'
    ?>
    <?= $txt ?><hr>
    <?= strtolower($txt) ?><hr>
    <?= strtoupper($txt) ?><hr>
    <?= ucfirst($txt) ?><hr>
    <?= strlen($txt) ?><hr>
    <?= str_replace('world', 'Earth', $txt) ?><hr>
    <?= substr($txt, 7, 6) ?><hr>


</body>
</html>