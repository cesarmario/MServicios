<?php 
include('funciones/conexion.php');
$idrubro=$_REQUEST['idrubro'];

	$sql="SELECT * FROM especialidades WHERE id_rubro = '$idrubro'";

	$result=mysqli_query($conexion,$sql);

	//$cadena="<label>SELECT 2 (paises)</label> 
	//		<select id='lista2' name='lista2'>";
	
	$cadena="<label>SELECT 2 (Especialidades)</label>
			 <br>
	         <select id='espec' name='espec' >";
			 
	$cadena="<label>SELECT 2 (paises)</label> 
			<select id='lista2' name='lista2'>";
	
	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena."<option value='".$ver[0]."'>".$ver[2]."</option>";
	}
	echo  $cadena."</select>";
	

?>