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
        define('DB_URL', 'url_dev');
        define('DB_USER', 'user_dev');
        define('DB_PASS', 'pass_dev');
    ?>
    <ul style='list-style: none'>
        <li><?= DB_URL ?></li>
        <li><?= DB_USER ?></li>
        <li><?= DB_PASS ?></li>
    </ul>
</body>
</html>