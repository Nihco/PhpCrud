<?php
require("mesa.php");

$mysqli = new mysqli(
    'localhost',
'root',
'123',
'test'
);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://domain.chile.techo.org/api/v2/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => array('f' => 'gms','region' => '5'),
));

$response = curl_exec($curl);

curl_close($curl);
$json = json_decode($response,true);