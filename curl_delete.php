<?php
$url = 'http://localhost/websitesX/Api/RestServer/users';
$data_name = 2;
$request_url = $url.'/'.$data_name ;


// initialize a new cURL session
$curl = curl_init($request_url);

//Use CUSTOME REQUEST FOR PUT METHOD
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    //'Server-Host-Name: example.com',
    //'Your-API-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    //'Content-Type: application/json'
  ]);
  
$response = curl_exec($curl);
curl_close($curl);
echo $response . PHP_EOL;
?>