<?php
// Make  a POST API REQUEST WITH CURL
//specify the URL endpoint

$url = 'http://localhost/websitesX/Api/RestServer/users';

// Collection Object
$data = [
    'name' => 'John mIke',
    'email' => 'MIKe@gmail.com',
    'phone' => '080355656783',
];

 
// initialize a new cURL session
$curl = curl_init($url);

// 1. Set an option for cURL Transfer and set to CURLOPT_RETURNTRANSFER
curl_setopt($curl,  CURLOPT_RETURNTRANSFER, true) ;

//2. Set the CURLOPT_POST option to true for POST request
curl_setopt($curl,CURLOPT_POST, true);

//3. Set the request data as JSON using json_encode function
curl_setopt( $curl, CURLOPT_POSTFIELDS,$data) ;

//4. Set custom headers for Users API service and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER,[
//  'Server Host Name: example.com',
//'RESTAPI-Key: [Input your API Key Here if you have]',
// 'Content-Type: application/json'
]);

 // We execute our request, and get output in a $response variable
 $response = curl_exec($curl) ;
 // Close the connection
 curl_close($curl);

 //display the resposnse from the server
print_r($response .PHP_EOL);

?>