<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC0b2230418f0c2ce88f7c0fe85c22d0ea';
$token = 'bd4d8295ffea9ff677788de7239a65ad';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
