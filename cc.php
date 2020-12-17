<?php

function http_request($url){
    $ch = curl_init();


    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $output = curl_exec ($ch);

    curl_close($ch);

    return $output;


}
$data = http_request("https://api.covid19api.com/summary");

$data = json_decode($data, TRUE);

echo "<pre>";
    print_r($data);
echo "</pre>";


?>