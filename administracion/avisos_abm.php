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
<script language="JavaScript">
//  window.onbeforeunload = confirmExit;
//  function confirmExit()
//  {
//    return "Ha intentado salir de esta pagina. Si ha realizado algun cambio en los campos sin hacer clic en el boton Guardar, los cambios se perderan. Seguro que desea salir de esta pagina? ";
//  }
</script>
<body>
<?PHP error_reporting (0); 
include('funciones/login_ctrl.php'); ?>
	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="images/logo.png" alt="Colmed"></a>
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
					<h3>OVERCOMING Administraci&oacute;n <small>ABM B&uacute;squedas Laborales</small></h3>
				</div>
			</div>
			<!-- /page header -->

        	<!-- Form components -->
    		<form class="form-horizontal" role="form" action="funciones/abm_avisos.php" method="GET">
            	<?PHP if($_GET[fn]!="avisos_new"){
				include('funciones/conexion.php');
				$query="SELECT * FROM avisos WHERE id = '$_GET[id]'";
				$result = mysqli_query($conexion, $query); 
				$fila=mysqli_fetch_assoc($result); 
				} ?>

				<!-- Basic inputs -->
		        <div class="panel panel-default">
			        <div class="panel-heading"><h6 class="panel-title"><i class="icon-bubble4"></i>Datos del Reclamo</h6></div>
	                <div class="panel-body">
                         
                        	<div class="form-group">
                                <label class="col-sm-2 control-label">Puesto: </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="puesto" name="puesto"
                                            value="<?PHP if($_GET[fn]!="avisos_new"){echo $fila["puesto"];}else{echo $_GET["puesto"];}?>" 
											<?PHP if($_GET[fn]=="avisos_ver"){ ?>style="background:#FFC" disabled<?PHP }?> required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Fecha: </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" data-mask="99/99/9999" placeholder="99/99/9999"
                                            name="fecha" value="<?PHP if($_GET[fn]!="avisos_new"){echo date('d/m/Y',strtotime($fila['fecha']));}else{ echo date("d/m/Y"); } ?>" 
                                            <?PHP if($_GET[fn]=="avisos_ver"){ ?>style="background:#FFC" disabled<?PHP }?> required>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-sm-2 control-label">Lugar: </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="lugar" name="lugar"
                                            value="<?PHP if($_GET[fn]!="avisos_new"){echo $fila["lugar"];}?>"
											<?PHP if($_GET[fn]=="avisos_ver"){ ?>style="background:#FFC" disabled<?PHP }?> required>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-sm-2 control-label">Horario: </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="horario" name="horario" 
                                            value="<?PHP if($_GET[fn]!="avisos_new"){echo $fila["horario"];}?>"
											<?PHP if($_GET[fn]=="avisos_ver"){ ?>style="background:#FFC" disabled <?PHP }?> required>
                                        </div>
                                    </div>
                                </div>
                            </div>

							<div class="form-group">
                                <label class="col-sm-2 control-label">Descripcion: </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <textarea rows="10" cols="5" class="form-control" placeholder="Descripcion" name="descripcion"
                                            <?PHP if($_GET[fn]=="avisos_ver"){ ?>style="background:#FFC" disabled<?PHP }?> ><?PHP if($_GET[fn]!="avisos_new"){echo $fila["descripcion"];} ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-sm-2 control-label">Requisitos: </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <textarea rows="10" cols="5" class="form-control" placeholder="Requisitos" name="requisitos"
                                            <?PHP if($_GET[fn]=="avisos_ver"){ ?>style="background:#FFC" disabled<?PHP }?> ><?PHP if($_GET[fn]!="avisos_new"){echo $fila["requisitos"];} ?></textarea>
                                        </div>
									</div>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-sm-2 control-label">Funciones: </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <textarea rows="10" cols="5" class="form-control" placeholder="Funciones" name="funciones"
                                            <?PHP if($_GET[fn]=="avisos_ver"){ ?>style="background:#FFC" disabled<?PHP }?> ><?PHP if($_GET[fn]!="avisos_new"){echo $fila["funciones"];} ?></textarea>
										</div>
                                    </div>
                                </div>
                            </div>
                            
							  
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Detalles: </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <textarea rows="10" cols="5" class="form-control" placeholder="Detalles" name="detalles"
                                            <?PHP if($_GET[fn]=="avisos_ver"){ ?>style="background:#FFC" disabled<?PHP }?> ><?PHP if($_GET[fn]!="avisos_new"){echo $fila["detalles"];} ?></textarea>
											Salto &#8249;br&#8250; <br>
											&#9679; & #9679;
										</div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="form-group">
                                <label class="col-sm-2 control-label">Estado: </label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select data-placeholder="estado" class="select-search" name="estado" 
                                            <?PHP if($_GET[fn]=="avisos_ver"){ ?>disabled<?PHP }?> required>
												<?PHP if($_GET[fn]!="avisos_new"){ ?>
													<option selected value="<?PHP echo $fila["estado"]; ?>">* <?PHP echo $fila["estado"]; ?></option>
                                                <?PHP } else {?>
													<option selected value=""></option>
                                                <?PHP } ?>
                                                <option value="En Curso">En Curso</option>
                                                <option value="Finalizado">Finalizado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>							
							
                            <?PHP if($_GET[fn]!="avisos_new"){ ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <input type="button"
                                            onclick="location.href='funciones/abm_avisos.php?id=<?PHP echo $fila["id"]; ?>&fn=avisos_del';" 
                                            value="Eliminar" class="btn btn-danger" <?PHP if($_GET[fn]=="avisos_ver"){ ?>disabled<?PHP }?>>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?PHP } ?>
                        
							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="col-sm-10">
									<div class="row">
										<?PHP if($_GET[fn]!="avisos_new"){ ?>
										<input type="hidden" id="id" name="id" value="<?PHP echo $_GET[id];?>"/>
										<?PHP } ?>
										<input type="hidden" id="fn" name="fn" value="<?PHP echo $_GET[fn];?>"/>
										<div class="col-sm-6">
										<input type="reset" value="Cancelar" onClick="location.replace('avisos.php');" class="btn btn-warning">
										<input type="submit" value="Guardar" class="btn btn-success">
										</div>
									</div>
								</div>
							</div>
                        
					</div>
                       
  					</div>
				</div>
				<!-- /basic inputs -->
                
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