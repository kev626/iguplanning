<?php
ini_set('display_errors', '1');

try {

require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "3939785352-S3DCa1juie2ntdgqIxWaSUeEN8Ro3bZ9m5q8fvL",
    'oauth_access_token_secret' => "O2oEVsU7X79PV1skMiLqgUDEIZHZCuUMXE7mq8qufxdRb",
    'consumer_key' => "YzHwoh9YpnDnOsoB6D9mJsH87",
    'consumer_secret' => "YzHwoh9YpnDnOsoB6D9mJsH87"
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

} catch (Exception $e) {  }

//header("Location: /index.php");
?>