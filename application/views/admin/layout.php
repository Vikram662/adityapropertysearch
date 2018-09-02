<?php
  $user = $this->admin_model->get_current_user();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aditya Property | </title>

    <!-- Bootstrap -->
    <link href="<?=base_url('assets/admin/')?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url('assets/admin/')?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url('assets/admin/')?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?=base_url('assets/admin/')?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
   
    <link href="<?=base_url('assets/admin/')?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?=base_url('assets/admin/')?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/admin/')?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/admin/')?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/admin/')?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/admin/')?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?=base_url('assets/admin/')?>build/css/custom.min.css" rel="stylesheet">
    <script src="<?=base_url('assets/admin/')?>vendors/jquery/dist/jquery.min.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?=base_url('admincp')?>" class="site_title"><i class="fa fa-paw"></i> <span>Aditya Property</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url('assets/admin/')?>images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?=$user->name?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url('admincp')?>"><i class="fa fa-home"></i> Dashboard </a><!-- 
                  <li><a href="<?=base_url('admincp/property')?>"><i class="fa fa-building"></i> Property </a> -->
                   <li><a href="<?=base_url('admincp/leads')?>"><i class="fa fa-list"></i> Leads </a>
                     <li><a href="<?=base_url('admincp/ad')?>"><i class="fa fa-buysellads"></i> Advertisement </a>
                  </li>
                   <li><a href="<?=base_url('admincp/amenities')?>"><i class="fa fa-buysellads"></i> Amenities </a>
                  </li>
                   <li><a href="<?=base_url('admincp/user')?>"><i class="fa fa-users"></i> Agent & Builder </a>
                  </li>
                    <li><a href="<?=base_url('admincp/place')?>"><i class="fa fa-map-marker"></i> Place </a>
                  </li>
                 
                 
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=base_url('logout')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url('assets/admin/')?>images/img.jpg" alt=""><?=$user->name?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?=base_url('admincp/profile')?>"> Profile</a></li>
                    <li>
                      <a href="<?=base_url('admincp/setting')?>">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="<?=base_url('logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?=base_url('assets/admin/')?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?=base_url('assets/admin/')?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?=base_url('assets/admin/')?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?=base_url('assets/admin/')?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span><?=$user->name?></span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <?php

            $this->load->view($view,$user);
            
        ?>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           All Right Reserve by <a href="http://adityarealgroup.com/">Aditya Real group</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    
    <!-- Bootstrap -->
    <script src="<?=base_url('assets/admin/')?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url('assets/admin/')?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url('assets/admin/')?>vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="<?=base_url('assets/admin/')?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- validator -->
    <script src="<?=base_url('assets/admin/')?>vendors/validator/validator.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?=base_url('assets/admin/')?>vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?=base_url('assets/admin/')?>vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?=base_url('assets/admin/')?>vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?=base_url('assets/admin/')?>vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?=base_url('assets/admin/')?>vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?=base_url('assets/admin/')?>vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?=base_url('assets/admin/')?>vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?=base_url('assets/admin/')?>vendors/starrr/dist/starrr.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?=base_url('assets/admin/')?>vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <!-- Custom Theme Scripts -->
    <script src="<?=base_url('assets/admin/')?>build/js/custom.min.js"></script>
  </body>
</html>
<script type="text/javascript">
  $('#single1').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });

 $('#single2').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
  $('#single3').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });

 $('#single4').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
  </script>
