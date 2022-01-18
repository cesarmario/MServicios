<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Llenar select a partir de otro con php y mysql</title>
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	
</head>
<body>
	<h2>Llenar un select a partir de otro select con jquery y php</h2>
		
			<label>SELECT 1 (Rubros)</label>
			<br>
			<?PHP include('funciones/conexion.php');
			$qrubro=mysqli_query($conexion,"SELECT * FROM rubros ORDER BY descripcion  "); ?>
			<select data-placeholder="Rubro" class="select-search" name="rubro" id="rubro">
				 <option selected value="0"></option>
				 <?PHP while($rub=mysqli_fetch_assoc($qrubro)){?>
				 <option value="<?PHP echo $rub['id'];?>">
				 <?PHP echo strtoupper($rub['descripcion']);?></option>
				 <?PHP } ?>      
		   </select>
			<br>
			<div id="especialidad"></div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#rubro').val(1);
		recargarLista();

		$('#rubro').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"funciones/especialidad_lista.php",
			data:"idrubro=" + $('#rubro').val(),
			success:function(r){
				$('#especialidad').html(r);
			}
		});
	}
</script>
