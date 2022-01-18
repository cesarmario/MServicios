<?PHP
session_start();
error_reporting (0); 
include('funciones/login_ctrl.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/php"; charset="ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>MicroServicios</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/sparkline.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/switch.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="js/globalize/globalize.js"></script>
<script type="text/javascript" src="js/globalize/globalize.culture.de-DE.js"></script>
<script type="text/javascript" src="js/globalize/globalize.culture.ja-JP.js"></script>

<script type="text/javascript" src="js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="js/plugins/interface/mousewheel.js"></script>
<script type="text/javascript" src="js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/timepicker.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/application.js"></script>

</head>

<body>
	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="images/logo.png" alt="Londinium"></a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>
               
	</div>
	<!-- /navbar -->

	
    
	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/users/user.png" alt="">
						<div class="user-info">
							<?PHP echo $_SESSION['sesion_UserNom'];?> <span></span>
						</div>
					</a>
					<div class="popup dropdown-menu dropdown-menu-right">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <h6><?PHP echo $_SESSION['sesion_ProfNom'];?> <small>Usuario: <?PHP echo $_SESSION['sesion_UserId'];?></small></h6>                                
                            </div>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="perfil.php"><i class="icon-user"></i> Perfil</a></li>
                            <li class="list-group-item"><a href="funciones/logout.php"><i class="icon-exit"></i> Cerrar Sesion</a></li>
                        </ul>
                    </div>
				</div>
				<!-- /user dropdown -->

				<!-- Main navigation -->
				<ul class="navigation">
					<li><a href="index.php"><span>Inicio</span><i class="icon-screen2"></i></a></li>
					<li>
						<a href="#"><span>Carga de Datos</span><i class="icon-insert-template"></i></a>
						<ul>
                        	<li><a href="rubros.php">Rubros</a></li>
							<li class="active"><a href="#">Clientes</a></li>
						</ul>
					</li>
                    <?PHP if($_SESSION['sesion_UserAdm']==1){?>
                    <li>
						<a href="#"><span>Administrar</span> <i class="icon-settings"></i></a>
						<ul>
                        	<li><a href="usuarios.php">Usuarios</a></li>
                        </ul>
                    </li>
                    <?PHP }?>
				</ul>
				<!-- /main navigation -->

			</div>
		</div>
		<!-- /sidebar -->

		<!-- Page content -->
	 	<div class="page-content">

			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Control de Datos<small>Clientes</small></h3>
				</div>
			</div>
			<!-- /page header -->

        	<!-- Form components -->
				<form class="form-horizontal" role="form" action="clientes.php" method="GET">
				<!-- Default table -->
			            <div class="panel panel-default">
                            <?PHP include('funciones/conexion.php'); ?> 
			                <!--div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Clientes</h6></div-->
			                <div class="table-responsive">
				                <table class="table">
								<thead>
                                	<tr>
										<td></td>
										<td>
											<input type="text" class="form-control" placeholder="Nombre" name="nom" 
                                             onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="30">
										</td>
										<td>
											<?PHP $qrubro=mysqli_query($conexion,"SELECT * FROM rubros ORDER BY descripcion  "); ?>
											<select data-placeholder="Rubro" class="select-search" name="rubro" id="rubro">
												 <?PHP if($_REQUEST['descripcion']==''){?>
												 <option selected value="0"></option>
												 <?PHP }else{?>
												 <option selected value="">- Todas -</option>
												 <option selected value="<?PHP echo strtolower($_REQUEST['descripcion']); ?>">*&nbsp;<?PHP echo $_REQUEST['descripcion']; ?></option>
												 <?PHP } ?>	
												 <?PHP while($rub=mysqli_fetch_assoc($qrubro)){?>
												 <option value="<?PHP echo $rub['id'];?>">
												 <?PHP echo strtoupper($rub['descripcion']);?></option>
												 <?PHP } ?>      
										   </select>
										</td>
										<td>
											<div id="especialidad"></div>
										</td>
										<td>
											<input type="submit" value="Buscar" class="btn btn-info">
											<input type="button" onClick="location.href='avisos_abm.php?fn=avisos_new';" value="Nuevo" class="btn btn-success">
										</td>
									</tr>
									<tr>
										<td><b>Nombre y Apellido</b></td>
										<td><b>Razon Social/Nombre Comercial</b></td>
										<td><b>Rubro</b></td>
                                        <td><b>Especialidad</b></td>
										<td></td>
									</tr>
									</thead>
									<tbody>
                                    <?PHP include('funciones/clientes_busq.php');
                                    if (mysqli_num_rows($result)>0){ ?>													
                                    <?PHP while($fila=mysqli_fetch_assoc($result)){?>                                    
									<tr>
										<td><?PHP echo $fila["nombre"] . " " .$fila["apellido"];;; ?></td>
										<td><?PHP echo $fila["razsoc_nomcom"]; ?></td>
										<td><?PHP echo $fila["rubro1"]; ?></td>
                                        <td><?PHP echo $fila["especialidad1"]; ?></td>
										<td>											
											<div class="btn-group">
												<button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
												<ul class="dropdown-menu icons-right dropdown-menu-right">

													<li><a href="clientes_abm.php?id=<?PHP echo  $fila['id'];?>&fn=udp">
													<i class="icon-pencil4"></i>Editar</a></li>
													
													<!--li><a href="funciones/abm_avisos.php?id=<?PHP echo  $fila['id'];?>&fn=avisos_del">
													<i class="icon-remove"></i>Eliminar</a></li-->
													
												</ul>
											</div>											
										</td>
                                    <?PHP } ?>
									<?PHP }?>
									</tbody>
								</table>
			                </div>
				        </div>
				        <!-- /default table -->					
						</form>
                		
			<!-- /form components -->

	        <!-- Footer -->
	        <div class="footer clearfix">
		        <div class="pull-left">&copy; 2021. <a href="#">Mario De los Rios</a></div>
	        </div>
	        <!-- /footer -->


		</div>
		<!-- /page content -->

	</div>
	<!-- /content -->
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