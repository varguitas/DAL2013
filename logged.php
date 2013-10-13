<?php
	require_once("facebook.php");
	$config = array();
	$config['appId'] = '499858956777608';
	$config['secret'] = '5be2592f653de228e1ff70bfc67d6e93';
	$facebook = new Facebook($config);
	$uid = $facebook->getUser();
	echo $uid;
?>
