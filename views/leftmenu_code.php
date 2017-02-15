            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">					
						<?php if ($login == "no"): ?>
                        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#loginModal">Ingresar</button>						
						<?php else: ?>
						<div class="pull-left">
                            <img src="<?php echo base_url(); ?>assets/img/avatar.jpg" alt="" class="thumb-md img-circle">
                        </div>
						<div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">labmovil<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('panel_adm'); ?>"><i class="fa fa-bug"></i> Administrador<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="<?php echo site_url('home'); ?>/leave"><i class="fa fa-bug"></i> Salir</a></li>
                                </ul>
                            </div>                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
						<?php endif; ?>							
					</div>				
					
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
							<?php if ($login == "no" || ($login == "yes" && ($page != "panel_adm" && $page != "reports"))): ?>
                            <li>
                                <a href="<?php echo site_url('home'); ?>" class="waves-effect<?php if($page == "home") echo ' active'?>"><i class="fa fa-bug"></i><span> Inicio </span></a>
                            </li>
							
                            <li>
                                <a href="<?php echo site_url('functioning'); ?>" class="waves-effect<?php if($page == "functioning") echo ' active'?>"><i class="fa fa-bug"></i><span> Funcionamiento </span></a>
                            </li>
							
                            <li>
                                <a href="<?php echo site_url('contact'); ?>" class="waves-effect<?php if($page == "contact") echo ' active'?>"><i class="fa fa-bug"></i><span> Contacto </span></a>
                            </li>
							<?php else: ?>
							<li>
                                <a href="<?php echo site_url('panel_adm'); ?>" class="waves-effect<?php if($page == "panel_adm") echo ' active'?>"><i class="fa fa-bug"></i><span> Administracion </span></a>
			    </li>
				<li>
                                <a href="<?php echo site_url('reports'); ?>" class="waves-effect<?php if($page == "reports") echo ' active'?>"><i class="fa fa-bug"></i><span> Informes </span></a>
                            </li>							
							<?php endif; ?>							
							
                            <!---<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bug"></i><span>Gendarmeria4 </span><span class="pull-right"><i class="fa fa-plus"></i></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> <span class="pull-right"><i class="fa fa-plus"></i></span></a>
                                        <ul style="">
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>-->
							
							<?php if ($login == "yes"): ?>
							<li>
                                <a href="<?php echo site_url('home'); ?>/leave" class="waves-effect"><i class="fa fa-power-off"></i><span> Salir </span></a>
                            </li>
							<?php endif; ?>							
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
