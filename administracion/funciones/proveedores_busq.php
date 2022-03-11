<?PHP
	error_reporting(E_ALL ^ E_NOTICE);
	include('conexion.php');
?>	

<?PHP
	
	if (isset($_REQUEST['nom'])){$nom=$_REQUEST['nom'];}else{$nom="";};
	if (isset($_REQUEST['rubro'])){$rubro=$_REQUEST['rubro'];}else{$rubro=0;};
	if (isset($_REQUEST['espec'])){$espec=$_REQUEST['espec'];}else{$espec=0;};
	
	echo "Nombre:".$nom;
	echo "<br>id rubro:".$rubro;
	echo "<br>id espec:".$espec;
	if ($rubro==0 and $espec==0 and $nom==""){
		$query="SELECT * FROM vista_proveedores ORDER BY nombre ASC "; ?>
	<?PHP
	} else {
		if ($nom==""){
			if ($rubro>0){
				$query="SELECT * FROM vista_proveedores WHERE rubro = $rubro";
				
				if ($espec>0){
					$query="SELECT * FROM vista_proveedores WHERE rubro = $rubro AND especialidad = $espec";
				}
			}
		}else{
			$query="SELECT * FROM vista_proveedores WHERE UPPER(nombre) LIKE '%$nom%' OR UPPER(apellido) LIKE '%$nom%' ";
			if ($rubro>0){
				$query="SELECT * FROM vista_proveedores WHERE  (UPPER(nombre) LIKE '%$nom%' OR UPPER(apellido) LIKE '%$nom%') AND rubro = $rubro";
				
				if ($espec>0){
					$query="SELECT * FROM vista_proveedores WHERE (UPPER(nombre) LIKE '%$nom%' OR UPPER(apellido) LIKE '%$nom%') AND rubro = $rubro AND especialidad = $espec";
				}
			}

			
		}
	}
	
	$result = mysqli_query($conexion, $query);
	?>