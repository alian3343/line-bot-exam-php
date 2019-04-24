<?php



require "vendor/autoload.php";

$access_token = '2S/wgd5DwuH0YG7swpnbAtMK6xJFmzVhkyai3qa5T/5Zo8ite5/GnsziSVbRqBP/eLx4pYrxoGOfCZy6g+EDUbG6FpHAnjaQhCsQ/MkEUorBqK/9OBzSWYip8VWcT/seI4+5IHVMpbXX6thYzZLaAAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '4ca3323412747765303d6ac5e17edd4f';

$pushID = 'Ud5bdfe4144954e44a44f1dd1369e89e7';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







