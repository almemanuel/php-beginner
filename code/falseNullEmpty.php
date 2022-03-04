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
        // false -> bool
        // null -> explicit value
        // empty -> without value or null value

        $user1 = null;
        $user2 = ''
    ?><hr>

    <?= is_null($user1) ?><hr>
    <?= is_null($user2) ?><hr>
    <?= empty($user2) ?><hr>
    <?= empty($user1) ?><hr>

</body>
</html>