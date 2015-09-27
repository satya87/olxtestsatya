<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

include("facebookv4/autoload.php");

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

FacebookSession::setDefaultApplication(FACEBOOK_APP_ID, FACEBOOK_SECRET_KEY);

$helper = new FacebookRedirectLoginHelper('http://indfas.alice.com/login-callback.php');

$loginUrl = $helper->getLoginUrl();
echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
