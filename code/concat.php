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
    <p>Hello, <?= $name ?>.
    You are <?= $age ?> yo, weigh <?= $weight ?> Kg
    <?php if($smoker) { ?>
            and are a smoker
    <?php } ?>

    </p>
    </ul>
</body>
</html>