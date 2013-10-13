<!DOCTYPE html>
<html lang="es">
<head>
	<title>YO QUIERO! | XXXXXXXXXXXXX</title>
	<meta charset="UTF-8">
	<meta name="description" content="TEMATICA">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="shortcut icon" type="image/x-ico" href="favicon.ico">
	<link rel="author" type="text/css" href="humans.txt">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/index.js"></script>
</head>
<?php
	require_once("facebook.php");
	$config = array();
	$config['appId'] = '499858956777608';
	$config['secret'] = '5be2592f653de228e1ff70bfc67d6e93';
	$facebook = new Facebook($config);
	$uid = $facebook->getUser();
	
	if ($uid==0) {
		$params = array(
		  'scope' => 'read_stream, friends_likes',
		  'redirect_uri' => 'http://ic-itcr.ac.cr/~murena/yoquiero/logged.php'
		);
		$loginUrlFacebook = $facebook->getLoginUrl($params);
		?>
		<body>
			<section id="login">
				<section id="login_input">
					<span id="login_register">(Registrarse)</span>
					<input type="text" name="login_username" placeholder="Correo">
					<input type="password" name="login_password" placeholder="Contraseña">
					<input id="login_submit" type="submit" value="Ingresar">
					<span>o bien</span>
					<a href="<?php echo $loginUrlFacebook; ?>">INGRESAR CON FACEBOOK</a>
				</section>
			</section>
			<section id="register">
				<section id="user_register">
					<span>Nombre:</span>
					<input type="text" placeholder="Nombre Completo">
					<span>Correo:</span>
					<input type="email" placeholder="Introducir correo">
					<span>Contraseña:</span>
					<input type="password">
					<input id="register_submit" type="submit" value="Registrar">
				</section>
			</section>
		</body>
	<?php
	} 
	else {

	}
?>
</html>
