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
        $array = [];
        if(is_array($array)){ ?>
            <?= "It's an array" ?><?php
        } else{ ?>
            <?= "Isn't an array" ?><?php
        } ?><hr>
    <?php $array = [1 => 'a', 7 => 'b', 18 => 'c'] ?>
    <pre>
        <?php print_r($array) ?>
    </pre><hr>

    <?php $keys = array_keys($array) ?>
    <pre>
        <?php print_r($keys) ?>
    </pre><hr>

    <?php asort($array) // sort the values without change the index ?>
    <pre>
        <?php print_r($array) ?>
    </pre><hr>

    <?php sort($array) //sort the values and change the index ?>
    <pre>
        <?php print_r($array) ?>
    </pre><hr>

    <?= count($array) ?><hr>

    <?php
        $to_merge = ['Windows', 'Linux', 'MacOS'];
        $merged = array_merge($array, $to_merge);
    ?>
    <pre>
        <?php print_r($merged) ?>
    </pre><hr>

    <?php
        $string = '07/03/2022';
        $array_explode = explode('/', $string);
    ?>
    <?= $string ?><hr>
    <pre>
        <?php print_r($array_explode) ?>
    </pre><hr>
    <?= $array_explode[2] . '-' . $array_explode[1] . '-' . $array_explode[0] ?><hr>

    <?php
        $to_implode = ['a', 'b', 'x', 'y'];
        $imploded = implode(', ', $to_implode);
    ?>
    <pre>
        <?php print_r($to_implode) ?>
    </pre><hr>
    <?= $imploded ?><hr>

</body>
</html>