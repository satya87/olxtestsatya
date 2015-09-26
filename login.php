<?php
include("include/config.php");
include('facebook/facebook.php');

$faceBookObj = new facebook(array(
                    'appId' => FACEBOOK_APP_ID,
                    'secret' => FACEBOOK_SECRET_KEY,
                ));

if (isset($_POST['Login'])) {
    $hostname = "http://indfas.alice.com/";
    
    $loginUrl = $faceBookObj->getLoginUrl(
                array(
                    'redirect_uri' => $hostname."facebookResponse.php",
                    'cancel_uri'   => 'cancel.php',
                    'scope'        => 'email'
                )
            );
    //redirect to facebook login page
header('Location: ' . $loginUrl);
}

?>
<div>
<form action="login.php" method="post">
Facebook login Page
Click login button
<input type="submit" name="Login" value="Login">
</form>
</div>

