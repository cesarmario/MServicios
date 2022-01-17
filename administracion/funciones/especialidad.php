<?PHP
session_start();
error_reporting(E_ALL ^ E_NOTICE); 
include('conexion.php');

//Funcion Insertar especialidad
if($_REQUEST['fn']=='ins'){
	$des=$_REQUEST['des'];
	$idr=$_REQUEST['idrubro'];
	$nnr=$_REQUEST['nnrubro'];
	$query="SELECT * FROM especialidades WHERE id_rubro = $idr AND descripcion = '$des'"; 
    $result = mysqli_query($conexion, $query);
	$cantidad = mysqli_num_rows($result);
    if ($cantidad>0){ ?>
		<script>
        	alert("Esta Especialidad Ya existe!");
        </script>		
	 <?PHP
    } else {		
		$queryins="INSERT INTO especialidades (`id_rubro`,`descripcion`)VALUES($idr,'$des')"; 
		$result = mysqli_query($conexion, $queryins);
		if (mysqli_affected_rows($conexion)>0){ ?>
			<script>
				//alert("Datos cargados correctamente");
			</script>
		<?PHP } else {?>
			<script>
				alert("Ocurrio un Error!!");
			</script>
		<?PHP } 
	} ?>
	<form action="../especialidad.php" method="GET" name="form1" id="form1">
		<input type="hidden" name="idrubro" value="<?PHP echo $idr;?>" />
		<input type="hidden" name="nnrubro"  value="<?PHP echo $nnr;?>" />
	</form>
	<script>
		document.form1.submit();
	</script>	
 <?PHP }

//Funcion Editar especialidad
if($_REQUEST['fn']=='udp'){ 
	$id =$_REQUEST['id'];
	$des=$_REQUEST['des'];
	$idr=$_REQUEST['idrubro'];
	$nnr=$_REQUEST['nnrubro'];
	if (isset($_REQUEST[baja])){$baja=1;}else{$baja=0;};
	$query="UPDATE especialidades SET descripcion = '$des', baja = '$baja' WHERE id = '$id'"; 
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion)>0){	?>
		<script>
			document.form1.submit();
			//alert("Datos Modificados correctamente");
		</script>
    <?PHP } else {?>
		<script>
            alert("Ocurrio un Error!!");
        </script>
	<?PHP } ?>
	<form action="../especialidad.php" method="GET" name="form1" id="form1">
		<input type="hidden" name="idrubro" value="<?PHP echo $idr;?>" />
		<input type="hidden" name="nnrubro"  value="<?PHP echo $nnr;?>" />
	</form>
	<script>
		document.form1.submit();
	</script>
<?PHP } ?>