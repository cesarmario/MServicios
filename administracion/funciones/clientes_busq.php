<?PHP
	error_reporting(E_ALL ^ E_NOTICE);
	include('conexion.php');
?>	

<?PHP
	if (isset($_REQUEST[nom])){$nom=$_REQUEST[nom];}else{$nom="";};
	if (isset($_REQUEST[rubro1])){$rubro1=$_REQUEST[rubro1];}else{$rubro1="";};
	if (isset($_REQUEST[espec1])) {$espec1=$_REQUEST [espec1]; }else{$espec1="";};
	if (isset($_REQUEST[rubro2])){$rubro1=$_REQUEST[rubro2];}else{$rubro2="";};
	if (isset($_REQUEST[espec3])) {$espec1=$_REQUEST [espec2]; }else{$espec2="";};

	if ($rubro1=="" and $espec1==""){
		$query="SELECT * FROM clientes ORDER BY nombre DESC "; ?>
		<script>
			//alert("No hay filtros!");
		</script>
	<?PHP
	} else {
		
		if ($rubro1!=""){
			$query="SELECT * FROM clientes WHERE strtolower(rubro1) LIKE '%$rubro1%'";

		}
		
		if ($espec1!=""){
			$query="SELECT * FROM clientes WHERE strtolower(especialidad1) LIKE '%$espec1%'";
	
		}
	} 
	$result = mysqli_query($conexion, $query);
	?>