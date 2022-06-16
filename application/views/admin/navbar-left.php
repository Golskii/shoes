<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;background-color: #EDEDED">
              <a href="index.html" class="site_title"><img src="<?=base_url()?>assets/images/logo2.png" alt="..." style="width: 40px;padding-top: 0px;"><span><img src="<?=base_url()?>assets/images/logo3.png" alt="..." style="width: 120px;"></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url()?>assets/images/user_pic.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <!-- <span>Welcome,</span> -->
                <h2>Welcome, <?php echo $this->session->userdata('name'); ?></h2>
								<span><?php echo $this->session->userdata('email'); ?></span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo $this->session->userdata('role'); ?></h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url('main/')?>index/"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="<?=base_url('main/')?>order/"><i class="fa fa-cart-plus"></i> Input Order </a></li>
										<li><a><i class="fa fa-edit"></i> Data Master <span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu">
												<?php if($this->session->userdata('role') == 'ADMINISTRATOR'): ?>
													<li><a href="<?= base_url('main/') ?>user/">Pegawai </a></li>
												<?php endif ?>
												<li><a href="<?= base_url('main/') ?>item/">Item </a></li>
												<li><a href="<?= base_url('main/') ?>treatment/">Treatment</a></li>
											</ul>
										</li>
                  <li><a href="<?=base_url('master-manajer/')?>report/"><i class="fa fa-book"></i> Report </a></li>
                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              	<a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('Login/logout')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
