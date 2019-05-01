<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}


	//Facebook tarafından yönlendirilecek adres, burayı kendinize göre değiştiriniz.
	$redirectURL = "http://localhost:81/FacebookLogin/fb-callback.php";

//Scope değerini https://developers.facebook.com/tools/explorer/ sağ taraftaki Get Token yazılı yerden alabilirsiniz.
	$loginURL = $helper->getLoginUrl($redirectURL, 
		array(
    'scope' => 'email,user_age_range,user_link,user_gender,user_location,user_hometown,user_birthday'
));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="images/logo.png"><br><br>
				<form>
					<input name="email" placeholder="Email" class="form-control"><br>
					<input name="password" type="password" placeholder="Password" class="form-control"><br>
					<input type="submit" value="Log In" class="btn btn-primary">
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>

</body>
</html>