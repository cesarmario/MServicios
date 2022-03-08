<?PHP
	error_reporting(E_ALL ^ E_NOTICE);
	include('conexion.php');
?>	

<?PHP
	
	if (isset($_REQUEST['nom'])){$nom=$_REQUEST['nom'];}else{$nom="";};
	if (isset($_REQUEST['rubro'])){$rubro=$_REQUEST['rubro'];}else{$rubro=0;};
	if (isset($_REQUEST['espec'])){$espec=$_REQUEST['espec'];}else{$espec=0;};
	echo "id rubro:".$rubro;
	echo "<br>id espec:".$espec;
	if ($rubro==0 and $espec==0){
		$query="SELECT * FROM proveedores ORDER BY nombre ASC "; ?>
		<script>
			//alert("No hay filtros!");
		</script>
	<?PHP
	} else {
		
		if ($rubro>0){
			
			$qrub="SELECT * FROM rubros WHERE id = $rubro";
			$rstrub = mysqli_query($conexion, $qrub);
			if ($rub=mysqli_fetch_assoc($rstrub)){
			$nrubro = upper($rub["descripcion"]);			
			echo "Busca Rubro: " . $rubro;
			$query="SELECT * FROM proveedores WHERE upper(rubro1) LIKE '%$nrubro%'";			
			}else {
				echo "Error ID Rubro";
			}
		}
		
		if ($espec>0){
			$query="SELECT * FROM proveedores WHERE upper(especialidad1) LIKE '%$$espec%'";
	
		}
	} 
	$result = mysqli_query($conexion, $query);
	?>