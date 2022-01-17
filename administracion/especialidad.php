<?PHP
session_start();
error_reporting (0); 
include('funciones/login_ctrl.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
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
                        	<li><a href="rubros.php">Rubros</a>
								<ul>
									<li class="active"><a href="#">Especialidades</a></li>
								</ul>
							</li>
							<li><a href="clientes.php">Clientes</a></li>
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
					<h3><?PHP echo $_REQUEST['nnrubro']; ?> <small>Especializaciones</small></h3>
				</div>
			</div>
			<!-- /page header -->

        	<!-- Form components -->
    		<form class="form-horizontal" role="form" action="funciones/especialidad.php" method="GET">
			<div class="form-group">
                <label class="col-sm-2 control-label">Nuevo: </label>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-md-4 has-feedback has-feedback">
                            <input type="text" class="form-control" placeholder="Ingrese Descripcion" name="des" required>
							<input type="hidden" id="idrubro" name="idrubro" value="<?PHP echo $_REQUEST['idrubro']; ?>"/>
                            <input type="hidden" id="fn" name="fn" value="ins"/>
							<input type="submit" value="Agregar" class="btn btn-primary">
                        </div>					 		
                    </div>
                </div>
            </div>
			</form>
			<!-- Questions and contact -->
            <div class="row">
            	<div class="col-md-6">

                	<!-- Questions -->
			        <div class="panel-group block">
                    
                    <!-- First tab content -->
                	<div class="tab-pane active fade in" id="inside">     
                        <!-- Default table -->
			            <div class="panel panel-default">
			                <!--div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> Especialidades </h6></div-->
			                
                            <div class="table">
				                <table class="table">
				                    <thead>
				                        <tr>
				                            <th>#</th>
				                            <th>Nombre</th>
											<th>Editar</th>
				                        </tr>
				                    </thead>
                                    <?PHP include('funciones/conexion.php');                                    
                            		$query="SELECT * FROM especialidades WHERE id_rubro = '$_REQUEST[idrubro]' AND baja = 0";
									$result = mysqli_query($conexion, $query);?>
                                    <?PHP while($nn=mysqli_fetch_assoc($result)){?>
				                    <tbody>
				                        <tr>
                                            <td><?PHP echo $nn['id'];?></td>
				                            <td><?PHP echo $nn["descripcion"]; ?></td>
				                            <td align="center">
												<div class="table-controls" align="left">
													<a href="especialidad_abm.php?id=<?PHP echo $nn['id'];?>&des=<?PHP echo $nn['descripcion'];?>&idrubro=<?PHP echo $nn['id_rubro'];?>&nnrubro=<?PHP echo $_REQUEST[nnrubro]; ?>&fn=udp"
													class="btn btn-success btn-icon btn-xs tip" title="Editar / Eliminar">
													<i class="icon-pencil3"></i></a>
												</div>
                                            </td>
				                        </tr>
				                    </tbody>
                                     <?PHP }?>
				                </table>
								<input type="button" value="&nbsp; Volver &nbsp;" onClick="location.replace('rubros.php');" class="btn btn-danger">	
			                </div>
				        </div>
				        <!-- /default table -->
					</div>
					</div>
				</div>
			</div>
			<!-- Questions -->

			
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