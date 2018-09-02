 <style>
    ul.pagination li a {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #947054;
    background-color: #FFF;
    border: 1px solid #cab09c;
}
.page-item.active a {
    z-index: 1;
    color: #FFF;
    background-color: #947054;
    border-color: #947054;
}

  </style>
   <!-- ##### Breadcumb Area Start ##### -->
 <?php 
 

   $banner =  $this->db->order_by('id', 'RANDOM')->where("'".date('Y-m-d')."'  between s_date and e_date")->get_where('advertisement', ['ad_type'=>'banner'])->row();
 ?>
 <style>   .breadcumb-area {
    height: 450px;
}</style>
    
    <section class="breadcumb-area bg-img" style="background-image: url('<?=base_url(@$banner->banner_image)?>')">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                   <!--  <div class="breadcumb-content">
                        <h3 class="breadcumb-title">All Properties</h3>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row"><?php 
$agent = $this->db->get_where('users',['id'=>$this->uri->segment(2)])->row();
  $city =  $this->app_model->city_id($agent->city);
   $state = $this->app_model->state_id($agent->state);
             ?>
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-100">
                            <div class="panel panel-info" style="width: 100%">
                              
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?=base_url($agent->img)?>" class="img-circle img-responsive"> </div>
                                    
                                 
                                    <div class=" col-md-9 col-lg-9 "> 
                                      <table class="table table-user-information">
                                        <tbody>
                                          <tr>
                                            <td>Name:</td>
                                            <td><?=$agent->name?></td>
                                          </tr>
                                          <tr>
                                            <td>State</td>
                                            <td><?=$state->state_name?></td>
                                          </tr>
                                          <tr>
                                            <td>City</td>
                                            <td><?=$city->city_name?></td>
                                          </tr>
                                       
                                            <tr>
                                            <td>Gender</td>
                                            <td><?=$agent->gender?></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>Email</td>
                                            <td><?=$this->session->userdata('verfied')?$agent->email:'';?></td>
                                          </tr>
                                            <td>Phone Number</td>
                                            <td><?=$this->session->userdata('verfied')?$agent->phone:'';?>
                                            </td>
                                               
                                          </tr>
                                         
                                        </tbody>
                                      </table>
                                <button type="button" class="btn south-btn south-green" data-toggle="modal" data-target="#myModal">Contact Agent</button>
                                     
                                    </div>
                                  </div>
                                </div>
                              </div>
                    </div>
                </div>
            </div>
    

           
        </div>
    </section>
      <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Agent Property</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                   <?php 
                foreach ($list as $listing) {
                    ?>
                      <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <a href="<?=base_url('listing/single/'.$listing['id'])?>">
                                <img src="<?=base_url($listing['featured_image'])?>" style='height: 255px;width: 100%' alt="<?=$listing['featured_image']?>">
                            </a>
                            <div class="tag">
                                <span><?=$listing['sale_type']?></span>
                            </div>
                            <div class="list-price">
<?php $CI =& get_instance(); ?>
                                <p>₹&nbsp;<?=$CI->nice_number($listing['price'])?></p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                              <a href="<?=base_url('listing/single/'.$listing['id'])?>">
                                <h5><?=$listing['name']?></h5>
                            </a>
                            <p class="location"><img src="<?=base_url('assets/')?>img/icons/location.png" alt="">
                            <?php 
                               $city =  $this->app_model->city_id($listing['city']);
                               $state = $this->app_model->state_id($listing['state']);
                               $loc = $this->app_model->loc_id($listing['locality']);
                              // print_r($loc);
                            ?><?=$loc->area_name?>,<?=$city->city_name?>,<?=$state->state_name?> 
                        </p>
                            <p><?=$listing['short_des']?></p>
                          
                        </div>
                    </div>
                </div>
                    <?php
                }
                 ?>

            </div>

             <div class="row">
                <div class="col-12">
                    <div class="south-pagination d-flex justify-content-end">
                        <nav aria-label="Page navigation">
                            <?= $this->pagination->create_links(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

  