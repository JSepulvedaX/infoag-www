<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>LabMovil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="Descripcion Proyecto">
		<meta name="author" content="Jaime Sepúlveda">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/icon/infoag_icon.ico">
		
		<!-- Plugin Css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/magnific-popup/dist/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jquery-datatables-editable/datatables.css">		

		<link href="<?php echo base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/css/new.css" rel="stylesheet" type="text/css">

        <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->       
    </head>

    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
			<!-- Top Bar Start -->
			<?php include 'topmenu_code.php'; ?>
			<!-- Top Bar End -->
		
            <!-- Left Sidebar Start -->
			<?php include 'leftmenu_code.php'; ?>
            <!-- Left Sidebar End -->
			
            <!-- Content Start -->       
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Panel Adm.</h4>
                                <!--<ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Editable Table</li>
                                </ol>-->
                            </div>
                        </div>

						<div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Contextual Table</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Column heading</th>
                                                            <th>Column heading</th>
                                                            <th>Column heading</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="active">
                                                            <td>1</td>
                                                            <td>Column content</td>
                                                            <td>Column content</td>
                                                            <td>Column content</td>
                                                        </tr>
                                                        <tr class="success">
                                                            <td>3</td>
                                                            <td>Column content</td>
                                                            <td>Column content</td>
                                                            <td>Column content</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Column content</td>
                                                            <td>Column content</td>
                                                            <td>Column content</td>
                                                        </tr>
                                                        <tr class="danger">
                                                            <td>9</td>
                                                            <td>Column content</td>
                                                            <td>Column content</td>
                                                            <td>Column content</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Notification</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12">
											
												<form id="notificationForm" method="POST" action="<?php echo site_url('panel_adm'); ?>/send_notification" novalidate="novalidate">
													<div class="form-group">
														<label for="username" class="control-label">Notification</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-bullhorn"></i></div>
															<input type="text" class="form-control" id="notification" name="notification" value="SOS" required="" title="Please enter your notification" placeholder="SOS">
														</div>
													</div>
													<div class="form-group">
														<label for="username" class="control-label">Type</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-file-audio-o"></i></div>
															<select class="select2 form-control" id="type_notification" name="type_notification" data-placeholder="Select notification...">
																<option value="#">Select notification...</option>
																<option value="Ambulancia">Ambulancia</option>
																<option value="Bomberos">Bomberos</option>
																<option value="Carabineros">Carabineros</option>
															</select>
														</div>
													</div>
													<br/>
													<button type="submit" class="btn btn-success btn-block">Send Notification</button>
												</form>											
											
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Row -->
						
						
						
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Proyecto.
                </footer>

            </div>
            <!-- Content End -->
        </div>
        <!-- END wrapper -->
		
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Ingreso</h4>
					</div>
					<div class="modal-body">
						<form id="loginForm" method="POST" action="<?php echo site_url('check'); ?>/check_login" novalidate="novalidate">
							<div class="form-group">
								<label for="username" class="control-label">Usuario</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<input type="text" class="form-control" id="user" name="user" value="" required="" title="Please enter you username" placeholder="usuario">
								</div>
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Contraseña</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-key"></i></div>
									<input type="password" class="form-control" id="pass" name="pass" value="" required="" title="Please enter you username" placeholder="*****">
								</div>
							</div><br/>
							<button type="submit" class="btn btn-success btn-block">Ingresar</button>
						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

        <script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/new.js"></script>
		
		<!-- Examples -->
	    <script src="<?php echo base_url(); ?>assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script> 
	    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
	    <script src="<?php echo base_url(); ?>assets/pages/datatables.editable.init.js"></script>
	</body>
</html>
