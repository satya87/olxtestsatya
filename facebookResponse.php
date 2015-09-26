<?php
include("facebook/facebook.php");
include("include/config.php");

$faceBookObj = new facebook(array(
                    'appId' => FACEBOOK_APP_ID,
                    'secret' => $facebookSeckey,
                ));


$fbUser = $faceBookObj->getUser();
$accessToken=$faceBookObj->getAccessToken();

if (!empty($accessToken)) {
    //get facebook likes
   $likes = $faceBookObj->api('/'.$fbUser.'/likes');
   //Todo save likes in db
}
