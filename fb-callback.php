<?php
if (!session_id()) {
    @session_start();
}
	require_once "config.php";

	try {
		$accessToken = $helper->getAccessToken();
	} catch (\Facebook\Exceptions\FacebookResponseException $e) {
		echo "Response Exception: " . $e->getMessage();
		exit();
	} catch (\Facebook\Exceptions\FacebookSDKException $e) {
		echo "SDK Exception: " . $e->getMessage();
		exit();
	}

	if (!$accessToken) {
		header('Location: login.php');
		exit();
	}

	$oAuth2Client = $FB->getOAuth2Client();
	if (!$accessToken->isLongLived())
		$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

//	$response = $FB->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
	//$response = $FB->get("/me?fields=id,name,education,email,first_name,last_name,gender,link,birthday,languages,location, picture.type(large)", $accessToken);

	//get değerini https://developers.facebook.com/tools/explorer/ bu siteden bakabilirsiniz alttaki get değeri
	$response = $FB->get("/me?fields=id,first_name,middle_name,last_name,email,birthday,gender,hometown,location,link,age_range,picture.type(large)", $accessToken);



	$userData = $response->getGraphNode()->asArray();

	$userData = $response->getDecodedBody(); //Verileri Array olarak getiriyor


	$_SESSION['userData'] = $userData;

	$_SESSION['access_token'] = (string) $accessToken;
/*
	echo '<pre>';
	print_r($_SESSION['userData']);
echo '</pre>';	
*/
header('Location: index.php');
	exit();
?>