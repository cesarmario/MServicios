<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>OVERCOMING Administraci&oacute;n</title>

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
<?PHP error_reporting (0); 
include('funciones/login_ctrl.php'); ?>
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
					<li><a href="index.php"><span>Inicio</span> <i class="icon-screen2"></i></a></li>
                    <li>
						<a href="#"><span>Control de Datos</span> <i class="icon-insert-template"></i></a>
						<ul>
							<li class="active"><a href="avisos.php">B&uacute;squedas Laborales</a></li>
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
					<h3>Control de Datos<small>B&uacute;squedas Laborales</small></h3>
				</div>
			</div>
			<!-- /page header -->

        	<!-- Form components -->
				<form class="form-horizontal" role="form" action="avisos.php" method="GET">
				<!-- Default table -->
			            <div class="panel panel-default">
                             
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i> Busquedas Laborales</h6></div>
			                <div class="table-responsive">
				                <table class="table">
								<thead>
                                	<tr>
										<td>
											<input type="text" class="form-control" data-mask="99/99/9999"
											 placeholder="99/99/9999" name="fecha" value="">
										</td>
										<td>
											<input type="text" class="form-control" placeholder="Puesto" name="puesto" 
                                             onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="30">
										</td>
										<td>
											<select data-placeholder="Estado" class="select-search" name="estado">
                                                <option selected value="">Todos</option>
                                                <option value="pe">En Curso</option>
                                                <option value="at">Finalizado</option>
                                            </select>
										</td>
                                        <td>
											<input type="submit" value="Buscar" class="btn btn-info">
											<input type="button" onClick="location.href='avisos_abm.php?fn=avisos_new';" value="Nuevo" class="btn btn-success">
										</td> 
										<td></td>
										<td></td>										
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td><b>Fecha</b></td>
										<td><b>Puesto</b></td>
										<td><b>Lugar</b></td>
                                        <td><b>Horario</b></td>
										<td><b>Estado</b></td>
										<td></td>
									</tr>
									</thead>
									<tbody>
                                    <?PHP include('funciones/ctrl_avisos.php');
                                    if (mysqli_num_rows($result)>0){ ?>														
                                    <?PHP while($fila=mysqli_fetch_assoc($result)){?>                                    
									<tr>
										<td><?PHP echo date("d/m/Y", strtotime($fila["fecha"])); ?></td>
										<td><?PHP echo $fila["puesto"]; ?></td>
										<td><?PHP echo $fila["lugar"]; ?></td>
                                        <td><?PHP echo $fila["horario"]; ?></td>
										<td><?PHP echo $fila["estado"]; ?></td>
										<td>											
											<div class="btn-group">
												<button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i></button>
												<ul class="dropdown-menu icons-right dropdown-menu-right">

													<li><a href="avisos_abm.php?id=<?PHP echo  $fila['id'];?>&fn=avisos_mod">
													<i class="icon-pencil4"></i>Editar</a></li>
													
													<li><a href="funciones/abm_avisos.php?id=<?PHP echo  $fila['id'];?>&fn=avisos_del">
													<i class="icon-remove"></i>Eliminar</a></li>
													
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