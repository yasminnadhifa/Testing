<?php
    require_once 'vendor/autoload.php';
    
    $google_client = new Google_Client();
    $google_client->setClientId('1029385075983-o6pq69i87djhj1itm5pu4ofk4cjdlsr3.apps.googleusercontent.com');
    $google_client->setClientSecret('SvptxwJjbq0dtbXSDtoxzDeo');
    $google_client->setRedirectUri('http://localhost/yasminnadhifa_1tic/UTS/');
    $google_client->addScope('email');
    $google_client->addScope('profile');

    session_start();

?>