<?php


$access_token = '2S/wgd5DwuH0YG7swpnbAtMK6xJFmzVhkyai3qa5T/5Zo8ite5/GnsziSVbRqBP/eLx4pYrxoGOfCZy6g+EDUbG6FpHAnjaQhCsQ/MkEUorBqK/9OBzSWYip8VWcT/seI4+5IHVMpbXX6thYzZLaAAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

