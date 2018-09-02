
        <!-- page content -->

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Locality <small></small></h3>
              </div>
               <div class="title_right ">
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-sm">Add New</button>
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
                    <h2>Locality<small>List</small></h2>
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
                          <th>Area Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 

                     $listing =$this->db->order_by('id','desc')->get_where('locality',['city_id'=>$this->uri->segment(4)])->result_array();
                     //echo $this->db->last_query();
                        foreach ($listing as $list) {
                          ?>
                             <tr>
                              <td><?=$list['area_name']?></td>
                              <td><button type="button" class="btn btn-primary " data-toggle="modal" data-target="#mod<?=$list['id']?>">Edit</button>
                                <a href="<?=base_url('admincp/place/delete_loc/'.$list['city_id'])?>" onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-danger">Delete</a>
                                
                  <div class="modal fade " id="mod<?=$list['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Update Locality</h4>
                        </div>
                        <div class="modal-body">
                          
                        <form id="demo-form2" method="post" action="<?=base_url('admincp/place/edit_loc/'.$this->uri->segment(4).'/'.$list['id'])?>" data-parsley-validate class="form-horizontal ">

                      <div class="form-group">
                      
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" id="first-name" placeholder="Enter Locality" required="required" name="area_name" value="<?=$list['area_name']?>" class="form-control col-md-7 col-xs-12">
                        </div>
                        <input type="hidden" name="city_id" value="<?= $this->uri->segment(4) ?>">
                      </div>
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                        </div>
                       

                      </div>
                    </div>
                  </div>
                              </td>
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
        <!-- Small modal -->
                 

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Add Locality</h4>
                        </div>
                        <div class="modal-body">
                          
                        <form id="demo-form2" method="post" action="<?=base_url('admincp/place/new_loc/'.$this->uri->segment(4))?>" data-parsley-validate class="form-horizontal ">

                      <div class="form-group">
                      
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" id="first-name" placeholder="Enter Locality" required="required" name="area_name" class="form-control col-md-7 col-xs-12">
                        </div>
                        <input type="hidden" name="city_id" value="<?= $this->uri->segment(4) ?>">
                      </div>
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                        </div>
                       

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
        <!-- /page content -->