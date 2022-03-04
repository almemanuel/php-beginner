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
        $list = [];
        $list['fruits'] = ['Banana', 'Apple', 'Strawberry', 'Grape'];
        $list['users'] = ['John', 'Joe', 'Mary']
    ?><hr>

    <?php function printArray($array){ ?>
        <pre>
            <?php var_dump($array); ?>
        </pre><hr>

        <pre>
            <?php print_r($array); ?>
        </pre><hr>
    <?php } ?>
    <?php printArray($list) ?>

</body>
</html>