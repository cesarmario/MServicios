<?PHP
session_start();
error_reporting(E_ALL ^ E_NOTICE); 
include('conexion.php'); ?>

<!-- Funciones Tabla Usuarios -->
<?PHP
if ($_REQUEST['fn']=='ctrl'){ //Funcion Control Usuarios
	$usuario=$_REQUEST['usuario'];
	$query="SELECT * FROM usuarios WHERE usuario = '$usuario'"; 
    $result = mysqli_query($conexion, $query);
	$cantidad = mysqli_num_rows($result);
    if ($cantidad>0){ ?>
		<script>
        	alert("El Usuario Ya existe!");
			location.replace("../usuarios.php");
        </script>
    <?PHP } else {?>
		<script>
            location.replace("../usuarios_datos.php?usuario=<?PHP echo $usuario?>&fn=ins");
        </script>
	<?PHP } ?>
<?PHP } ?>

<!-- Funciones Insertar Usuarios -->
<?PHP
if ($_REQUEST['fn']=='ins'){
	$us=$_REQUEST['usuario'];
	$nm=$_REQUEST['nombre'];
	$ps=md5($_REQUEST['password']);
		
	$query="INSERT INTO usuarios (`usuario`,`nombre`,`pass`,`baja`,`admin`)VALUES('$us','$nm','$ps',0,0)"; 
	$result = mysqli_query($conexion, $query);
	if (mysqli_affected_rows($conexion)>0){
	?>
		<script>
			//alert("Datos cargados correctamente");
			location.replace("../usuarios.php");
		</script>
		<body onLoad="envio()">
	<?PHP } else {?>
		<script>
			alert("Ocurrio un Error!!");
		</script>
		<input type ='button' value = 'Volver' onClick="location.replace('../usuarios.php');" class="button"/>
	<?PHP } ?>
    
<?PHP } ?>

<!-- Funciones Modificar Usuarios -->
<?PHP
if ($_REQUEST['fn']=='udp'){
	$id=$_REQUEST['id'];
	$us=$_REQUEST['usuario'];
	$nm=$_REQUEST['nombre'];

	$query="UPDATE usuarios SET usuario='$us',nombre='$nm' WHERE id='$id'"; 
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion)>0){
	?>
		<script>
        	//alert("Datos cargados correctamente");
			location.replace("../usuarios.php");
        </script>
        <body onLoad="envio()">
    <?PHP } else {?>
		<script>
            alert("Ocurrio un Error!!");
        </script>
        <input type ='button' value = 'Volver' onClick="location.replace('../usuarios.php');" class="button"/>
	<?PHP } ?>
<?PHP } ?>
<!-- Actualizar Contraseña -->
<?PHP
if ($_REQUEST['fn']=='psw'){ 
	$us=$_REQUEST['usuario'];
	$psw=$_REQUEST['password'];
	
	$query="UPDATE usuarios SET pass=md5('$psw') WHERE usuario='$us' "; 
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion)>0){
	?>
		<script>
        	alert("Contraseña a sido modificada correctamente");
			location.replace("../index.php");
        </script>
    <?PHP } else {?>
		<script>
            alert("Ocurrio un Error!!");
        </script>
        <input type ='button' value = 'Volver' onClick="location.replace('../index.php');" class="button"/>
	<?PHP } ?>
<?PHP } ?>