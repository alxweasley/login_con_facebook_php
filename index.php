<?php

require 'app/fb_init.php';

if(isset($_SESSION['facebook_access_token'])){
	$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

	try {
	  $response = $fb->get('/me?fields=id,first_name,last_name,name, link,picture');
	  $userNode = $response->getGraphUser();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  // When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  // When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	echo 'Logged in as ' . $userNode->getName();
	echo '<br/><img src="'.$userNode->getPicture()->getUrl().'"/>';
	echo '<br/> <a href="logout.php">Logout</a>';
}else{
	$helper = $fb->getRedirectLoginHelper();
	$permissions = []; // optional
	$loginUrl = $helper->getLoginUrl('http://localhost/Tutorials/facebook_login/login-callback.php', $permissions);

	echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
}

