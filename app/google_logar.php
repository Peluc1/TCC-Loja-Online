<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

require'../vendor/autoload.php';
require 'db/env.php';
var_dump($_POST);

$google_client = new Google_Client();
$google_client -> setClientId(GOOGLE_INFO['clientId']);
$google_client -> setClientSecret(GOOGLE_INFO['clientSecret']);
$google_client -> setRedirectUri(GOOGLE_INFO['redirectURL']);

$google_client -> addScope('email');
$google_client -> addScope('profile');

if (!isset($_COOKIE['g_csrf_token']) || $_COOKIE['g_csrf_token'] !== $_POST['g_csrf_token'] || !isset($_POST['credential'])) {
    
    echo "Something went very wrong with you Login request<br>
    <a href='../../public/views/login.php'>Back to login</a>";

}else{
    date_default_timezone_set('America/Sao_Paulo');

    $jwt = new \Firebase\JWT\JWT; //https://github.com/googleapis/google-api-php-client/issues/1172
    $jwt::$leeway = 10;

    $idToken = filter_var ($_POST['credential'],FILTER_SANITIZE_STRING);

    if(empty ($idToken) || $idToken !== $_POST['credential']){
        exit;
    }

    $payLoad = $google_client -> verifyIdToken($idToken);

    if($payLoad){
        $json = file_get_contents("https://oauth2.googleapis.com/tokeninfo?id_token=".$idToken);
        $data = json_decode($json);

        var_dump($data);



    }
}

