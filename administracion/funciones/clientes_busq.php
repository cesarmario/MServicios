<?PHP
	error_reporting(E_ALL ^ E_NOTICE);
	include('conexion.php');
?>	

<?PHP
	if (isset($_REQUEST[nom])){$nom=$_REQUEST[nom];}else{$nom="";};
	if (isset($_REQUEST[rubro])){$rubro1=$_REQUEST[rubro];}else{$rubro="";};
	if (isset($_REQUEST[espec])) {$espec1=$_REQUEST [espec]; }else{$espec="";};

	if ($rubro1=="" and $espec1==""){
		$query="SELECT * FROM clientes ORDER BY nombre ASC "; ?>
		<script>
			//alert("No hay filtros!");
		</script>
	<?PHP
	} else {
		
		if ($rubro1!=""){
			echo "busca Rubro: " . $rubro1;
			$query="SELECT * FROM clientes WHERE upper(rubro1) LIKE '%$rubro1%'";

		}
		
		if ($espec1!=""){
			$query="SELECT * FROM clientes WHERE upper(especialidad1) LIKE '%$espec1%'";
	
		}
	} 
	$result = mysqli_query($conexion, $query);
	?>