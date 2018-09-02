<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>South - Real EAll State Agency Template | Home</title>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Favicon  -->
    <link rel="icon" href="<?=base_url('assets/')?>img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<style> 
header{
    position: fixed;
}
.header-area{
    position: fixed;
}
.main-header-area .classy-navbar {
    height: 55px;
    padding: .5em 60px;
}
.main-header-area {
    width: 100%;
    height: 55px!important;
    position: relative;
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.4);
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}
.nav{
    background-color: #4f8452;
    height: 55px;
}
.contact-realtor-wrapper {
    background-color: #f5f5f5;
     margin-top: 0px; 
    position: relative;
    z-index: 1;
}
.contact-realtor-wrapper .realtor--contact-form {
    padding: 0 45px 0px;
}
.des{
 
    border-radius: 0px!important;
    background-color: #f9f9f9!important;
}
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
}

label{
    position: relative;
    cursor: pointer;
    color: #666;    
}

input[type="checkbox"], input[type="radio"]{
    position: absolute;
    right: 9000px;
}
.btn:hover, .btn:focus {
    color: #fff;
    text-decoration: none;
}

/*Check box*/
input[type="checkbox"] + .label-text:before{
    content: "\f096";
    font-family: "FontAwesome";
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing:antialiased;
    width: 1em;
    display: inline-block;
    margin-right: 5px;
}

input[type="checkbox"]:checked + .label-text:before{
    content: "\f14a";
    color: #2980b9;
    animation: effect 250ms ease-in;
}

input[type="checkbox"]:disabled + .label-text{
    color: #aaa;
}

input[type="checkbox"]:disabled + .label-text:before{
    content: "\f0c8";
    color: #ccc;
}

/*Radio box*/

input[type="radio"] + .label-text:before{
    content: "\f10c";
    font-family: "FontAwesome";
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing:antialiased;
    width: 1em;
    display: inline-block;
    margin-right: 5px;
}
.label-text{
    font-size: 16px;
    color: #fff;
    font-weight: 50;
}
input[type="radio"]:checked + .label-text:before{
    content: "\f192";
    color: #8e44ad;
    animation: effect 250ms ease-in;
}

input[type="radio"]:disabled + .label-text{
    color: #aaa;
}

input[type="radio"]:disabled + .label-text:before{
    content: "\f111";
    color: #ccc;
}

/*Radio Toggle*/

.toggle input[type="radio"] + .label-text:before{
    content: "\f204";
    font-family: "FontAwesome";
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing:antialiased;
    width: 1em;
    display: inline-block;
    margin-right: 10px;
}

.toggle input[type="radio"]:checked + .label-text:before{
    content: "\f205";
    color: #16a085;
    animation: effect 250ms ease-in;
}

.toggle input[type="radio"]:disabled + .label-text{
    color: #aaa;
}

.toggle input[type="radio"]:disabled + .label-text:before{
    content: "\f204";
    color: #ccc;
}


@keyframes effect{
    0%{transform: scale(0);}
    25%{transform: scale(1.3);}
    75%{transform: scale(1.4);}
    100%{transform: scale(1);}
}
</style>
<style>
    .breadcumb-area {
        height: 650px;
    }
    .south-search-area .advanced-search-form .slider-range {
    flex: 0 0 50%;
    min-width: 100%;
    margin-bottom: 30px;
}
.error{
    color:red;
    font-size: 12px;
    font-family: "Open Sans", sans-serif;
}
 @media only screen and (max-width: 768px) {
    /* For mobile phones: */
    .south-btn{
            min-width: 140px!important;
    }
     .property-content{
         height: fit-content!important;
        padding:0px 15px 0px 15px!important; 
        max-width: 495px!important;
    }
    .d-flex{
        display: none!important;
    }

        .south-search-area .advanced-search-form {
        background-color: #ffffff75;
        position: relative;
        margin-top: 8px;
        height: 387px!important;
        overflow-y:;
        z-index: 1;
        padding: 30px 50px;
        border: 1px solid #e1dddd;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.15);
    }
    .south-tabs-content .nav-tabs .nav-link {
        border: 2px solid #947054;
        padding: 0px 20px!important;
        height: 45px;
        line-height: 41px;
        color: #000000;
        margin: 0 1px!important;
        border-radius: 0;
    }
     .tab-cebter{
        margin-left: 0px!important;
    }
}
.south-tab-content  .form-control {
    background-color: #fff;
    width: 100%;
    height: 38px;
    border-radius: 0;
    font-size: 14px;
    color: #000000;
    margin-bottom: 30px;
    font-weight: 500;
    padding: 0 15px;
    border: 1px solid #e1dddd;
}
.south-tab-text .form-control {
    background-color: #fff;
    width: 100%;
    height: 38px;
    border-radius: 0;
    font-size: 14px;
    color: #000000;
    margin-bottom: 30px;
    font-weight: 500;
    padding: 0 15px;
    border: 1px solid #e1dddd;
}
.nav-link:hover {
    background-color: #947054;
}
  .south-search-area .advanced-search-form {
    background-color: #ffffff75;
    position: relative;
    margin-top: 8px;
    height: 200px;
    z-index: 1;
    padding: 30px 50px;
    border: 1px solid #e1dddd;
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.15);
}
.south-tabs-content .nav-tabs .nav-link {
    border: 2px solid #947054;
    padding: 0px 31px;
    height: 45px;
    line-height: 41px;
    color: #000000;
    margin: 0 2px;
    border-radius: 0;
}
    .tab-cebter{
        margin-left: 351px;;
    }
    .south-btn {
    position: relative;
    z-index: 1;
    min-width: 170px;
    height: 50px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    background-color: #947054;
    border-radius: 0;
    line-height: 50px;
    padding: 0 30px;
    text-transform: uppercase;
}
.modal {
    position: fixed;
    top: 120px;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    -webkit-overflow-scrolling: touch;
    outline: 0;
}
.list {
   max-height:250px;
  background-color:blue;
   overflow-y:scroll!important; 
}
.ancher a{
    color:#fff;
}
.checkbox{
    color: #fff;
}
.classynav h4, .classynav span {
   color: #000!important;
}
 ul.single-mega {
    border-right: 1px solid #cecece;
    border-bottom: 1px solid #cecece;
    padding-right: 15px;
        width: 240px;
}
.classynav ul li {
    display: inline-block;
    clear: both;
    position: relative;

}
</style>

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
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
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
<style>
    .img-responsive{
         height: 250px;
        max-width: 330px;
    }
    .property-thumb  {
        height: 250px;
        max-width: 330px;
    }
 /*   .bck{
    background-color: #c1e4bf;
    padding: 0 7px;
    border-radius: 5px;
}*/
    .property-content{
         height: 250px;
        padding:0px 15px 0px 15px!important; 
       max-width:495px;
    }
    .location{
        margin-bottom: 0px!important;
        color: #de2e2e!important;
    }
    .h5-margin{
    margin: 10px 10px 0px auto;
    font-weight: 700;
    color: #de2e2e;
}
.south-green{
    background-color: #4f8452;
}
.south-red{
    background-color: #de2e2e;
}

.tag span{
       background-color: #4f8452a1!important;
    border-radius: 117px;
}
</style>

            <div class="row" id="res">
               

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

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content des">
        <div class="modal-header">
            <h4 class="modal-title">Get more Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
            <div class="modal-body">
                 <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                           <div class="realtor--contact-form" id="data">
                               <form id="enq-form" action="<?=base_url('listing/enq/')?>" method="post">
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
                                    
                               
                            </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="sub" class="btn south-btn south-green">Send </button>
          <button type="button " class="btn south-btn m-1 south-red" data-dismiss="modal">Close</button>
           </form>
        </div>
      </div>
      
    </div>
  </div>
   <style>
.wait {
    position: fixed;
    z-index: 1;
    top: 50%;
    left: 50%;]
}</style>
      <div id="wait" class="wait"><img src='<?=base_url('assets/img/icons/laoder.gif')?>'  />

 <?php include __dir__.'/../ajax.php' ?>
        