  <!-- ##### Header Area End ##### -->
<?php 
if(@$this->session->userdata('city')){
 $banner =  $this->db->order_by('id', 'RANDOM')->where("'".date('Y-m-d')."'  between s_date and e_date")->where('location',$this->session->userdata('city'))->get_where('advertisement', ['ad_type'=>'banner'])->row();
}else{
 $banner =  $this->db->order_by('id', 'RANDOM')->where("'".date('Y-m-d')."'  between s_date and e_date")->get_where('advertisement', ['ad_type'=>'banner'])->row();
}
 ?>
 <style>
 .south-btn {
    position: relative;
    z-index: 1;
    min-width: 140px;
    height: 40px!important;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    background-color: #947054;
    border-radius: 0;
    line-height: 39px!important;
    padding: 0 30px;
    text-transform: uppercase;
}</style>

    <!-- ##### Hero Area Start ##### -->
     <section class="breadcumb-area bg-img"  id="full" style="background-image: url(<?=base_url(@$banner->banner_image)?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                       <div class="south-search-area">
                                <div class="row">
                                    <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                      
                                <!-- Search Form -->
                            <div class="south-tabs-content text-center ">
                                <ul class="nav nav-tabs tab-cebter" id="myTab" role="tablist">
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" id="tab--1"  href="login" role="tab" aria-controls="tab1" aria-selected="false">Sale</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Buy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Rent</a>
                                    </li>
                                  
                                      <li class="nav-item">
                                         <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Commercial</a>
                                        
                                    </li>
                                </ul>

                                <div class="tab-content mb-100" id="myTabContent">
                                   
                                    <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                        <div class="south-tab-content">
                                            <!-- Tab Text -->
                                            <div class="south-tab-text">
                                                 <form action="<?=base_url('filter/buy')?>" method="get" id="advanceSearch">
                                                    <div class="row">
                                                       
                                                        <div class="col-12 col-md-4 col-lg-3">

                                                            <div class="form-group">
                                                                <select class="form-control city"  name="city" id="cities">
                                                                    <option>All Cities</option>
                                                                        <?php 
                                                        $cities = $this->db->join('property', 'city.city_id = property.city')->group_by('property.city')->get('city')->result_array();
                                                     
                                                        foreach ($cities as $city) {
                                                            # code...?>
                                                                 <option <?=$city['city_id']==@$this->session->userdata('city')?'selected':''?> value="<?=$city['city_id']?>" ><?=$city['city_name']?></option>
                                                            <?php 
                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                        <input type="hidden" name="sale_type" value="Buy">
                                                        <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                                <select class="form-control" name="property_type" id="catagories">
                                                                    <option>All Catagories</option>
                                                                     <?php $RESIDENTIAL= $this->db->get_where('category',['catetory'=>'RESIDENTIAL'])->result_array(); 
                                                                    foreach($RESIDENTIAL as $res){
                                                                    ?>
                                                                      <option value="<?=$res['sub_cat']?>"><?=$res['sub_cat']?></option>
                                                                   
                                                                    <?php } ?>
                                                                     <?php $RESIDENTIAL= $this->db->get_where('category',['catetory'=>'ALL AGRICULTURAL'])->result_array(); 
                                                                    foreach($RESIDENTIAL as $res){
                                                                    ?>
                                                                      <option value="<?=$res['sub_cat']?>"><?=$res['sub_cat']?></option>
                                                                   
                                                                    <?php } ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                          <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                                <select class="form-control state" name="budget" id="cities">
                                                                    <option value="">Budget</option>
                                                                    
                                                                            <option value="100000-500000">1 Lac - 5 Lac</option>
                                                                            <option value="500000-1000000">5 Lac - 10 Lac</option>
                                                                            <option value="1000000-1500000">10 Lac - 15 Lac</option>
                                                                            <option value="1500000-2000000">15 Lac - 20 Lac</option>
                                                                            <option value="2000000-2500000">20 Lac - 25 Lac</option>
                                                                            <option value="2500000-3000000">25 Lac - 30 Lac</option>
                                                                            <option value="3000000-3500000">30 Lac - 35 Lac</option>
                                                                            <option value="3500000-4500000">40 Lac - 45 Lac</option>
                                                                            <option value="4500000-5000000">45 Lac - 50 Lac</option>
                                                                            <option value="5000000-5500000">50 Lac - 55 Lac</option>
                                                                            <option value="5500000-6000000">55 Lac - 60 Lac</option>
                                                                            <option value="6000000-6500000">60 Lac - 65 Lac</option>
                                                                            <option value="6500000-7000000">65 Lac - 70 Lac</option>
                                                                            <option value="7000000-7500000">70 Lac - 75 Lac</option>
                                                                            <option value="7500000-8000000">75 Lac - 80 Lac</option>
                                                                            <option value="8000000-9000000">80 Lac - 90 Lac</option>
                                                                            <option value="9000000-10000000">90 Lac - 1 Cr</option>
                                                                            <option value="10000000-15000000">1 Cr - 1.5 Cr</option>
                                                                            <option value="15000000">More than 1.5 Cr.</option>
                                                                        
                                                                </select>
                                                            </div>
                                                        </div>
                                                         <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                               <div class="form-group mb-0">
                                                                <button type="submit" class="btn south-btn">Search</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="tab-pane fade show " id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                        <div class="south-tab-content">
                                            <!-- Tab Text -->
                                            <div class="south-tab-text">
                                                 <form action="<?=base_url('filter/commercial')?>" method="get" id="advanceSearch">
                                                    <div class="row">
                                                       
                                                        <div class="col-12 col-md-4 col-lg-3">

                                                            <div class="form-group">
                                                                <select class="form-control city"  name="city" id="cities">
                                                                    <option>All Cities</option>
                                                                        <?php 
                                                        $cities = $this->db->join('property', 'city.city_id = property.city')->group_by('property.city')->get('city')->result_array();
                                                     
                                                        foreach ($cities as $city) {
                                                            # code...?>
                                                                 <option <?=$city['city_id']==@$this->session->userdata('city')?'selected':''?> value="<?=$city['city_id']?>" ><?=$city['city_name']?></option>
                                                            <?php 
                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="sale_type" value="commercial">
                                                        <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                                <select class="form-control" name="property_type" id="catagories">
                                                                  <option>All Catagories</option>
                                                                     <?php $RESIDENTIAL= $this->db->get_where('category',['catetory'=>'ALL COMMERCIAL'])->result_array(); 
                                                                    foreach($RESIDENTIAL as $res){
                                                                    ?>
                                                                      <option value="<?=$res['sub_cat']?>"><?=$res['sub_cat']?></option>
                                                                   
                                                                    <?php } ?>
                                                                   
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                          <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                                <select class="form-control state" name="budget" id="cities">
                                                                    <option value="">Budget</option>
                                                                    
                                                                            <option value="100000-500000">1 Lac - 5 Lac</option>
                                                                            <option value="500000-1000000">5 Lac - 10 Lac</option>
                                                                            <option value="1000000-1500000">10 Lac - 15 Lac</option>
                                                                            <option value="1500000-2000000">15 Lac - 20 Lac</option>
                                                                            <option value="2000000-2500000">20 Lac - 25 Lac</option>
                                                                            <option value="2500000-3000000">25 Lac - 30 Lac</option>
                                                                            <option value="3000000-3500000">30 Lac - 35 Lac</option>
                                                                            <option value="3500000-4500000">40 Lac - 45 Lac</option>
                                                                            <option value="4500000-5000000">45 Lac - 50 Lac</option>
                                                                            <option value="5000000-5500000">50 Lac - 55 Lac</option>
                                                                            <option value="5500000-6000000">55 Lac - 60 Lac</option>
                                                                            <option value="6000000-6500000">60 Lac - 65 Lac</option>
                                                                            <option value="6500000-7000000">65 Lac - 70 Lac</option>
                                                                            <option value="7000000-7500000">70 Lac - 75 Lac</option>
                                                                            <option value="7500000-8000000">75 Lac - 80 Lac</option>
                                                                            <option value="8000000-9000000">80 Lac - 90 Lac</option>
                                                                            <option value="9000000-10000000">90 Lac - 1 Cr</option>
                                                                            <option value="10000000-15000000">1 Cr - 1.5 Cr</option>
                                                                            <option value="15000000">More than 1.5 Cr.</option>
                                                                        
                                                                </select>
                                                            </div>
                                                        </div>
                                                         <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                               <div class="form-group mb-0">
                                                                <button type="submit" class="btn south-btn">Search</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                        <div class="south-tab-content">
                                            <!-- Tab Text -->
                                            <form action="<?=base_url('filter/rent')?>" method="get" id="advanceSearch">
                                                <div class="row">
                                                      
                                                        <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                                <select class="form-control city" name="city" id="cities">
                                                                    <option>All Cities</option>
                                                                         <?php 
                                                        $cities = $this->db->join('property', 'city.city_id = property.city')->group_by('property.city')->get('city')->result_array();
                                                     
                                                        foreach ($cities as $city) {
                                                            # code...?>
                                                                 <option <?=$city['city_id']==@$this->session->userdata('city')?'selected':''?> value="<?=$city['city_id']?>" ><?=$city['city_name']?></option>
                                                            <?php 
                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                                <select class="form-control" name="property_type" id="catagories">
                                                                    <option>All Catagories</option>
                                                                  
                                                                     <?php $RESIDENTIAL= $this->db->get_where('category',['catetory'=>'RESIDENTIAL'])->result_array(); 
                                                                    foreach($RESIDENTIAL as $res){
                                                                    ?>
                                                                      <option value="<?=$res['sub_cat']?>"><?=$res['sub_cat']?></option>
                                                                   
                                                                    <?php } ?>
                                                                     <?php $RESIDENTIAL= $this->db->get_where('category',['catetory'=>'ALL AGRICULTURAL'])->result_array(); 
                                                                    foreach($RESIDENTIAL as $res){
                                                                    ?>
                                                                      <option value="<?=$res['sub_cat']?>"><?=$res['sub_cat']?></option>
                                                                   
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="sale_type" value="Rent">
                                                       <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                                <select class="form-control state" name="budget" id="cities">
                                                                    <option value="">Budget</option>
                                                                    
                                                                            <option value="1000-5000">1K - 5 K</option>
                                                                            <option value="5000-10000">5 K - 10 K</option>
                                                                            <option value="10000-15000">10 K - 15 K</option>
                                                                            <option value="15000-20000">15 K - 20 K</option>
                                                                            <option value="20000-25000">20 K - 25 K</option>
                                                                            <option value="25000-50000">25 K - 50 K</option>
                                                                            <option value="5000000">More than 50 K</option>
                                                                        
                                                                </select>
                                                            </div>
                                                        </div>
                                                         <div class="col-12 col-md-4 col-lg-3">
                                                            <div class="form-group">
                                                               <div class="form-group mb-0">
                                                                <button type="submit" class="btn south-btn">Search</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50" style="padding-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Featured Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $CI =& get_instance(); ?>
    <?php 
    if(@$this->session->userdata('city')){
        $list  = $this->db->limit(3)->get_where('property',['featured'=>1,'status'=>0,'city'=>$this->session->userdata('city')])->result_array();
    }else{
        $list  = $this->db->limit(3)->get_where('property',['featured'=>1,'status'=>0])->result_array();
    }
       
   
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
                                <span>Featured</span>
                            </div>
                            <div class="list-price">
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
                               $loc = $this->app_model->loc_id($listing['locality']);
                              // print_r($loc);
                            ?><?=$loc->area_name?>,<?=$city->city_name?>
                        </p>
                            <p><?=$listing['short_des']?></p>
                         
                        </div>
                    </div>
                </div>
                    <?php
                }
                 ?>
            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->
     <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>latest Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $CI =& get_instance(); ?>
    <?php 
    if(@$this->session->userdata('city')){
         $list  = $this->db->limit(3)->order_by('id','desc')->get_where('property',['status'=>0,'city'=>$this->session->userdata('city')])->result_array();
    }else{
         $list  = $this->db->limit(3)->order_by('id','desc')->get_where('property',['status'=>0])->result_array();
    }
      
   
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
                                <span>latest</span>
                            </div>
                            <div class="list-price">
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
                               $loc = $this->app_model->loc_id($listing['locality']);
                              // print_r($loc);
                            ?><?=$loc->area_name?>,<?=$city->city_name?>
                        </p>
                            <p><?=$listing['short_des']?></p>
                          
                        </div>
                    </div>
                </div>
                    <?php
                }
                 ?>
            </div>
        </div>
    </section>
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Rent Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $CI =& get_instance(); ?>
    <?php 
    if(@$this->session->userdata('city')){
           $list  = $this->db->limit(3)->order_by('id','desc')->get_where('property',['status'=>0,'sale_type'=>'Rent','city'=>$this->session->userdata('city')])->result_array();
   
    }else{
           $list  = $this->db->limit(3)->order_by('id','desc')->get_where('property',['status'=>0,'sale_type'=>'Rent'])->result_array();
   
    }
    
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
                                <span>Rent</span>
                            </div>
                            <div class="list-price">
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
                               $loc = $this->app_model->loc_id($listing['locality']);
                              // print_r($loc);
                            ?><?=$loc->area_name?>,<?=$city->city_name?> 
                        </p>
                            <p><?=$listing['short_des']?></p>
                         
                        </div>
                    </div>
                </div>
                    <?php
                }
                 ?>
            </div>
        </div>
    </section>
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Buy Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $CI =& get_instance(); ?>
    <?php 
    if(@$this->session->userdata('city')){
          $list  = $this->db->limit(3)->order_by('id','desc')->get_where('property',['status'=>0,'sale_type'=>'Buy','city'=>$this->session->userdata('city')])->result_array();
    }else{
       $list  = $this->db->limit(3)->order_by('id','desc')->get_where('property',['status'=>0,'sale_type'=>'Buy'])->result_array();   
    }
     
   
                foreach ($list as $listing) {
                    ?>
                      <!-- Single Featured Property -->
                      <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <a href="<?=base_url('listing/single/'.$listing['id'])?>">
                                <img src="<?=base_url($listing['featured_image'])?>" style='height: 255px;width: 100%' alt="<?=$listing['featured_image']?>">
                            </a>
                            <div class="tag">
                                <span>Rent</span>
                            </div>
                            <div class="list-price">
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
                               $loc = $this->app_model->loc_id($listing['locality']);
                              // print_r($loc);
                            ?><?=$loc->area_name?>,<?=$city->city_name?>
                        </p>
                            <p><?=$listing['short_des']?></p>
                         
                        </div>
                    </div>
                </div>
                    <?php
                }
                 ?>
            </div>
        </div>
    </section>
        <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Commercial Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $CI =& get_instance(); ?>
    <?php 
    if(@$this->session->userdata('city')){
         $list  = $this->db->limit(3)->order_by('id','desc')->get_where('property',['status'=>0,'sale_type'=>'Commercial','city'=>$this->session->userdata('city')])->result_array();
    }else{
      $list  = $this->db->limit(3)->order_by('id','desc')->get_where('property',['status'=>0,'sale_type'=>'Commercial'])->result_array();   
    }
      
   
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
                                <span>Commercial</span>
                            </div>
                            <div class="list-price">
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
                               $loc = $this->app_model->loc_id($listing['locality']);
                              // print_r($loc);
                            ?><?=$loc->area_name?>,<?=$city->city_name?>
                        </p>
                            <p><?=$listing['short_des']?></p>
                          
                        </div>
                    </div>
                </div>
                    <?php
                }
                 ?>
            </div>
        </div>
    </section>

    <!-- ##### Call To Action Area Start ##### -->
  <!--   <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(assets/img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Suspendisse dictum enim sit amet libero malesuada feugiat.</h6>
                        <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100" style="padding-top: 0px;padding-bottom: 50px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>Agent profile</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">
            <?php 
             if(@$this->session->userdata('city')){
                 $agents = $this->db->where("role !='Admin'")->get_where('users',['status'=>0,'city'=>$this->session->userdata('city')])->result_array();
             }else{
                 $agents = $this->db->where("role !='Admin'")->get_where('users',['status'=>0])->result_array();
             }

           

            foreach ($agents   as $agent ){
                 ?>
                     <div class="single-testimonial-slide text-center">
                           
                           
                            <div class="testimonial-author-info">
                                <a href="<?=base_url('agent-profile/'.$agent['id'])?>">
                                <img src="<?=base_url($agent['img'])?>" alt="">
                                </a>
                                <p class="text-capitalize"><?=$agent['name']?>, <span><?=$agent['role']?></span></p>
                            </div>
                        </div>
                     
                 <?php
             }       
          ?>
                        <!-- Single Testimonial Slide -->
                       

                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Editor Area Start ##### -->
   
    <!-- ##### Editor Area End ##### -->