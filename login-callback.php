<?php

include("facebookv4/autoload.php");
session_start();

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

FacebookSession::setDefaultApplication(FACEBOOK_APP_ID, FACEBOOK_SECRET_KEY);

$helper = new FacebookRedirectLoginHelper(REDIRECT_URL);
try {
    $session = $helper->getSessionFromRedirect();
    $request = new FacebookRequest($session, 'GET', '/me');
    $response = $request->execute();
    $graphObject = $response->getGraphObject()->asArray();


    $request2 = new FacebookRequest(
            $session, 'GET', '/' . $graphObject['id'] . '/likes'
    );
    $response2 = $request2->execute();
    $graphObject2 = $response2->getGraphObject()->asArray();
    echo "Likes of user====";

    foreach ($graphObject2['data'] as $value) {
        echo $value->name;
        echo "</br>";
    }
} catch (FacebookRequestException $ex) {
    // When Facebook returns an error
} catch (\Exception $ex) {
    // When validation fails or other local issues
}
if ($session) {
    
}

?>
