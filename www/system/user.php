<?php
	session_start();
	require_once("facebook.php");
	$config = array();
	$config['appId'] = '499858956777608';
	$config['secret'] = '5be2592f653de228e1ff70bfc67d6e93';
	$facebook = new Facebook($config);
	$uid = $facebook->getUser();
	// $uid ahora tiene id de usuario de facebook o 0 si  no ha ingresado
	$usuarioIngresado = 0;
	if ($uid == 0) {
		if (isset($_SESSION["user_logged"])) {
			$usuarioIngresado = $_SESSION['user_logged'];
		}
	} else {
		$bd = new conector($server,$username,$usrpassword,$dbname);
		mysqli_set_charset($bd,'utf8');
		$query = "SELECT * FROM USUARIOS WHERE IDFB='".$uid."'";
		if ($result = $bd->query($consulta)) {
			$usuarioIngresado  = $result->fetch_array(MYSQLI_ASSOC);
		} else {
			$usuarioIngresado = -1;
		}
	}
?>
