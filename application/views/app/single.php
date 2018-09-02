 <!-- ##### Breadcumb Area Start ##### -->
   <?php 
$property =  $this->admin_model->get_property_by_id($this->uri->segment(3));
$gallery =   $this->admin_model->get_gallery_id($this->uri->segment(3));

   ?>
 <style>   .breadcumb-area {
    height: 450px;
}</style>
    
    <section class="breadcumb-area bg-img" style="background-image: url('<?=base_url($property->featured_image)?>')">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">
                          <?=$property->name?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
  
    <!-- ##### Listings Content Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Single Listings Slides -->
                    <div class="single-listings-sliders owl-carousel">
                    	  <?php foreach ($gallery as $image) {
                          ?>
                        <!-- Single Slide -->
                        <img src="<?=base_url().$image['image']?>" style='height: 500px' alt="">
                                                <?php
                        } ?>
                        <!-- Single Slide -->
                       
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
              <?php
              $CI =& get_instance();
              //$CI->abc($id) ;

          ?>
              <?php if($property){ ?>
                <div class="col-12 col-lg-8">
                    <div class="listings-content">
                        <!-- Price -->
                        <div class="list-price">
                            <p>₹ <?=$CI->nice_number($property->price) ?></p>
                        </div>
                        <h5><?=$property->name ?></h5>
                        <p class="location"><img src="<?=base_url('assets/')?>img/icons/location.png" alt=""> <?php 
                               $city =  $this->app_model->city_id($property->city);
                               $loc = $this->app_model->loc_id($property->locality);
                              // print_r($loc);
                            ?><?=$loc->area_name?>, <?=$city->city_name?> </p>
                       		<?=$property->long_desc ?>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
                            <div class="new-tag">
                                <img src="<?=base_url('assets/')?>img/icons/new.png" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="<?=base_url('assets/')?>img/icons/bathtub.png" alt="">
                                <span><?=$property->bathroom ?></span>
                            </div>
                           <!--  <div class="garage">
                                <img src="<?=base_url('assets/')?>img/icons/garage.png" alt="">
                                <span>1</span>
                            </div> -->
                            <div class="space">
                                <img src="<?=base_url('assets/')?>img/icons/space.png" alt="">
                                <span><?=$property->area ?> sq ft</span>
                            </div>
                        </div>
                        <!-- Core Features -->
                        <ul class="listings-core-features d-flex align-items-center">
                            <?php $features =  explode(',', $property->Amenities);
                            foreach ($features as $key => $feature) {
                                ?>
                                <li><i class="fa fa-check" aria-hidden="true"></i> <?=$feature?></li>
                                <?php
                            }
                             ?>
                              <?php $features =  explode(',', $property->more);
                            foreach ($features as $key => $feature) {
                                ?>
                                <li><i class="fa fa-check" aria-hidden="true"></i> <?=$feature?></li>
                                <?php
                            }
                             ?>
                            
                        </ul>
                        <!-- Listings Btn Groups -->
                      
                    </div>
                </div>
                <?php } ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                            <img src="img/bg-img/listing.jpg" alt="">
                            <div class="realtor---info">
                                <h6><img src="<?=base_url('assets/')?>img/icons/phone-call.png" alt=""> +91 999999999</h6>
                                <h6><img src="<?=base_url('assets/')?>img/icons/envelope.png" alt=""> info@examples.com</h6>
                                <?php if($this->session->flashdata('msg')){
                              ?>
                                 <p><?=$this->session->flashdata('msg'); ?></p>
                                 <?php } 
echo $this->session->userdata('otp_id');  
                                 ?> 
                            </div>
                            <div class="realtor--contact-form">
                                 <?php if($this->session->userdata('otp_id')){
                                    ?>
                                          <form id="enq-form" action="<?=base_url('listing/verfy/'.@$property->id)?>" method="post">
                                            <div class="form-group">
                                                <input type="text" value="" name="otp" class="form-control" id="realtor-name" placeholder="Enter Your OTP">
                                            </div>
                                            <?=form_error('otp')?>
                                             <?=form_error('message')?>
                                            <button type="submit" class="btn south-btn">Verify</button>
                                        </form>
                                    <?php
                                 }else{
                                    ?>
                                        <form id="enq-form" action="<?=base_url('listing/enq/'.@$property->id)?>" method="post">
                                            <div class="form-group">
                                                <input type="text" value="<?=set_value('name')?>" name="name" class="form-control" id="realtor-name" placeholder="Your Name">
                                            </div>
                                            <?=form_error('name')?>
                                            <div class="form-group">
                                                <input type="number" value="<?=set_value('phone')?>"name="phone" class="form-control" id="realtor-number" placeholder="Your Number">
                                            </div>
                                             <?=form_error('phone')?>
                                            <div class="form-group">
                                                <input type="email" value="<?=set_value('email')?>" name="email" class="form-control" id="realtor-email" placeholder="Your Mail">
                                            </div>
                                             <?=form_error('email')?>
                                            
                                            <button type="submit" class="btn south-btn">Send Message</button>
                                        </form>
                                    <?php
                                 }
                              ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Listing Maps -->
            <?php if(@$property->latitude!="" &&  @$property->longitude!=""){ ?>
            <div class="row">
                <div class="col-12">
                    <div class="listings-maps mt-100">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </section>
    <!-- ##### Listings Content Area End ##### -->
     <?php if(@$property->latitude!="" &&  @$property->longitude!=""){ ?>
    <script>
      var map;
    
      function initMap() {
         var myLatLng = {lat: <?=$property->latitude?>, lng:  <?=$property->longitude?>};


        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: ' <?=$property->name?>'
        });
      }
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFQVJo3UA2DTkn0yfQaG50GGRnLueOxss&callback=initMap"
    async defer></script>
       <?php } ?>
