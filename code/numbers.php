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
        $number = rand(0, 100);
    ?>
    <!-- <?= ceil($number) ?><hr> -->
    <?= floor($number) ?><hr>
    <?= round($number) ?><hr>
    <?= sqrt($number) ?><hr>
    <?= getrandmax() ?><hr>
</body>
</html>