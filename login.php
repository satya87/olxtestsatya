<?php
include("include/config.php");
include('facebook/facebook.php');


$faceBookObj = new facebook(array(
                    'appId' => FACEBOOK_APP_ID,
                    'secret' => FACEBOOK_SECRET_KEY,
                ));

$loginUrl = $faceBookObj->getLoginUrl(
                array(
                    'redirect_uri' => "http://indfas.alice.com/facebookResponse.php",
                    'cancel_uri'   => '',
                    'scope'        => 'email,likes,first_name'
                )
            );
header('Location: ' . $loginUrl);

?>
<a id="fb-auth" href="login.php" class="d-inline"><span class="social-sprite fb-login d-block"></span></a>
<div id="fb-root"></div>
<div id="fbconnectfailed" class="s-error"></div>
