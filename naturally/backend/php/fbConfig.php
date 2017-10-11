<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 08/10/2017
 * Time: 17:07
 */
if(!session_id()){
    session_start();
}

// Include the autoloader provided in the SDK
// require_once __DIR__ . 'lib/Facebook/autoload.php';
require_once 'lib/php-graph-sdk-5.x/src/Facebook/autoload.php';

// Include required libraries
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

/*
 * Configuração e setup do Facebook SDK
 */
$appId         = '278997635938705'; //Facebook App ID
$appSecret     = '7f24451c41637e723665d3dce57c478c'; //Facebook App Secret
$redirectURL   = 'http://localhost/backend/php/'; //Callback URL
$fbPermissions = array('email');  // Permissões opcionais

$fb = new Facebook(array(
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v2.10',
));

// Get redirect login helper
$helper = $fb->getRedirectLoginHelper();

// Try to get access token
try {
    if(isset($_SESSION['facebook_access_token'])){
        $accessToken = $_SESSION['facebook_access_token'];
    }else{
        $accessToken = $helper->getAccessToken();
    }
} catch(FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}