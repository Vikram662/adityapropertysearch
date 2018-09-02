
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Poperty <small></small></h3>
              </div>

              <div class="title_right ">
                    <a href="<?=base_url('admincp/property/add_new')?>" class="btn btn-success pull-right">Post New</a>
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
                    <h2>Property<small>List</small></h2>
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
                          <th>Image</th>
                          <th>Address</th>
                          <th>Sale Type</th>
                          <th>Type</th>
                          <th>Posted  By</th>
                          <th>Created Date</th>
                          <th>Update Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 

                     $listing = $this->admin_model->get_all();
                        foreach ($listing as $list) {
                          ?>
                             <tr>
                              <td><?=$list['name']?></td>
                              <td><img src="<?=base_url()?><?=$list['featured_image']?>" style="width: 150px;height: 100px" alt=""></td>
                              <td><?=$list['address']?></td>
                              <td><?=$list['sale_type']?></td>  
                              <td><?=$list['property_type']?></td>
                              <td>
                                <?php $user= $this->admin_model->get_user($list['user_id']);
                                echo $user->name?>
                              </td>
                              <td><?=$list['create_date']?></td>
                              <td><?=$list['update_date']?></td>
                              <td><a href="<?= base_url('admincp/property/status/'.$list['id'].'/')?><?=$list['status']==0?'1':'0';?>" class="btn btn-<?=$list['status']==0?'success':'danger';?>"><?=$list['status']==0?'Active':'Deactive';?></a></td>
                              <td><a href="<?= base_url('admincp/property/view/'.$list['id'])?>" class="btn btn-primary">View</a><a href="<?= base_url('admincp/property/edit/'.$list['id'])?>" class="btn btn-info">Edit</a><a href="<?=base_url('admincp/property/delete/'.$list['id'])?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a></td>
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