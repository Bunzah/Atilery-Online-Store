<?php
require_once "core/controller.Class.php";
require_once "config.php";

if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
}else{
    header('Location: admin_area/login.php');
    exit();
}
if(isset($token["error"]) && ($token["error"] != "invalid_grant")){
    // get data from google
    $oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();

    //insert data in the database
    $Controller = new Controller;
    echo $Controller -> insertData(
        array(
            'admin_email' => $userData['email'],
            'admin_image' => $userData['picture'],
            'admin_name' => $userData['givenName'],
        )
    );
}else{
    header('Location: admin_area/login.php');
    exit();
}
?>