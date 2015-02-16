<?php
$keyword = $_POST['keyword'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$radius = $_POST['radius'];
$result_type = $_POST['result_type'];
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "35870153-KQIX5nfZuF6kiXqWLT6wqGAQ1olDt99fVeUkF6p7K",
    'oauth_access_token_secret' => "dXTZE61FVPcDoDYdxjwiGaHLloUyfemdxUs4N1gjVAbzH",
    'consumer_key' => "lLFnRaYt1zn4OftOR5aI0bwlB",
    'consumer_secret' => "rAimolmwYBFObIXTl9ENBELnUmox0AuJUcMpSypU692BDfFJaS"
);
//https://api.twitter.com/1.1/search/tweets.json?q=superbowl&geocode=47.439090,-122.299118,100km&count=100&result_type=recent
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q='.$keyword.'&geocode='.$lat.','.$lng.','.$radius.'km&count=100&result_type='.$result_type;
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$result = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();

echo $result;
?>