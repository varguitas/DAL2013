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
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
	<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	<script src="js/index.js"></script>
</head>
<?php
	include("system/conexion.php");
	include("system/conector.php");
	include("system/user.php");
	$section = 'login';
	if (isset($_GET['section'])) {
		$section = $_GET['section'];
	}
	if ($usuarioIngresado==0) {
		$params = array(
		  'scope' => 'read_stream, friends_likes',
		  'redirect_uri' => 'http://ic-itcr.ac.cr/~murena/yoquiero/logged.php'
		);
		$loginUrlFacebook = $facebook->getLoginUrl($params);
		?>
		<body>
			<?php 
				if (strcmp($section),'login') {
			?>
			<section id="login">
				<section id="login_input">
					<a href="index.php?section='register'" data-transition="slide" id="login_register">(Registrarse)</a>
					<input type="email" name="login_username" placeholder="Correo">
					<input type="password" name="login_password" placeholder="Contraseña">
					<input id="login_submit" type="submit" value="Ingresar">
					<span>o bien</span>
					<a href="<?php echo $loginUrlFacebook; ?>">INGRESAR CON FACEBOOK</a>
				</section>
			</section>
			<?php
				}
				 if (strcmp($section),'register') {
			?>
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
			<?php
				 }
			?>
		</body>
	<?php 
	} 
	else if ($usuarioIngresado==-1) {
		echo "Hay un error al procesar la base de datos. Por favor intentelo más tarde.";
	}
	else {
		echo "TODO BIEN";
	}
?>
</html>
