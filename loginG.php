<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '360565083916-dlolntbk8obh9ieojk1v9s5fd1chjc80.apps.googleusercontent.com'; //Application client ID
	$clientSecret = '2hm-3E7CKec8xtotyZ5XS8ZE'; //Application client secret
	$redirectURL = 'http://127.0.0.1:10080/Social_login'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('my hunar');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>