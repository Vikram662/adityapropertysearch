<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              	<?php if($no_verify==0){ ?>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dashboard <small>sub title</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
             				  <h3>Fixed Sidebar <small> Just add class <strong>menu_fixed</strong></small></h3>
                 <?php if($this->session->flashdata('vr')){
                      ?>
                          <div class="alert alert-warning alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <strong>Warning !</strong> <?=$this->session->flashdata('vr'); ?>
                        </div>
                       

                   <form id="demo-form2" enctype="multipart/form-data" action="<?=base_url('agent/dashboard/verify/')?>" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Enter OTP<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="otp" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                             

                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                   <a href="<?=base_url('agent/dashboard/resend/')?>" class="btn btn-primary">Send OTP</a>
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>

                            </form>
                      <?php
                    }elseif ($this->session->flashdata('err')) {
                      ?>
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <strong>Error!</strong> <?=$this->session->flashdata('err'); ?>
                        </div>
                         <form id="demo-form2" enctype="multipart/form-data" action="<?=base_url('agent/dashboard/verify/')?>" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Enter OTP<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="otp" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                             

                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                   <a href="<?=base_url('agent/dashboard/resend/')?>" class="btn btn-primary">Send OTP</a>
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>

                            </form>
                      <?php
                    }
                   ?>
              </div>
            </div>
        <?php }elseif ($this->session->flashdata('msg')) {
                      ?>
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <strong>Success!</strong> <?=$this->session->flashdata('msg'); ?>
                        </div>
                      <?php
                    }  ?>
          </div>
        </div>
                  
                  </div>
                </div>
              </div>
            </div>
              