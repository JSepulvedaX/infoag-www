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

    <style type="text/css">
	.container-full {
	    overflow: hidden;
        margin: 0 auto;
        width: 100%;
    }
	.container-map {
        overflow: hidden;
        height: 100%;
	    width: 60%;
        background-color: black;
    }
	.container-table {
        margin-top: 50px;
        float: right;
        width: 40%;
        height: 100%;
    }
    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    #map {
        width: 100%;
        height: 800px;
    }
    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }
    #pac-input:focus {
        border-color: #4d90fe;
    }
    #search-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-right: 0px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }
    #search-input:focus {
        border-color: #4d90fe;
    }

    #search-button {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-right: 10px;
        margin-top: 10px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        height: 32px;
    }
    #search-button:focus {
        border-color: #4d90fe;
    }

.grid-structure .grid-container-test {
  background-color: #F2F2F2;
  margin-bottom: 10px;
  padding: 10px 20px;
}

    </style>
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
                                <h4 class="pull-left page-title">Informes</h4>
                                <!--<ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Editable Table</li>
                                </ol>-->
                            </div>
                        </div>

                        <!--<div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Basic</h3> 
				    </div>
				    <div class="row">
					<div class="col-md-8">
				           <div id="map"></div>
					</div>
					<div class="col-md-4">
					  <form class="form-inline" role="form">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                            </div>

                                            <div class="form-group m-l-10">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-l-10">Sign in</button>
                                          </form>
                                        </div>
				    </div> 
                                    <div class="panel-body"> 
			    		<div class="container-map">
        			   	   <input id="pac-input" class="controls" type="text" placeholder="Buscador"/> 4:15
            				   <input id="search-input" class="controls" type="text" placeholder="Buscador"/>
            				   <button id="search-button" onclick="search();">Search</button>
					   <div id="map"></div>
					</div>
				    </div> 
                                </div>
                            </div>
                        </div>-->




                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <!--<h3 class="panel-title">Grid Example</h3>-->
                                    </div>
                                    <div class="panel-body">
                                        <div class="grid-structure">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="grid-container-test">
                                                        <div id="map"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="grid-container-test">
                                          <form class="form-inline" role="form" method="POST" action="<?php echo site_url('process'); ?>">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="inputLat" name="inputLat" placeholder="Latitud">
                                            </div>

                                            <div class="form-group m-l-10">
                                                <input type="text" class="form-control" id="inputLng" name="inputLng" placeholder="Longitud">
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-l-10">Procesar</button>
                                          </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="grid-container-test">
                                                        col-md-7
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="grid-container-test">
                                                        col-md-5
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="grid-container-test">
                                                        col-md-6
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="grid-container-test">
                                                        col-md-6
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="grid-container-test">
                                                        col-md-5
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="grid-container-test">
                                                        col-md-7
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="grid-container-test">
                                                        col-md-4
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="grid-container-test">
                                                        col-md-8
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="grid-container-test">
                                                        col-md-3
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="grid-container-test">
                                                        col-md-9
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="grid-container-test">
                                                        col-md-2
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="grid-container-test">
                                                        col-md-10
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="grid-container-test">
                                                        col-md-1
                                                    </div>
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="grid-container-test">
                                                        col-md-11
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="grid-container-test">
                                                        col-md-2
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="grid-container-test">
                                                        col-md-3
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="grid-container-test">
                                                        col-md-4
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="grid-container-test">
                                                        col-md-2
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="grid-container-test">
                                                        col-md-1
                                                    </div>
                                                </div>
                                            </div> <!-- end row -->
                                        </div> <!-- grid-structure -->
                                    </div> <!-- Panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- Col -->
                        </div> <!-- End row -->




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

    <script>

    var map;
    var markers = [];

    function initMap()
    {
        var oLat = -32.85166306258169;
        var oLon = -70.9112548828125;

        map = new google.maps.Map(document.getElementById('map'),
        {
                center: new google.maps.LatLng(oLat, oLon),
            zoom: 9,
            streetViewControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scaleControl: true
	});


	google.maps.event.addListener(map, 'click', function(event) {
   	   placeMarker(event.latLng);
	});


    }

    function placeMarker(location) 
    {
        var lat = location.lat();
        var lng = location.lng();

        document.getElementById("inputLat").value = lat;
	document.getElementById("inputLng").value = lng;

        markers.forEach(function(marker) {
            marker.setMap(null);
        });

        markers = [];

       //var marker = new google.maps.Marker({
       //   position: location,
       //   map: map
       //});

        markers.push(new google.maps.Marker({
            position: location,
            map: map
	}));

       //map.setCenter(location);
    }
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

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcer56fZC83EbKzd-VdHIGLEDdeDf8aiE&libraries=geometry,places&callback=initMap"></script>
	</body>
</html>
