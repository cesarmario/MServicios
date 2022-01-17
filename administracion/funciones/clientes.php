<?PHP
session_start();
error_reporting(E_ALL ^ E_NOTICE); 
include('conexion.php'); ?>

<!-- Funciones Tabla Usuarios -->
<?PHP
if ($_REQUEST[fn]=='ctrl'){ //Funcion Control Usuarios
	$dni=$_REQUEST[dni];
	$query="SELECT * FROM clientes WHERE dni = '$dni'"; 
    $result = mysqli_query($conexion, $query);
	$cantidad = mysqli_num_rows($result);
    if ($cantidad>0){
	?>
		<script>
        	alert("El Usuario Ya existe!");
			location.replace("../clientes.php");
        </script>
        <body onLoad="envio()">
    <?PHP } else {?>
		<script>
           // location.replace("../usuarios_datos.php?usuario=<?PHP echo $usuario?>&fn=us_a");
        </script>
	<?PHP } ?>
<?PHP } ?>

<!-- Funciones Insertar Usuarios -->
<?PHP
if ($_REQUEST[fn]=='ins'){
	
	$query="INSERT INTO clientes (nombre,
	apellido,
	fotoperfil,
	dni,
	direccion,
	localidad,
	provincia,
	telefono,
	correo,
	clave,
	razsoc_nomcom,
	cuilt,
	mas10km,
	mas30km,
	mas100km,
	menos100km,
	otras_provicias,
	h8a12,
	h12a18,
	h18a22,
	urgencias,
	rubro1,
	especialidad1,
	rubro2,
	especialidad2,
	particular_domicilio,
	empresa_institucion
	)VALUES(
	$_REQUEST[nombre],
	$_REQUEST[apellido],
	$_REQUEST[fotoperfil],
	$_REQUEST[dni],
	$_REQUEST[direccion],
	$_REQUEST[localidad],
	$_REQUEST[provincia],
	$_REQUEST[telefono],
	$_REQUEST[correo],
	$_REQUEST[clave],
	$_REQUEST[razsoc_nomcom],
	$_REQUEST[cuilt],
	$_REQUEST[mas10km],
	$_REQUEST[mas30km],
	$_REQUEST[mas100km],
	$_REQUEST[menos100km],
	$_REQUEST[otras_provicias],
	$_REQUEST[h8a12],
	$_REQUEST[h12a18],
	$_REQUEST[h18a22],
	$_REQUEST[urgencias],
	$_REQUEST[rubro1],
	$_REQUEST[especialidad1],
	$_REQUEST[rubro2],
	$_REQUEST[especialidad2],
	$_REQUEST[particular_domicilio],
	$_REQUEST[empresa_institucion])";
	
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
if ($_REQUEST[fn]=='upd'){

	$query="UPDATE clientes SET
	nombre=$_REQUEST[nombre],
	apellido=$_REQUEST[apellido],
	fotoperfil=$_REQUEST[fotoperfil],
	dni=$_REQUEST[dni],
	direccion=$_REQUEST[direccion],
	localidad=$_REQUEST[localidad],
	provincia=$_REQUEST[provincia],
	telefono=$_REQUEST[telefono],
	correo=$_REQUEST[correo],
	clave=$_REQUEST[clave],
	razsoc_nomcom=$_REQUEST[razsoc_nomcom],
	cuilt=$_REQUEST[cuilt],
	mas10km=$_REQUEST[mas10km],
	mas30km=$_REQUEST[mas30km],
	mas100km=$_REQUEST[mas100km],
	menos100km=$_REQUEST[menos100km],
	otras_provicias=$_REQUEST[otras_provicias],
	h8a12=$_REQUEST[h8a12],
	h12a18=$_REQUEST[h12a18],
	h18a22=$_REQUEST[h18a22],
	urgencias=$_REQUEST[urgencias],
	rubro1=$_REQUEST[rubro1],
	especialidad1=$_REQUEST[especialidad1],
	rubro2=$_REQUEST[rubro2],
	especialidad2=$_REQUEST[especialidad2],
	particular_domicilio=$_REQUEST[particular_domicilio],
	empresa_institucion=$_REQUEST[empresa_institucion]
	WHERE id='$id'"; 
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
        <input type ='button' value = 'Volver' onClick="location.replace('../clientes.php');" class="button"/>
	<?PHP } ?>
<?PHP } ?>