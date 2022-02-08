<?php

    $curl = curl_init(); // start

    $url = "https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml?5105e8233f9433cf70ac379d6ccc5775";

    // config
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // exec
    $result = curl_exec($curl);

    $len = strlen($result);

    for($i = 0; $i != $len; $i++){
        if($result[$i] == 'currency'){
            for($j = $i + 10; $j > $i + 15; $j++) {
                echo $result[$j];
            }
        }
    }

    $data_pattern = '/[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/';

    preg_match($data_pattern, $result, $data_match);
    $data_match = $data_match[0];
    echo $data_match;

    // close
    curl_close($curl);
?>