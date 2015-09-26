<?php

include("facebook/facebook.php");
include("include/config.php");

$faceBookObj = new facebook(array(
                    'appId' => FACEBOOK_APP_ID,
                    'secret' => FACEBOOK_SECRET_KEY,
                ));


$fbUser = $faceBookObj->getUser();

$accessToken=$faceBookObj->getAccessToken();

if (!empty($accessToken)) {
    try {
        //get facebook likes
        //$session = $helper->getSessionFromRedirect();
        //$request = new FacebookRequest($session, 'GET', '/me');
        //Todo save likes in db
    } catch (Exception $e) {
        echo $e;
    }
}

