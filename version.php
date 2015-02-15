<?php
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
$getfield = '?q=cold&geocode=47.439090,-122.299118,100km&count=100&result_type=recent';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$result = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();

var_dump((String)$result);
?>
