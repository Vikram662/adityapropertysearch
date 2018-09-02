<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Aditya Property - Real EAll State Agency | Comercial</title>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Favicon  -->
    <link rel="icon" href="<?=base_url('assets/')?>img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url('assets/css/')?>my.css">
</head>

    <!-- Preloader -->
  <!--   <div id="preloader">
        <div class="south-load"></div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area fixed-top">

        <!-- Top Header Area -->
        <div class="top-header-area">
             <nav class="classy-navbar justify-content-between" id="southNav" style="height: 48px">

                    <!-- Logo -->
                  

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav text-center ancher" style="align-items: center!important;">
                            <ul>
                                <li><a href="<?=base_url('')?>">Home</a></li>
                                <li><a href="<?=base_url('about')?>">About Us</a></li>
                                <li><a href="<?=base_url('listing')?>">Properties</a></li>
                               
                                <li><a href="<?=base_url('contact/')?>">Contact</a></li>
                                 <li><a href="<?=base_url('login/')?>">Login</a></li>
                            </ul>

                        
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area hidden-sm" style="background-color: #4f8452;">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar nav justify-content-between" >

                    <!-- Logo -->
                

                    <!-- Navbar Toggler -->
                  
                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->

                        <div class="classynav text-center" style="align-items: center!important;">
                            <ul class="text-left">  
                               
                                <li><a href="#">Property Type</a>
                                    <div class="megamenu d-lg-flex text-left" style="background-color: #fff;width: fit-content">
                                       
                                        <ul class="single-mega ">
                                            <li class="title"><h4>ALL COMMERCIAL</h4></li>
                                            <li> 
                                                <?php $RESIDENTIAL= $this->db->get_where('category',['catetory'=>'ALL COMMERCIAL'])->result_array(); 
                                                foreach($RESIDENTIAL as $res){
                                                ?>
                                                <div class="form-check">
                                                    <label>
                                                        <input type="checkbox" class="property_type" value="<?=$res['sub_cat']?>" name="property_type[]"> <span class="label-text"><?=$res['sub_cat']?></span>
                                                    </label>
                                                </div>
                                                <?php } ?>
                                            </li>
                                        </ul>
                                       
                                       
                                    </div>
                                </li>
                                <li><a href="#">Budget</a>
                                    <div class="megamenu d-lg-flex" style="background-color: #fff;width: fit-content">
                                        <ul class="single-mega ">
                                            <li class="title"><h4>Budget</h4></li>
                                            <li style="display: flex;"> 
                                                <div class="form-check " style="width: 50%">
                                                    <label>Min </label>
                                                        <input type="number" id="minprice" name="price[]" class="form-control budget"> 
                                                </div>
                                                <div class="form-check "  style="width: 50%">
                                                    <label>Max </label>
                                                        <input type="number" id="maxprice" name="price[]" class="form-control budget">
                                                </div>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                               
                                  <li><a href="#">Construction Status</a>
                                    <div class="megamenu d-lg-flex" style="background-color: #fff;width: fit-content">
                                        <ul class="single-mega ">
                                            <li class="title"><h4>Construction Type</h4></li>
                                            <li> 
                                                <div class="form-check">
                                                    <label>
                                                        <input type="checkbox" class="counstruction_status" value="Ready To Move" name="counstruction_status[]"> <span class="label-text">Ready To Move</span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label>
                                                        <input type="checkbox" class="counstruction_status" value="Under Construction" name="counstruction_status[]"> <span class="label-text">Under Construction</span>
                                                    </label>
                                                </div>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                 <li><a href="#">Sale Type</a>
                                    <div class="megamenu d-lg-flex" style="background-color: #fff;width: fit-content">
                                        <ul class="single-mega ">
                                            <li class="title"><h4>Sale Type</h4></li>
                                            <li> 
                                                <div class="form-check">
                                                    <label>
                                                        <input type="checkbox" class="property_condition" value="New" name="property_condtion[]"> <span class="label-text" >New</span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label>
                                                        <input type="checkbox" class="property_condition" value="Resale" name="property_condtion[]"> <span class="label-text">Resale</span>
                                                    </label>
                                                </div>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </li>  
                                <?php if($this->input->get('city')!="All Cities") {?>                                
                                  <li><a href="#">Locality</a>
                                    <div class="megamenu d-lg-flex" style="background-color: #fff;width: fit-content;left: -200px">
                                        <ul class="single-mega " style="width: 800px"> 
                                            <li class="title"><h4>Select Locality</h4></li>
                                            <li> 
                                                <?php 
                                                    $locality =  $this->db->get_where('locality',['city_id'=>$this->input->get('city')])->result_array();
                                              $i=0;
                                                echo $div = '<div class="form-check" style="display: flex;">';
                                               foreach ($locality as $local) {
                                               if($i==0){

                                                   ?>
                                                 <label style="width: 200px">
                                                        <input type="checkbox" class="locality" value="<?=$local['id']?>" name="locality[]"> <span class="label-text"><?=$local['area_name']?></span>
                                                    </label>
                                                   <?php
                                                }elseif($i%4==0){
                                                    
                                                    echo '</div>
                                                    <div class="form-check" style="display: flex;">';
                                                   ?>
                                                     <label style="width: 200px">
                                                            <input type="checkbox" class="locality" value="<?=$local['id']?>" name="locality[]"> <span class="label-text"><?=$local['area_name']?></span>
                                                        </label>    
                                                   <?php
                                                }else{
                                                    ?>
                                                      <label style="width: 200px">
                                                                <input type="checkbox" class="locality" value="<?=$local['id']?>" name="locality[]"> <span class="label-text"><?=$local['area_name']?></span>
                                                            </label>
                                                </label><?php
                                                }
                                                $i++;
                                                   }     ?>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            <?php   } ?>
                                <style>
                                     ul.text-black li{
                                        color: #000!important;
                                     }
                                     .glyphicon-chevron-down:before {
                                            content: "\e114";
                                            font-size: 9px;
                                            }
                                         .single-mega li a  {
                                            margin-top: -7px;
                                            /* top: 0; */
                                            height: 0;
                                        }
                                        .option {
                                            background-color: #fff;
                                        }

                                       
                                </style>
                                  <li><a href="#">More</a>
                                   <div class="megamenu d-lg-flex" style="background-color: #fff;width: fit-content;display: inline;left: -800px">
                                        <ul class="single-mega text-black  ">
                                            <li class="title text-center d-lg-flex" style="z-index: 1">Area <a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a>                                                
                                            </li>
                                             <li style="display: flex;"> 
                                                    <div class="form-check " style="width: 50%">
                                                        <label>Min Sq.</label>
                                                            <input type="number" id="minarea" name="area[]" class="form-control area"> 
                                                    </div>
                                                    <div class="form-check "  style="width: 50%">
                                                        <label>Max Sq.</label>
                                                            <input type="number" id="maxarea" name="area[]" class="form-control area">
                                                    </div>
                                                   
                                                </li>
                                              <hr style="margin:0px">
                                                <li class="title text-center d-lg-flex" style="z-index: 1">Facing <a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>
                                            </li> 
                                            <li style="display: flex;"> 
                                                    <div class="form-check " style="width: 100%">
                                                      
                                                        <select name="facing" class="form-control facing" id="">
                                                            <option value="East">East</option>
                                                            <option value="North-East">North - East</option>
                                                            <option value="North">North</option>
                                                            <option value="North-West">North - West</option>
                                                            <option value="South">South</option>
                                                            <option value="South-East">South - East</option>
                                                        </select>
                                                          
                                                    </div>
                                                  
                                                   
                                                </li>
                                         <hr style="margin:0px">
                                           
                                        </ul>
                                         <ul class="single-mega  text-black" >
                                                 <li class="title text-center d-lg-flex" style="z-index: 1">Posted By <a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>
                                                  <li style=""> 
                                                     <div class="form-check " style="width: 100%">
                                                          <label>
                                                            <input type="checkbox" value="Owner" class="posted_by" name="posted_by[]"> <span class="label-text">Owner</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check " style="width: 100%">
                                                          <label>
                                                            <input type="checkbox" value="Agent" class="posted_by" name="posted_by[]"> <span class="label-text">Agent</span>
                                                        </label>
                                                    </div>
                                                     <div class="form-check " style="width: 100%">
                                                          <label>
                                                            <input type="checkbox" value="Builder" class="posted_by" name="posted_by[]"> <span class="label-text">Builder</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            <hr style="margin:0px">
                                            <li class="title text-center d-lg-flex" style="z-index: 1">Floor <a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>
                                              <li style="display: flex;"> 
                                                    <div class="form-check " style="width: 100%">
                                                      
                                                        <select name="floor" class="form-control floor" id="">
                                                            <option value="Basement">Basement</option>
                                                            <option value="Ground">Ground</option>
                                                            <option value="1-4">1 to 4</option>
                                                            <option value="5-8">5 to 8</option>
                                                            <option value="9-12">9 to 12</option>
                                                            <option value="13-16">13 to 16</option>
                                                            <option value="17-20">17 to 20</option>
                                                        </select>
                                                          
                                                    </div>
                                                  
                                                   
                                                </li>
                                             <hr style="margin:0px">
                                         
                                           
                                           
                                           
                                        </ul>
                                         <ul class="single-mega  text-black" style="width: 400px" >
                                        
                                               <li class="title text-center d-lg-flex" style="z-index: 1">Amenities <a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>
                                                 <li style=""> 
                                                     <?php $Amenities= $this->db->get('amenities')->result_array(); 
                                                     $i = 0;
                                           
                                                    echo $div = '<div class="form-check" style="display: flex;">';
                                                    foreach ($Amenities as $am) {
                                                        if($i==0){
                                                           ?>
                                                          <label style="width: 200px">
                                                            <input type="checkbox" class="amenities" value="<?=$am['name']?>" name="Amenities[]"> <span class="label-text"><?=$am['name']?></span>
                                                        </label>
                                                           <?php
                                                        }elseif($i%2==0){
                                                            
                                                            echo '</div>
                                                            <div class="form-check" style="display: flex;">';
                                                           ?>
                                                              <label style="width: 200px">
                                                                <input type="checkbox" class="amenities" value="<?=$am['name']?>" name="Amenities[]"> <span class="label-text"><?=$am['name']?></span>
                                                            </label>
                                                           <?php
                                                        }else{
                                                            ?>
                                                              <label style="width: 200px">
                                                            <input type="checkbox" class="amenities" value="<?=$am['name']?>" name="Amenities[]"> <span class="label-text"><?=$am['name']?></span>
                                                        </label><?php
                                                        }
                                                        $i++;
                                                    }
                                             ?>
                                                    
                                                </li>
                                            <hr style="margin:0px">
                                          
                                        </ul>
                                          <ul class="single-mega  text-black" >
                                             <li class="title text-center d-lg-flex" style="z-index: 1">Furnishing <a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>  
                                                 <li style=""> 
                                                     <div class="form-check " style="width: 100%">
                                                          <label>
                                                            <input type="checkbox" class="furnish" value="Furnished" name="furnish[]"> <span class="label-text">Furnished</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check " style="width: 100%">
                                                          <label>
                                                            <input type="checkbox" class="furnish" value="Semi-Furnished" name="furnish[]"> <span class="label-text">Semi-Furnished</span>
                                                        </label>
                                                    </div>
                                                     <div class="form-check " style="width: 100%">
                                                          <label>
                                                            <input type="checkbox"  class="furnish" value="Unfurnished" name="furnish[]"> <span class="label-text">Unfurnished</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            <hr style="margin:0px">
                                          
                                            <li class="title text-center d-lg-flex" style="z-index: 1">Posted Since <a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a></li>
                                            <li style="display: flex;"> 
                                                    <div class="form-check " style="width: 100%">
                                                      
                                                        <select name="update_date" class="form-control date" id="">
                                                            <option value="">All</option>
                                                            <option value="1 DAY">Yesterday</option>
                                                            `<option value="1 WEEK">Last Week</option>
                                                            <option value="2 WEEK">Last 2 Week</option>
                                                            <option value="3 WEEk">Last 3 Week</option>
                                                            <option value="1 MONTH">Last Month</option>
                                                            <option value="2 MONTH">Last 2 Month</option>
                                                            <option value="3 MONTH">Last 3 Month</option>
                                                            <option value="4 MONTH">Last 4 Month</option>
                                                        </select>
                                                          
                                                    </div>
                                                  
                                                   
                                                </li>
                                        </ul>

                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
 <!-- ##### Call To Action Area Start ##### -->

     <section class="breadcumb-area bg-img" style="height: 0px;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100 ">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="listings-top-meta d-flex justify-content-between">
                        <div class="view-area d-flex align-items-center">
                           <!--  <span>View as:</span>
                            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div> -->
                        </div>
                        <div class="order-by-area d-flex align-items-center" >
                           <!--  <span class="mr-15">Order by:</span>
                            <select>
                              <option selected>Default</option>
                              <option value="1">Newest</option>
                              <option value="2">Sales</option>
                              <option value="3">Ratings</option>
                              <option value="3">Popularity</option>
                            </select> -->
                        </div>
                    </div>
                </div>
            </div>

             <div class="row" >
                  <div class="col-md-9 col-sm-12" id="res">
                  </div>

                   <div class="col-md-3 col-sm-12" >
                     <?php $add = $this->db->order_by('id','RANDOM')->where("'".date('Y-m-d')."'  between s_date and e_date")->get_where('advertisement',['location'=>$this->input->get('city')])->result_array();
                         foreach ($add as $list) {
                           ?> 
                                 <div class="col-xs-12 col-md-12 col-xl-12" >

                                    <div class="single-featured-property mb-50" style="height: 255px">
                                        <!-- Property Thumbnail -->
                                        <div class="property-thumb" style="height: 100px">
                                            <a href="<?=$list['url']?>">
                                                <img src="<?=base_url($list['banner_image'])?>" style='height: 100px;width: 100%' alt="<?=$list['banner_image']?>">
                                            </a>
                                          
                                            
                                        </div>
                                        <!-- Property Content -->
                                        <div class="property-content">
                                              <a href="<?=$list['url']?>">
                                                <h5><?=$list['title']?></h5>
                                            </a>
                                           
                                            <p><?=$list['short_des']?></p>                     
                                        </div>
                                    </div>
                                </div> 
                                 
                           <?php
                         }
            ?>
                  </div>
                 <div class="col-md-12 col-sm-12 text-center">
                    <button class="btn south-btn south-green "  id='prev'>Prev</button>
                    <button class="btn south-btn south-green "  id='next'>Next</button>
                </div>
              
            </div>
        </div>
    </section>

    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(<?=base_url('assets/')?>img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <img src="<?=base_url('assets/')?>img/core-img/logo.png" alt="">
                           
                            <p>Integer nec bibendum lacus. Suspen disse dictum enim sit amet libero males uada feugiat. Praesent malesuada.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                          
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="<?=base_url('assets/')?>img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="<?=base_url('assets/')?>img/icons/envelope.png" alt=""> office@template.com</h6>
                                <h6><img src="<?=base_url('assets/')?>img/icons/location.png" alt=""> Main Str. no 45-46, b3, 56832, Los Angeles, CA</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6>
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Featured Properties</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                  
                            <div class="featured-properties-slides owl-carousel">
                                 <?php 
                   $list  = $this->db->get_where('property',['featured'=>1,'status'=>0])->result_array();
                  
               
                            foreach ($list as $listing) {
                    ?>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="<?=base_url('listing/single/'.$listing['id'])?>"><img src="<?=base_url($listing['featured_image'])?>" alt=""></a>
                                </div>
                       <?php } ?>
                              
                            </div>
                      
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Aditya Property Powerd By <a href="https://colorlib.com" target="_blank">Aditya Real Group</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?=base_url('assets/')?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?=base_url('assets/')?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?=base_url('assets/')?>js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?=base_url('assets/')?>js/plugins.js"></script>
    <script src="<?=base_url('assets/')?>js/classy-nav.min.js"></script>
    <script src="<?=base_url('assets/')?>js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="<?=base_url('assets/')?>js/active.js"></script>

</body>

</html>
<?php include __dir__.'/../ajax.php' ?>