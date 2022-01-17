<?PHP
session_start();
error_reporting(E_ALL ^ E_NOTICE); 
include('conexion.php');
echo "Procesando datos..."; 
//Funcion Insertar Rubros
if ($_REQUEST['fn']=='ins'){ 
	$des=$_REQUEST['des'];
	
	$query="SELECT * FROM rubros WHERE descripcion = '$des'"; 
    $result = mysqli_query($conexion, $query);
	$cantidad = mysqli_num_rows($result);
    if ($cantidad>0){
	?>
		<script>
        	alert("Esta Rubro Ya existe!");
			location.replace("../rubros.php");
        </script>
    <?PHP } else {		
		$queryins="INSERT INTO rubros (`descripcion`)VALUES('$des')"; 
		$result = mysqli_query($conexion, $queryins);
		if (mysqli_affected_rows($conexion)>0){
		?>
			<script>
				//alert("Datos cargados correctamente");
				location.replace("../rubros.php");
			</script>
			<body onLoad="envio()">
		<?PHP } else { ?>
			<script>
				alert("Ocurrio un Error!!");
				//location.replace("index.php");
			</script>
			<input type ='button' value = '&nbsp;Volver&nbsp;' onClick="location.replace('../Rubros.php');" class="button"/>
		<?PHP }	
	}
 }

//Funcion Editar Rubros
if ($_REQUEST['fn']=='udp'){
	$des=$_REQUEST['des'];
	$id =$_REQUEST['id'];
	if (isset($_REQUEST[baja])){$baja=1;}else{$baja=0;};
	$query="UPDATE rubros SET descripcion = '$des', baja = '$baja' WHERE id = '$id'"; 
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion)>0){
	?>
		<script>
        	//alert("Datos Modificados correctamente");
			location.replace("../rubros.php");
        </script>
        <body onLoad="envio()">
    <?PHP } else {?>
		<script>
            alert("Ocurrio un Error!!");
            //location.replace("index.php");
        </script>
        <input type ='button' value = 'Volver' onClick="location.replace('../rubros.php');" class="button"/>
	<?PHP } ?>
<?PHP } ?>