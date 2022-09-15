<?php
// a little script check is the cURL extension loaded or not
if(!extension_loaded("curl")) {
    die("cURL extension not loaded! Quit Now.") ;
}

// Make  a GET API REQUEST WITH CURL
//specify the URL endpoint

$url = 'http://localhost/websitesX/Api/RestServer/users';

$data_name = 1;

$request_url = $url.'/'.$data_name ;

// initialize a new cURL session
$curl = curl_init($request_url);

// 1. Set an option for cURL Transfer and set to CURLOPT_RETURNTRANSFER
curl_setopt($curl,  CURLOPT_RETURNTRANSFER, true) ;

//Execute 
$response = curl_exec($curl);
curl_close($curl);
echo $response . PHP_EOL;