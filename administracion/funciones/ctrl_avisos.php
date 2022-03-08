<?PHP
	error_reporting(E_ALL ^ E_NOTICE);
	include('conexion.php');
?>	

<?PHP
	if (isset($_GET[puesto])){$puesto=$_GET[puesto];}else{$puesto="";};
	if (isset($_GET[fecha])) {$fecha=$_GET [fecha]; }else{$fecha="";};
	if (isset($_GET[estado])){$estado=$_GET[estado];}else{$estado="";};

	if ($idcliente=="" and $puesto=="" and $fecha=="" and $estado==""){
		$query="SELECT * FROM avisos WHERE baja_ope = '' ORDER BY fecha DESC limit 30"; ?>
		<script>
			//alert("No hay filtros!");
		</script>
	<?PHP
	} else {
		
		if ($puesto!=""){
			$query="SELECT * avisos WHERE baja_ope = '' AND puesto LIKE '%$puesto%'";

		}
		
		if ($fecha!=""){
			$fecha = str_replace("/", "-", $fecha);
			$fecha = date('Y-m-d',strtotime($fecha));	
			$query="SELECT * FROM avisos WHERE baja_ope = '' AND fecha = '$fecha' ORDER BY fecha DESC";
		}
		
		if ($estado!=""){
			$query="SELECT * FROM avisos WHERE baja_ope = '' AND estado = '$estado' ORDER BY fecha,";
	
		}
	} 
	$result = mysqli_query($conexion, $query);
	?>