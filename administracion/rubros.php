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
                        	<li class="active"><a href="rubros.php">Rubros</a></li>
							<li><a href="proveedores.php">Proveedores</a></li>
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
					<h3>Rubros <small></small></h3>
				</div>
			</div>
			<!-- /page header -->

        	<!-- Form components -->
    		<form class="form-horizontal" role="form" action="funciones/rubros.php" method="POST">
			<div class="form-group">
                <label class="col-sm-2 control-label">Nuevo: </label>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-md-4 has-feedback has-feedback">
                            <input type="text" class="form-control" placeholder="Ingrese Descripcion" name="des" required>
                            <input type="hidden" id="fn" name="fn" value="ins"/>
							<input type="submit" value="Agregar" class="btn btn-primary">							
                        </div>					 		
                    </div>
                </div>
            </div>
			</form>
			
			<form class="form-horizontal" role="form" action="rubros.php" method="POST">
			<!-- Questions and contact -->
            <div class="row">
            	<div class="col-md-6">

                	<!-- Questions -->
			        <div class="panel-group block">
                    
                    <!-- First tab content -->
                	<div class="tab-pane active fade in" id="inside">     
                        <!-- Default table -->
			            <div class="panel panel-default">
			                <!--div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> Rubros </h6></div-->
			                
                            <div class="table">
				                <table class="table">
				                    <thead>
										<tr>
				                            <th>&nbsp;</th>
				                            <th><input type="text" class="form-control" value="" name="bnombre" onkeyup="javascript:this.value=this.value.toUpperCase();"></th>
                                            <th>
                                            	<input type="submit" value="Buscar" class="btn btn-primary">
                                            </th>
											<th>&nbsp;</th>
				                        </tr>
				                        <tr>
				                            <th>#</th>
				                            <th>Nombre</th>
											<th>Editar</th>
											<th>Especialidades</th>
				                        </tr>
				                    </thead>
                                    <?PHP include('funciones/rubros_busq.php');
									while($nn=mysqli_fetch_assoc($result)){?>
				                    <tbody>
				                        <tr>
                                            <td><?PHP echo $nn['id'];?></td>
				                            <td><?PHP echo $nn["descripcion"]; ?></td>
				                            <td>
												<div class="table-controls">
													<a href="rubros_abm.php?id=<?PHP echo $nn['id'];?>&des=<?PHP echo $nn['descripcion'];?>&fn=udp"
													class="btn btn-success btn-icon btn-xs tip" title="Editar / Eliminar Rubro">
													<i class="icon-pencil3"></i></a>
												</div>
                                            </td>
											<td>
												<div class="table-controls">
													<a href="especialidad.php?idrubro=<?PHP echo $nn['id'];?>&nnrubro=<?PHP echo $nn['descripcion'];?>"
													class="btn btn-info btn-icon btn-xs tip" title="Agregar / Editar Especialidades">
													<i class="icon-indent-increase"></i></a>
												</div>
                                            </td>
				                        </tr>
				                    </tbody>
                                     <?PHP }?>
				                </table>
			                </div>
				        </div>
				        <!-- /default table -->
					</div>
					</div>
				</div>
			</div>
			<!-- Questions -->
			</form>
			
			<!-- /form components -->


	        <!-- Footer -->
	        <div class="footer clearfix">
		        <div class="pull-left">&copy; 2022. <a href="#">Mario De los Rios</a></div>
	        </div>
	        <!-- /footer -->


		</div>
		<!-- /page content -->

	</div>
	<!-- /content -->
</body>
</html>