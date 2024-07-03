<?php

require_once 'google-api/vendor/autoload.php';

session_start();

// init configuration
$clientID = '1011122221876-rno4jkdbup38gjb63bl74lu3fjvrgn03.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/GoOutfit-Group6/admin_area/dashboard2.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "ecom_store";

$conn = mysqli_connect($hostname, $username, $password, $database);
