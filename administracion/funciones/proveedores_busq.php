<?PHP
	error_reporting(E_ALL ^ E_NOTICE);
	include('conexion.php');
?>	

<?PHP
	
	if (isset($_REQUEST['nom'])){$nom=$_REQUEST['nom'];}else{$nom="";};
	if (isset($_REQUEST['rubro'])){$idrub=$_REQUEST['rubro'];}else{$idrub=0;};
	if (isset($_REQUEST['espec'])){$idesp=$_REQUEST['espec'];}else{$idesp=0;};
	echo "id rubro:".$idrub;
	echo "<br>id espec:".$idesp;
	if ($idrub==0 and $idesp==0){
		$query="SELECT * FROM proveedores ORDER BY nombre ASC "; ?>
		<script>
			//alert("No hay filtros!");
		</script>
	<?PHP
	} else {
		
		if ($idrub>0){
			
			$qrub="SELECT * FROM rubros WHERE id = $idrub";
			$rstrub = mysqli_query($conexion, $qrub);
			$rub=mysqli_fetch_assoc($rstrub);
			$nrubro = upper($rub["descripcion"]);
			
			echo "Busca Rubro: " . $rubro;
			$query="SELECT * FROM proveedores WHERE upper(rubro1) LIKE '%$nrubro%'";			

		}
		
		if ($idesp!="0"){
			$query="SELECT * FROM proveedores WHERE upper(especialidad1) LIKE '%$$idesp%'";
	
		}
	} 
	$result = mysqli_query($conexion, $query);
	?>