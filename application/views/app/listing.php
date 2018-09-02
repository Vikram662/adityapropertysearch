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
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">All Properties</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-100">
                        <div class="view-area d-flex align-items-center">
                            <span>View as:</span>
                            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="order-by-area d-flex align-items-center">
                            <span class="mr-15">Order by:</span>
                            <select>
                              <option selected>Default</option>
                              <option value="1">Newest</option>
                              <option value="2">Sales</option>
                              <option value="3">Ratings</option>
                              <option value="3">Popularity</option>
                            </select>
                        </div>
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
                               $loc = $this->app_model->loc_id($listing['locality']);
                              // print_r($loc);
                            ?><?=$loc->area_name?>,<?=$city->city_name?>
                        </p>
                            <p><?=$listing['short_des']?></p>
                           <!--  <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="<?=base_url('assets/')?>img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="<?=base_url('assets/')?>img/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="<?=base_url('assets/')?>img/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="<?=base_url('assets/')?>img/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div> -->
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
    <!-- ##### Listing Content Wrapper Area End ##### -->