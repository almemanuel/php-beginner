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
        $date = date('Y-m-d h:i'); // client OS time
    ?><hr>
    <?= date_default_timezone_get() ?><hr>
    <?= $date ?><hr>
    <?php date_default_timezone_set('America/New_York') ?>
    <?= date_default_timezone_get() ?><hr>
    <?= $date ?><hr>

    <?php
        $start_date = strtotime('2022-03-04');
        $end_date = strtotime('2022-05-25');
        $seconds_per_day = 60 * 60 * 24;
        $time_distance = ($end_date - $start_date) / $seconds_per_day;
    ?>

    <?= $time_distance ?><hr>

</body>
</html>