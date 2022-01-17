<?PHP session_start();
error_reporting (0) ;
include('conexion.php'); 
$actual = date("Y-m-d H:i:s");?>

<!-- Funcion Alta de Aviso -->
<?PHP
	if ($_GET[fn]=='avisos_new'){
		echo "Guardando datos...";
		$fecha = str_replace("/", "-", $_GET[fecha]);
		$fecha = date('Y-m-d',strtotime($fecha));
		$query="INSERT INTO avisos (
		`fecha`,
		`puesto`,
		`estado`,
		`lugar`,
		`horario`,
		`descripcion`,
		`funciones`,
		`requisitos`,
		`detalles`,
		`alta_ope`,		
		`alta_fec`		
		)VALUES(
		'$fecha',
		'$_GET[puesto]',
		'$_GET[estado]',
		'$_GET[lugar]',
		'$_GET[horario]',
		'$_GET[descripcion]',
		'$_GET[funciones]',
		'$_GET[requisitos]',
		'$_GET[detalles]',
		'$_SESSION[sesion_UserId]',
		'$actual')"; 
		
		$result = mysqli_query($conexion, $query);
		if (mysqli_affected_rows($conexion)>0){ 

		} else {?>
			<script>
				alert("Ocurrio un Error!!");
				//location.replace("../avisos.php");
			</script>
			<?PHP 	
		};
	};
 ?>
 
 <!-- Modificacion de avisos -->
<?PHP
	if ($_GET[fn]=='avisos_mod'){
		echo "Modificando datos...";
		$fecha = str_replace("/", "-", $_GET[fecha]);
		$fecha = date('Y-m-d',strtotime($fecha));
		//***************************************
		$query="UPDATE avisos SET
		fecha='$fecha',
		puesto='$_GET[puesto]',
		estado='$_GET[estado]',
		lugar='$_GET[lugar]',
		horario='$_GET[horario]',
		descripcion='$_GET[descripcion]',
		funciones='$_GET[funciones]',
		requisitos='$_GET[requisitos]',
		detalles='$_GET[detalles]'
		WHERE id = '$_GET[id]'";	 
		$result = mysqli_query($conexion, $query);
		if (mysqli_affected_rows($conexion)>0){ 

		} else {?>
			<script>
				alert("Ocurrio un Error!!");
			</script>
			<?PHP 
		};
	}; 
?>

<!-- Baja de avisos -->
<?PHP
	if ($_GET[fn]=='avisos_del'){
		echo "Eliminando datos...";
		$query = "UPDATE avisos SET
		baja_fec ='$actual',
		baja_ope ='$_SESSION[sesion_UserId]'
		WHERE id = '$_GET[id]'";	 
		$result = mysqli_query($conexion, $query);
		if (mysqli_affected_rows($conexion)>0){ 
		
		} else {?>
			<script>
				alert("Ocurrio un Error al eliminar el Registro!!");
			</script>
			<?PHP
		}; 
	};
?>

<script>
	location.replace("../avisos.php");
</script>