
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Agent Abd Builder  <small></small></h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <?php if($this->session->flashdata('msg')){
                      ?>
                          <div class="alert alert-success alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <strong>Success !</strong> <?=$this->session->flashdata('msg'); ?>
                        </div>
                      <?php
                    }elseif ($this->session->flashdata('err')) {
                      ?>
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <strong>Error!</strong> <?=$this->session->flashdata('err'); ?>
                        </div>
                      <?php
                    } ?>
                    <h2>User<small>List</small></h2>
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
                   
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Registered Date</th>
                          <th>Last Update Date</th>
                          <th>Last Login Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 

                     $listing =$this->db->order_by('id','desc')->where("role!='Admin'")->get('users')->result_array();
                        foreach ($listing as $list) {
                          ?>
                             <tr>
                              <td><?=$list['name']?></td>
                              
                              <td><?=$list['email']?></td>
                              <td><?=$list['phone']?></td>  
                             
                              <td><?=$list['created_date']?></td>
                              <td><?=$list['update_date']?></td>
                              <td><?=$list['last_login']?></td>
                              <td><?=$list['status']==0?'<a onclick="" href="'.base_url('admincp/user/status/1/'.$list['id']).'" class="btn btn-success">Active</a>':'<a href="'.base_url('admincp/user/status/0/'.$list['id']).'" class="btn btn-danger">Block</a>'?></td>
                             
                           
                              <td><a href="<?=base_url('admincp/user/login/'.$list['id'])?>" onclick="window.open('https://secure.brosix.com/webclient/)" class="btn btn-primary"target="_blank">Login</a></td>
                            </tr>
                          <?php
                        } ?>
                       
                 
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->