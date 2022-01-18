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
        
        <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-calendar"></i>
					<span class="label label-default"><?PHP echo $_SESSION['sesion_PeridoM'];?></span>&nbsp;
					<span class="label label-default"><?PHP echo $_SESSION['sesion_PeridoA'];?></span>
				</a>
           	</li>
		</ul>
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
						<li><a href="rubros.php">Rubros</a>
							<ul>
								<li class="active"><a href="#">Especialidades</a></li>
							</ul>
						</li>
						<li><a href="proveedores.php">Proveedores</a></li>
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
					<h3><?PHP echo $_REQUEST['nnrubro']; ?> <small>Edicion / Baja Especialidad</small></h3>
				</div>
			</div>
			<!-- /page header -->

        	<!-- Form components -->
    		<form class="form-horizontal" role="form" action="funciones/especialidad.php" method="GET">

				<!-- Basic inputs -->
		        <div class="panel panel-default">
	                <div class="panel-body">
                         
                        <div class="form-group">
							<label class="col-sm-2 control-label">ID: </label>
							<div class="col-sm-10">
								<div class="row">
									<div class="col-sm-2 has-feedback has-feedback-left">
										<input type="text" class="form-control" value="<?PHP echo str_pad($_REQUEST['id'], 6, '0', STR_PAD_LEFT);?>" name="id" disabled >
                                        <i class="icon icon-numbered-list form-control-feedback"></i>
									</div>
								</div>
							</div>
						</div>
						
                        <div class="form-group">
							<label class="col-sm-2 control-label">Especialidad: </label>
							<div class="col-sm-10">
								<div class="row">
									<div class="col-sm-6 has-feedback has-feedback">                                    	
										<input type="text" class="form-control" value="<?PHP echo $_REQUEST['des'];?>" name="des" required>
									</div>
								</div>
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-sm-2 control-label">Baja: </label>
							<div class="col-sm-10">
								<div class="block-inner">
									<label class="checkbox-inline checkbox-primary">
										<input type="checkbox" class="styled" name="baja" value="baja">
									</label>
  								</div>
							</div>
						</div>
                                                
                        <div class="form-group">
							<label class="col-sm-2 control-label"></label>
							<div class="col-sm-10">
							<input type="hidden" id="id"  name="id"  value="<?PHP echo $_REQUEST['id'];?>"/>
							<input type="hidden" id="nnrubro"  name="nnrubro"  value="<?PHP echo $_REQUEST['nnrubro'];?>"/>
							<input type="hidden" id="idr"  name="idrubro"  value="<?PHP echo $_REQUEST['idrubro'];?>"/>							
                            <input type="hidden" id="fn" name="fn" value="udp"/>
                            <div class="form-actions text-right">
                            <input type="reset" value="Cancelar" onClick="history.back()" class="btn btn-danger">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                            </div>
                            </div>
                        </div>

					</div>
				</div>
				<!-- /basic inputs -->

			</form>
			<!-- /form components -->

	        <!-- Footer -->
	        <div class="footer clearfix">2022. <a href="#">Mario De los Rios</a></div>
	        </div>
	        <!-- /footer -->


		</div>
		<!-- /page content -->

	</div>
	<!-- /content -->
</body>
</html>