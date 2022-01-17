<?PHP
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	include('conexion.php');
	echo "Inicio de session...";
	$usu  = $_REQUEST[usu];
	$pass = $_REQUEST[pass];
	$query = "SELECT * FROM usuarios WHERE usuario = '$usu' AND pass = md5('$pass')";
	$result = mysqli_query($conexion, $query);
	if ($row = mysqli_fetch_assoc($result)){		
		$_SESSION['sesion_UserId']   = $row['usuario'];
		$_SESSION['sesion_UserNom']  = $row['nombre'];
		$_SESSION['sesion_UserAdm']  = $row['admin']; 
		$_SESSION['sesion_UserRow']  = $row['id'];?>
			<script>
				location.replace("../index.php");
			</script>
	 <?PHP }else{ ?>			
			<script>
				window.alert("Usuario y/o Contraseña Incorrectos");
				location.replace("../user_login.php");
			</script> 
	 <?PHP } ?>