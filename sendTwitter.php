<?php
ini_set('display_errors', '1');
/*
try {

require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "3939785352-S3DCa1juie2ntdgqIxWaSUeEN8Ro3bZ9m5q8fvL",
    'oauth_access_token_secret' => "O2oEVsU7X79PV1skMiLqgUDEIZHZCuUMXE7mq8qufxdRb",
    'consumer_key' => "YzHwoh9YpnDnOsoB6D9mJsH87",
    'consumer_secret' => "qkTCvlHhY2EyPj5mewAVIJ5qQCfhvYuzHSM4CjteEpKPdBv8JV"
);

$url = 'https://api.twitter.com/1.1/statuses/update.json';
$requestMethod = 'POST';

$date = $_POST['date'];
$location = $_POST['where'];

$postfields = array(
    'status' => "There will be a meeting on $date at $location! See you there!"
);
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest();

} catch (Exception $e) { echo $e->getMessage(); }
*/
try {

require('Twilio/Services/Twilio.php');

$sid = "ACb77abef50ba2a17f25d1fe5fe1e6f0b1";
$token = "206bc3fe644469058eb780d9c4327a33";

$client = new Services_Twilio($sid, $token);
$message = $client->account->messages->sendMessage(
  '4847256552', // From a valid Twilio number
  '6103928967', // Text this number
  "Testing..."
);

} catch (Exception $e) { echo $e->getMessage(); }
header("Location: /index.php");
?>