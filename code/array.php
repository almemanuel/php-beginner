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
        $simple_array = ['Hello', 'World', '!'];
        $fruits = [ 'a' => 'Banana'     ,
                    'b' => 'Apple'      ,
                    'c' => 'Strawberry' ,
                    'd' => 'Grape'      ]
    ?><hr>

    <?php function printArray($array){ ?>
        <pre>
            <?php var_dump($array); ?>
        </pre><hr>

        <pre>
            <?php print_r($array); ?>
        </pre><hr>
    <?php } ?>
    <?php printArray($simple_array) ?>
    <?php printArray($fruits) ?>
    <?php $fruits['e'] = 'Pineapple' // add on the end of an array ?>
    <?php $fruits[] = 'Avocado' // here, the index will be 0 ?>
    <?php printArray($fruits) ?>

</body>
</html>