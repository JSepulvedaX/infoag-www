<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Infoag</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="Descripcion Proyecto">
		<meta name="author" content="Jaime Sepúlveda">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/icon/infoag_icon.ico">

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
                                <h4 class="pull-left page-title">Bienvenido</h4>
                                <!--<ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Blank Page</li>
                                </ol>-->
                            </div>
                        </div>
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
									<input type="text" class="form-control" id="user" name="user" value="" required="" title="Please enter your username" placeholder="usuario">
								</div>
							</div>
							<div class="form-group">
								<label for="username" class="control-label">Contraseña</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-key"></i></div>
									<input type="password" class="form-control" id="pass" name="pass" value="" required="" title="Please enter your username" placeholder="**********">
								</div>
							</div><br/>

							<?php if ($error == "error_login"): ?>
							<div class="alert alert-danger alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <a href="#" class="alert-link">ERROR: </a>El usuario o contraseña están incorrectos.
                            </div>
							<?php endif; ?>

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

		<?php if ($error == "error_login"): ?>
		<script>
			$('#loginModal').modal('show');
		</script>
		<?php endif; ?>
	</body>
</html>
