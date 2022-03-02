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
        $name = 'Emanuel';
        $age = 23;
        $weight = 92.3;
        $smoker = true;
    ?>
    <ul style='list-style: none'>
        <li>Name: <?= $name ?></li>
        <li>Age: <?= $age ?></li>
        <li>Weight: <?= $weight ?> Kg</li>
        <?php if($smoker) { ?>
            <li>Smoker</li>
        <?php } ?>
    </ul>
</body>
</html>