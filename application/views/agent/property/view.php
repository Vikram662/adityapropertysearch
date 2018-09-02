  <!-- page content -->
  <?php 
$property =  $this->admin_model->get_property_by_id($this->uri->segment(4));
$gallery =   $this->admin_model->get_gallery_id($this->uri->segment(4));
   ?>
        <div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Property :: Detail</h3>
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
                    <h2>Property Posted By :-   <?php $user= $this->admin_model->get_user($property->user_id);
                                echo $user->name?></h2>
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

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <img src="<?=base_url().$property->featured_image?>" alt="..." />
                      </div>
                      <div class="product_gallery">
                       <!--  <?php foreach ($gallery as $image) {
                          ?>
                              <a>
                                <img src="<?=base_url().$image['image']?>" alt="..." />
                              </a>
                          <?php
                        } ?> -->
                     
                       
                       
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title"><?=$property->name ?></h3>

                   

                   
                      

                      <div class="">
                       <?=$property->long_desc ?>
                      </div>

                      <div class="">
                        <a href="<?= base_url('agent/property/edit/'.$property->id)?>" class="btn btn-default btn-lg">Edit</a>
                       
                      </div>

                    

                    </div>


                    <div class="col-md-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Description</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Property detail</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Facilities</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                           <?=$property->long_desc ?>
                          </div>
                           <?php 
                                    $city =  $this->app_model->city_id($property->city );
                                     $state = $this->app_model->state_id($property->state );
                                     $loc = $this->app_model->loc_id($property->locality );
                                   ?>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <table class="table table-responsive">
                              <tr>
                                <th width="25%">Address</th>
                                <th width="25%"><?=$property->address ?></th>
                                <th width="25%">Locality</th>
                                <th width="25%"><?=$loc->area_name?></th>
                             
                                  
                                </tr>
                                <tr>
                                  <th>City</th>
                                 
                                  <th><?=$city->city_name ?></th>
                                  <th>State</th>
                                  <th><?=$state->state_name?></th>

                                </tr>
                               
                                <tr>
                                  <th>Property Type</th>
                                  <th><?=$property->property_type ?></th>
                                   <th>Bedroom</th>
                                  <th><?=$property->bhk ?></th>
                                </tr>
                              
                                <tr>
                                  <th>Bathroom</th>
                                  <th><?=$property->bathroom?></th>
                                   <th>Sale Type</th>
                                  <th><?=$property->sale_type ?></th>
                                </tr>
                                 <tr>
                                  <th>Price</th>
                                  <th>₹ <?=$property->price?> </th>
                                   <th>Area</th>
                                  <th><?=$property->area ?> Sq.</th>
                                </tr>
                              
                            </table>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                           <table class="table table-responsive">
                              <tr>
                                <th width="25%">Construction Status</th>
                                <th width="25%"><?=$property->counstruction_status ?></th>
                                <th width="25%">Property Condition</th>
                                <th width="25%"><?=$property->property_condtion ?></th>
                                  
                              </tr>                               
                              <tr>
                                <th>Furnish</th>
                                <th><?=$property->furnish?></th>

                                <th>Floor</th>
                                <th><?=$property->floor ?></th>
                                
                              </tr>
                            
                              <tr>
                                <th>Amenities</th>
                                <th><?=$property->Amenities?></th>
                                 <th>More Feature</th>
                                <th><?=$property->more ?></th>
                              </tr>
                            <tr>
                                <th>Created Date</th>
                                <th><?=$property->create_date?></th>
                                 <th>Last Update Date</th>
                                <th><?=$property->update_date ?></th>
                              </tr>
                               
                              
                            </table>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <style>
              .image {
                  position:relative;
                  padding-top:20px;
                  display:inline-block;
              }
              .notify-badge{
                  position: absolute;
                  right:1px;
                  z-index: 1;
                  top:10px;
                  background:white;
                  text-align: center;
                  border-radius: 30px 30px 30px 30px;
                  color:#f5f7d0;
                  padding:5px 10px;
                  font-size:20px;
              }
            </style>
            <div class="row">
                <p>Media gallery</p> 
                 <?php foreach ($gallery as $image) {
                          ?>
                       <div class="col-md-55">
                        <div class="">
                          <div class="image view view-first">
                            <span class="notify-badge"><a onclick="return confirm('Are you sure you want to delete this item?');" href="<?=base_url('agent/property/gallery_del/')?><?php echo $image['g_id']?>"><i class="fa fa-times"></i></a></span>
                            <img style="width: 200px;height: 150px" src="<?=base_url().$image['image']?>" alt="image">
                           <!--  <div class="mask no-caption">
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div> -->
                          </div>
                        </div>
                      </div>
                        <?php
                        } ?>
              
              </div>
          </div>
        </div>
        <!-- /page content -->