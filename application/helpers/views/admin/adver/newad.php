<?php 
  $add= $this->db->get_where('advertisement',['id'=> $this->uri->segment(4)])->row();

 ?>
      <style>
        .daterangepicker .calendar.single .calendar-table {
          width: 180px;
          padding: 0 0 4px!important;
      }
      .daterangepicker .calendar.single .calendar-table thead tr:first-child th {
          padding: 8px 5px;
          text-align: center;
      }
      </style>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Advertisement</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
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
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Banner</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Search Page</a>
                        </li>
                      <!--   <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                        </li> -->
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                              <form id="demo-form2" enctype="multipart/form-data" action="<?=base_url('admincp/ad/add/'.@$this->uri->segment(4))?>" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banner Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="<?=@$add->ad_type='banner'?$add->title:''?>" id="first-name" name="title" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Person Name<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="last-name" name="owner"  value="<?=@$add->ad_type='banner'?$add->owner:''?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 datepicker" >Start Date</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="s_date" class="form-control "  value="<?=@$add->ad_type='banner'?date('m/d/Y',strtotime($add->s_date)):''?>" id="single1" placeholder="Start Date" aria-describedby="inputSuccess2Status2">
                                </div>
                              </div>
                               <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text"  name="e_date" class="form-control "   value="<?=@$add->ad_type='banner'?date('m/d/Y',strtotime($add->e_date)):''?>" id="single2" placeholder="Start Date" aria-describedby="inputSuccess2Status2">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Amount<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number"  name="amt" id="last-name" name="last-name"  value="<?=@$add->ad_type='banner'?$add->amt:''?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                               <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Banner Image<span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file"  id="last-name" name="img" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <input type="hidden" name="ad_type" value="banner">

                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                   <button class="btn btn-primary" type="reset">Reset</button>
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>

                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                              <form id="demo-form2" enctype="multipart/form-data" action="<?=base_url('admincp/ad/add/'.@$this->uri->segment(4))?>" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Advertisement Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="first-name" name="title"  value="<?=@$add->ad_type=='page'?$add->title:''?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Person Name<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="last-name" name="owner"  value="<?=@$add->ad_type=='page'?$add->title:''?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 datepicker" >Start Date</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="s_date" class="form-control "  value="<?=@$add->ad_type=='page'?date('m/d/Y',strtotime($add->s_date)):''?>" id="single3" placeholder="Start Date" aria-describedby="inputSuccess2Status2">
                                </div>
                              </div>
                               <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text"  name="e_date" class="form-control "  value="<?=@$add->ad_type=='page'?date('m/d/Y',strtotime($add->e_date)):''?>" id="single4" placeholder="Start Date" aria-describedby="inputSuccess2Status2">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Amount<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="number"  name="amt" id="last-name"  value="<?=@$add->ad_type=='page'?$add->amt:''?>" name="amt" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                                <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Url<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="url"  name="url" id="last-name"   value="<?=@$add->ad_type=='page'?$add->url:''?>"required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                               <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Advertisement Image<span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file"  id="last-name" name="img" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <input type="hidden" name="ad_type" value="banner">

                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                   <button class="btn btn-primary" type="reset">Reset</button>
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>

                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
