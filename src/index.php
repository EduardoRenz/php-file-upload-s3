<?php

require __DIR__ . '/../vendor/autoload.php';
use pCloud\Api;

// $client = new GuzzleHttp\Client();
// $res = $client->request('GET', "https://my.pcloud.com/oauth2/authorize?client_id=VYHjjoAHDh0&response_type=string");

// echo $res->getBody();

$api = new Api();
$api->authenticate('client_id', 'client_secret');