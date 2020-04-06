<?php
use ReallySimpleJWT\Token;

require 'vendor/autoload.php';


$payload = [
    'iss' => 'localhost:8080/ict',
    'iat' => time(),
    'nbf' => time(),
    'exp' => time() + 360000,    
    'data' => (object) [
        'user' => (object)[ 'id' => 2526],
      ]
];

$secret = 'Hello&MikeFooBar123';

$token = Token::customPayload($payload, $secret);

print($token);