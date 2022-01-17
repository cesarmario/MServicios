<?php
	$hostname_ = "localhost";
	$database_ = "c2380876_mserv";
	$username_ = "c2380876_mserv";
	$password_ = "MServ159753";
	$conexion  = mysqli_connect($hostname_, $username_, $password_, $database_) or trigger_error(mysqli_error(),E_USER_ERROR);
	mysqli_set_charset($conexion, 'utf8');
	mysqli_query("SET NAMES 'latin1' ");
?>