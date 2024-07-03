<?php
require_once "google-api/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("1011122221876-et1cf38nn5s60jjijrgs360h5vuqossh.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Atilery - Group6");
$gClient->setRedirectUri("http://localhost/GoOutfit-Group6/admin_area/index.php?dashboard");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();
?>