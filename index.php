<?php
	session_start();
//Test amacıyla sessionu destroy ettiriyorum
session_destroy();


	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
/*
echo '<pre>';
print_r($_SESSION['userData']);
echo '</pre>';
*/

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">
			<div class="col-md-3">
				<img src="<?php echo $_SESSION['userData']['picture']['data']['url'] ?>">
			</div>



<?php 
/*
if(isset($_SESSION['userData']['id'])) echo $_SESSION['userData']['id']; 
echo '<br>';
if(isset($_SESSION['userData']['first_name'])) echo $_SESSION['userData']['first_name']; 
echo '<br>';
if(isset($_SESSION['userData']['middle_name'])) echo $_SESSION['userData']['middle_name']; 
echo '<br>';
if(isset($_SESSION['userData']['last_name'])) echo $_SESSION['userData']['last_name'];
echo '<br>';
if(isset($_SESSION['userData']['email'])) echo $_SESSION['userData']['email']; 
echo '<br>';
if(isset($_SESSION['userData']['birthday'])) echo $_SESSION['userData']['birthday']; 
echo '<br>';
if(isset($_SESSION['userData']['gender'])) echo $_SESSION['userData']['gender']; 
echo '<br>';
if(isset($_SESSION['userData']['hometown']['name'])) echo $_SESSION['userData']['hometown']['name']; 
echo '<br>';
if(isset($_SESSION['userData']['location']['name'])) echo $_SESSION['userData']['location']['name']; 
echo '<br>';	
if(isset($_SESSION['userData']['link'])) echo $_SESSION['userData']['link']; 
echo '<br>';	
if(isset($_SESSION['userData']['age_range']['min'])) echo $_SESSION['age_range']['min']; 
echo '<br>';	
if(isset($_SESSION['userData']['age_range']['max'])) echo $_SESSION['age_range']['max']; 
echo '<br>';	
if(isset($_SESSION['userData']['picture']['data']['url'])) echo $_SESSION['userData']['picture']['data']['url']; 
echo '<br>';
*/
//if(isset($_SESSION['userData']['middle_name'])) echo $_SESSION['userData']['middle_name']; 
?>


			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
						<td>ID</td>
						<td><?php if(isset($_SESSION['userData']['id'])) echo $_SESSION['userData']['id']; ?></td>
						</tr>
						<tr>
						<td>İsim</td>
						<td><?php if(isset($_SESSION['userData']['first_name'])) echo $_SESSION['userData']['first_name'];  ?></td>
						</tr>
						<tr>
						<td>İkinci İsim</td>
						<td><?php if(isset($_SESSION['userData']['middle_name'])) echo $_SESSION['userData']['middle_name'];  ?></td>
						</tr>
						<tr>
						<td>Soyisim</td>
						<td><?php if(isset($_SESSION['userData']['last_name'])) echo $_SESSION['userData']['last_name']; ?></td>
						</tr>
						<tr>
						<td>E-Posta</td>
						<td><?php if(isset($_SESSION['userData']['email'])) echo $_SESSION['userData']['email']; ?></td>
						</tr>
						<tr>
						<td>Doğum Tarihi</td>
						<td><?php if(isset($_SESSION['userData']['birthday'])) echo $_SESSION['userData']['birthday']; ?></td>
						</tr>
						<tr>
						<td>Cinsiyet</td>
						<td><?php if(isset($_SESSION['userData']['gender'])) echo $_SESSION['userData']['gender']; ?></td>
						</tr>
						<tr>
						<td>Memleket</td>
						<td><?php if(isset($_SESSION['userData']['hometown']['name'])) echo $_SESSION['userData']['hometown']['name']; ?></td>
						</tr>
						<tr>
						<td>Yaşadığı Şehir</td>
						<td><?php if(isset($_SESSION['userData']['location']['name'])) echo $_SESSION['userData']['location']['name']; ?></td>
						</tr>
						<tr>
						<td>Facebook Profil Linki</td>
						<td><?php if(isset($_SESSION['userData']['link'])) echo $_SESSION['userData']['link']; ?></td>
						</tr>
						<tr>
						<td>Yaş aralığı Min</td>
						<td><?php if(isset($_SESSION['userData']['age_range']['min'])) echo $_SESSION['userData']['age_range']['min']; ?></td>
						</tr>	
						<td>Yaş aralığı Max</td>
						<td><?php if(isset($_SESSION['userData']['age_range']['max'])) echo $_SESSION['userData']['age_range']['max']; ?></td>
						</tr>
						<td>Resim</td>
						<td><?php if(isset($_SESSION['userData']['picture']['data']['url'])) echo $_SESSION['userData']['picture']['data']['url']; ?></td>
						</tr>
						</tr>
						<td>Büyük Resim Kodu</td>

						<td><?php if(isset($_SESSION['userData']['id'])) echo 'https://graph.facebook.com/'.$_SESSION['userData']['id'].'/picture?type=large&width=720&height=720'; ?></td>
						</tr>						
					</tbody>
				</table>
			</div>
<?php // https://stackoverflow.com/questions/11442442/get-user-profile-picture-by-id */ ?>
<?php //echo '<img src="https://graph.facebook.com/'.$_SESSION['userData']['id'].'/picture?type=large&width=720&height=720" />'; ?>

		</div>
	</div>
</body>
</html>