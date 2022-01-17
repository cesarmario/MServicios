<?PHP
session_start();
error_reporting(E_ALL ^ E_NOTICE); 
include('conexion.php'); ?>

<!-- Funciones Tabla Usuarios -->
<?PHP
if ($_GET[fn]=='us_c'){ //Funcion Control Usuarios
	$usuario=$_GET[usuario];
	$query="SELECT * FROM usuarios WHERE usuario = '$usuario'"; 
    $result = mysqli_query($conexion, $query);
	$cantidad = mysqli_num_rows($result);
    if ($cantidad>0){
	?>
		<script>
        	alert("El Usuario Ya existe!");
			location.replace("../usuarios.php");
        </script>
        <body onLoad="envio()">
    <?PHP } else {?>
		<script>
            location.replace("../usuarios_datos.php?usuario=<?PHP echo $usuario?>&fn=us_a");
        </script>
	<?PHP } ?>
<?PHP } ?>

<!-- Funciones Insertar Usuarios -->
<?PHP
if ($_GET[fn]=='us_a'){
	$us=$_GET[usuario];
	$nm=$_GET[nombre];
	$ps=md5($_GET[password]);
		
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
if ($_GET[fn]=='us_u'){
	$id=$_GET[id];
	$us=$_GET[usuario];
	$nm=$_GET[nombre];

	$query="UPDATE usuarios SET usuario='$us',nombre='$nm', WHERE id='$id'"; 
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
if ($_GET[fn]=='psw_u'){ 
	$us=$_GET[usuario];
	$psw=$_GET[password];
	
	$query="UPDATE usuarios SET pass=md5('$psw') WHERE usuario='$us' "; 
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion)>0){
	?>
		<script>
        	alert("Datos cargados correctamente");
			location.replace("../index.php");
        </script>
        <body onLoad="envio()">
    <?PHP } else {?>
		<script>
            alert("Ocurrio un Error!!");
        </script>
        <input type ='button' value = 'Volver' onClick="location.replace('../index.php');" class="button"/>
	<?PHP } ?>
<?PHP } ?>

<!-- Funciones Tabla Categoria -->
<?PHP
if ($_GET[fn]=='cat_a'){ //Funcion Insertar Categorias
	$nom=$_GET[nom];
	$tip=$_GET[tip];
	$query="INSERT INTO categorias (`nombre`,`tipo`,`baja`)VALUES('$nom','$tip','0')"; 
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion)>0){
	?>
		<script>
        	//alert("Datos cargados correctamente");
			location.replace("../categorias.php");
        </script>
        <body onLoad="envio()">
    <?PHP } else {?>
		<script>
            alert("Ocurrio un Error!!");
            //location.replace("index.php");
        </script>
        <input type ='button' value = '&nbsp;Volver&nbsp;' onClick="location.replace('../categorias.php');" class="button"/>
	<?PHP } ?>
<?PHP } ?>

<?PHP
if ($_GET[fn]=='cat_u'){ //Funcion Editar Categorias
	$nom=$_GET[nom];
	$tip=$_GET[tip];
	$id =$_GET[id];
	if (isset($_GET[baja])){$baja=1;}else{$baja=0;};
	$query="UPDATE categorias SET nombre = '$nom', tipo='$tip', baja = '$baja' WHERE id = '$id'"; 
    $result = mysqli_query($conexion, $query);
    if (mysqli_affected_rows($conexion)>0){
	?>
		<script>
        	alert("Datos Modificados correctamente");
			location.replace("../categorias.php");
        </script>
        <body onLoad="envio()">
    <?PHP } else {?>
		<script>
            alert("Ocurrio un Error!!");
            //location.replace("index.php");
        </script>
        <input type ='button' value = 'Volver' onClick="location.replace('../categorias.php');" class="button"/>
	<?PHP } ?>
<?PHP } ?>