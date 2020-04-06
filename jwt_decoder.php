<?php


function jwt_decoder($token){
    return json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1]))));
}

$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODA4MFwvaWN0IiwiaWF0IjoxNTg1MjE1OTA5LCJuYmYiOjE1ODUyMTU5MDksImV4cCI6MTU4NTgyMDcwOSwiZGF0YSI6eyJ1c2VyIjp7ImlkIjoiNDU2NSJ9fX0.BaZchbhSifqUl97Sri0OHMpgrzBLxReld1_KqLxic5Q";
$token2 = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE1ODYxNTMwNDksInVpZCI6MSwiZXhwIjoxNTg2MTUzMDU5LCJpc3MiOiJsb2NhbGhvc3Q6ODA4MFwvaWN0IiwiZGF0YSI6eyJ1c2VyIjp7ImlkIjoyNTI2fX19.kOGeGbx_-wErVtrxhLVSjzxvucGwp8oOuAd3QytZ3FU";
print_r(jwt_decoder($token2));
