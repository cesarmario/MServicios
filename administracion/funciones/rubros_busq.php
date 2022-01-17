<?PHP
error_reporting(E_ALL ^ E_NOTICE);
include('conexion.php');

if (isset($_REQUEST[bnombre])){$bnombre=$_REQUEST[bnombre];}else{$bnombre="";}

if ($bnombre==""){
	$query="SELECT * FROM rubros WHERE baja = 0";
	$result = mysqli_query($conexion, $query);
} else {
	$query="SELECT * FROM rubros WHERE UPPER(descripcion) LIKE '%$bnombre%' AND baja = 0";
	$result = mysqli_query($conexion, $query);
} ?>