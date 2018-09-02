





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>search result</title>
<link href="<?=base_url('assets/')?>bootstrap.min.css" type="text/css"  rel="stylesheet" />
<link href="<?=base_url('assets/')?>bootstrap-theme.css" type="text/css" rel="stylesheet" />
<link href="<?=base_url('assets/')?>select-1.5.4.css" type="text/css" rel="stylesheet" />
<link href="<?=base_url('assets/')?>cardlayout.css" type="text/css" rel="stylesheet" />

<style>
html,
<style>
html,
body {
    overflow-x: hidden; /* Prevent scroll on narrow devices */
}
body {
    padding-top: 100px;
}
footer {
    padding: 30px 0;
}

/*
 * Custom styles
 */
.navbar-brand {
    font-size: 24px;
}

.navbar-container {
    padding: 20px 0 20px 0;
}

.navbar.navbar-fixed-top.fixed-theme {
    background-color: #fff;
    border-color: #fff;
    box-shadow: 0 0 5px #fff;
}

.navbar-brand.fixed-theme {
    font-size: 18px;
}
#top {
  position: fixed;
  top: 90px;
  left: 0;
  z-index: 999;
  width: 100%;
  height: 23px;
}
.navbar-container.fixed-theme {
    padding: 0;
}

.navbar-brand.fixed-theme,
.navbar-container.fixed-theme,
.navbar.navbar-fixed-top.fixed-theme,
.navbar-brand,
.navbar-container{
    transition: 0.8s;
    -webkit-transition:  0.8s;
}
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #219FD1;
}

.col-item .info .rating
{
    color: #777;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}
.ddl-title{
  background-color:#5bc0de !important;
  color:#fff !important;
  font-style:italic;
  font-size:80%;
}
  
.ddl-select.input-group-btn:first-child>.btn-group:not(:first-child)>.btn {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.icoFilter {
    display: inline-block;
    background:repeat scroll -14px -7px;
    width: 22px;
    height: 18px;
}

/* Large Dropdown Menu*/
.dropdown-menu-lg {
  width: 600px;
  padding: 20px 0px;
}
.dropdown-menu-lg > li > ul {
  padding: 0;
  margin: 0;
}
.dropdown-menu-lg > li > ul > li {
  list-style: none;
}
.dropdown-menu-lg > li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: normal;
}
.dropdown-menu-lg > li ul > li > a:hover,
.dropdown-menu-lg > li ul > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu-lg .disabled > a,
.dropdown-menu-lg .disabled > a:hover,
.dropdown-menu-lg .disabled > a:focus {
  color: #999999;
}
.dropdown-menu-lg .disabled > a:hover,
.dropdown-menu-lg .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.dropdown-menu-lg .dropdown-header {
  color: #428bca;
  font-size: 18px;
}
@media (max-width: 768px) {
  .dropdown-menu-lg {
    margin-left: 0 ;
    margin-right: 0 ;
  }
  .dropdown-menu-lg > li {
    margin-bottom: 30px;
  }
  .dropdown-menu-lg > li:last-child {
    margin-bottom: 0;
  }
  .dropdown-menu-lg .dropdown-header {
    padding: 3px 15px !important;
  }
}
@media only screen and (min-width: 480px){
    .list{
        width: 100%!important;
        margin-left:auto!important;
        margin-right: auto!important;
    }

}
/*Search Box*/
.center-block {
    float: none;
    margin-left: auto;
    margin-right: auto;
}

.input-group .icon-addon .form-control {
    border-radius: 0;
}

.icon-addon {
    position: relative;
    color: #555;
    display: block;
}

.icon-addon:after,
.icon-addon:before {
    display: table;
    content: " ";
}

.icon-addon:after {
    clear: both;
}

.icon-addon.addon-md .glyphicon,
.icon-addon .glyphicon, 
.icon-addon.addon-md .fa,
.icon-addon .fa {
    position: absolute;
    z-index: 2;
    left: 10px;
    font-size: 14px;
    width: 20px;
    margin-left: -2.5px;
    text-align: center;
    padding: 10px 0;
    top: 1px
}

.icon-addon.addon-lg .form-control {
    line-height: 1.33;
    height: 46px;
    font-size: 18px;
    padding: 10px 16px 10px 40px;
}

.icon-addon.addon-sm .form-control {
    height: 30px;
    padding: 5px 10px 5px 28px;
    font-size: 12px;
    line-height: 1.5;
}

.icon-addon.addon-lg .fa,
.icon-addon.addon-lg .glyphicon {
    font-size: 18px;
    margin-left: 0;
    left: 11px;
    top: 4px;
}

.icon-addon.addon-md .form-control,
.icon-addon .form-control {
    padding-left: 30px;
    float: left;
    font-weight: normal;
}

.icon-addon.addon-sm .fa,
.icon-addon.addon-sm .glyphicon {
    margin-left: 0;
    font-size: 12px;
    left: 5px;
    top: -1px
}

.icon-addon .form-control:focus + .glyphicon,
.icon-addon:hover .glyphicon,
.icon-addon .form-control:focus + .fa,
.icon-addon:hover .fa {
    color: #2580db;
}

</style>
</head>

<body style="height:auto;">
<div class="body-wrap" style="background-color:#fafafa;">
  <div>
    <nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="#">Aditya Property</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                   
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?=base_url('')?>">Home</a></li>
                        <li><a href="<?=base_url('about')?>">About Us</a></li>
                        <li><a href="<?=base_url('listing')?>">Property</a></li>
                        <li><a href="<?=base_url('contact')?>">Contact Us</a></li>
                        <li><a href="<?=base_url('login')?>">Login</a></li>
                        <li><button id="post_propety" class="btn btn-info" style="margin-top: 3%; margin-right: 2%;">POST YOUR PROPERTY</button></li>
                     
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
    <div style="margin-top:-1.5%; background:#e5e5e5;" id="top">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="icoFilter"></span>
                    <a class="navbar-brand" href="#">Filter</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">BHK <b class="caret"></b></a>
                            <ul class="dropdown-menu" id="bhk">
                                <li><a href="#" class="bhk" data-val='1 BHK'>1 BHK</a></li>
                                <li><a href="#" class="bhk" data-val='2 BHK'>2 BHK</a></li>
                                <li><a href="#" class="bhk" data-val='3 BHK'>3 BHK</a></li>
                                <li><a href="#" class="bhk" data-val='4 BHK'>4 BHK</a></li>
                                <li><a href="#" class="bhk" data-val='5 BHK'>5 BHK</a></li>
                                <li><a href="#" class="bhk" data-val='6 BHK'>6 BHK</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Construction Status <b class="caret"></b></a>
                            <ul class="dropdown-menu" id="const_st">
                                <li><a href="#" class="counstruction_status" data-val='Ready To Move'>Ready To Move</a></li>
                                <li><a href="#" class="counstruction_status" data-val='Under Construction'>Under Construction</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sale Type <b class="caret"></b></a>
                            <ul class="dropdown-menu" id=sell_type> 
                                <li><a href="#" class="property_condtion" data-val="New">New</a></li>
                                <li><a href="#" class="property_condtion" data-val="Resale">Resale</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Posted By <b class="caret"></b></a>
                            <ul class="dropdown-menu" id="post_by">
                                <li><a href="#" class="posted_by" data-val="Owner">Owner</a></li>
                                <li><a href="#" class="posted_by" data-val="Agent">Agent</a></li>
                                <li><a href="#" class="posted_by" data-val="Builder">Builder</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Posted Since <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="update_date" data-val="all">All</a></li>
                                <li><a href="#" class="update_date" data-val="1 DAY">Yesterday</a></li>
                                <li><a href="#" class="update_date" data-val="1 WEEK">Last Week</a></li>
                                <li><a href="#" class="update_date" data-val="2 WEEk">Last 2 Week</a></li>
                                <li><a href="#" class="update_date" data-val="3 WEEk">Last 3 Week</a></li>
                                <li><a href="#" class="update_date" data-val="1 MONTH">Last Month</a></li>
                                <li><a href="#" class="update_date" data-val="2 MONTH">Last 2 Month</a></li>
                                <li><a href="#" class="update_date" data-val="4 MONTH">Last 4 Month</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bathroom <b class="caret"></b></a>
                            <ul class="dropdown-menu" id="bathroom">
                                <li><a href="#" class="bathroom" data-val="1">1 Bathroom</a></li>
                                <li><a href="#" class="bathroom" data-val="2">2 Bathroom</a></li>
                                <li><a href="#" class="bathroom" data-val="3">3 Bathroom</a></li>
                                <li><a href="#" class="bathroom" data-val="4">4 Bathroom</a></li>
                                <li><a href="#" class="bathroom" data-val="5">5 Bathroom</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Area <b class="caret"></b></a>
                            <ul class="dropdown-menu" id="area">
                                <li><a href="#" class="area" data-val="">All</a></li>
                                <li><a href="#" class="area" data-val="500-750">500 - 750 Sq. Ft.</a></li>
                                <li><a href="#" class="area" data-val="750-1000">750 - 1000 Sq. Ft.</a></li>
                                <li><a href="#" class="area" data-val="1000-1250">1000 -1250 Sq. Ft.</a></li>
                                <li><a href="#" class="area" data-val="1250-1500">1250 - 1500 Sq. Ft.</a></li>
                                <li><a href="#" class="area" data-val="1500-2000">1500 -2000 Sq. Ft.</a></li>
                                <li><a href="#" class="area" data-val="2000-2500">2000 - 2500 Sq. Ft.</a></li>
                                <li><a href="#" class="area" data-val="2500-3000">25000 - 3000 Sq. Ft.</a></li>
                                 <li><a href="#" class="area" data-val="3000"> > 3000  Sq. Ft.</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Furnishing <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="furnish" data-val="Furnished">Furnished</a></li>
                                <li><a href="#" class="furnish" data-val="Semi-Furnished">Semi-Furnished</a></li>
                                <li><a href="#" class="furnish" data-val="Unfurnished">Unfurnished</a></li>
                            </ul>
                        </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Floor <b class="caret"></b></a>
                            <ul class="dropdown-menu" id="floor">
                                    <li><a href="#" class="floor" data-val="Basement">Basement</a></li>
                                    <li><a href="#" class="floor" data-val="Ground">Ground</a></li>
                                    <li><a href="#" class="floor" data-val="1-4">1-4</a></li>
                                    <li><a href="#" class="floor" data-val="5-8">5-8</a></li>
                                    <li><a href="#" class="floor" data-val="9-12">9-12</a></li>
                                    <li><a href="#" class="floor" data-val="13-16">13-16</a></li>
                                    <li><a href="#" class="floor" data-val="16-20">16+</a></li>   
                            </ul>
                        </li>
                         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Amenities <b class="caret"></b></a>
                            <ul class="dropdown-menu" id="Amenities">
                                <li><a href="#" class="Amenities" data-val="Power Back Up">Power Back Up</a></li>
                                <li><a href="#" class="Amenities" data-val="Lift">Lift</a></li>
                                <li><a href="#" class="Amenities" data-val="Swimming Pool">Swimming Pool</a></li>
                                <li><a href="#" class="Amenities" data-val="Gymnasium">Gymnasium</a></li>
                                <li><a href="#" class="Amenities" data-val="Park">Park</a></li>
                                <li><a href="#" class="Amenities" data-val="Reserved Parking">Reserved Parking</a></li>   
                            </ul>
                        </li>
            
                        
                    </ul>
                </div>
                 <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <div class="container">
        <div class="row"  style="margin-top: 50px">
            <div class="col-md-20 col-md-offset-1">
                <div class="panel panel-login">
                    <div class="panel-heading">
                       <h3 style="float:left; color:#666;">&nbsp;  <?=$this->input->get('property_type') ?> </h3>
                      
                    </div>
                    
                    <div class="panel-body">
                        <div class="row">
                            <div style="margin-bottom:5%; margin-top:-3%;">
                            
                           
                        </div>
                        </div>
                        <div class="row" id='res'>
                                
                              
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
  </div>
  </div>
  

</body>
<script src="<?=base_url('assets/')?>js/jquery/jquery-2.2.4.min.js"></script>
   <script src="<?=base_url('assets/')?>js/bootstrap.min.js"></script>
   <script src="<?=base_url('assets/')?>js/popper.min.js"></script>
<script type="text/javascript">
// $('ul.nav li.dropdown').hover(function() {
//   $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
// }, function() {
//   $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
// });
</script>
<script type="text/javascript">
    $(window).scroll(function(){
 
   var height = $(window).scrollTop();
   if(height>40){

    $('#top').css('top','71px');
   }else{
      $('#top').css('top','90px');
   }
});
$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
$('#post_propety').click(function(event) {
    /* Act on the event */
    window.location = "<?=base_url('login#signup')?>";
});
$(window).scroll(function(){
 
   var height = $(window).scrollTop();
   if(height>40){

    $('#top').css('top','71px');
   }else{
      $('#top').css('top','90px');
   }
});
</script>
<script>
    $(document).ready(function(){

/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
 */
var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
            document.getElementById(this.elements[i]).className =
                    document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
        }
        this.flagAdd = true;
    }

};

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
myNavBar.init(  [
    "header",
    "header-container",
    "brand"
]);

/**
 * Function that manage the direction
 * of the scroll
 */
function offSetManager(){

    var yOffset = 0;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet == yOffset){
        myNavBar.remove();
    }

}

/**
 * bind to the document scroll detection
 */
window.onscroll = function(e) {
    offSetManager();
}

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
offSetManager();
});

</script>

<!--ajax request all-->
<script type="text/javascript">
    $(document).ready(function($) {
        function get(){
            <?php 
            $data = $this->input->get();
                if($data['budget']!=""){
                    ?>
                    var budget = '<?=$data['budget']?> ';
                    <?php
                }else{
                    ?>
                      var budget ='';
                    <?php
                }

                if($data['property_type']!="All Catagories"){
                    ?>
                    var property_type = "<?=$data['property_type']?>";
                    <?php
                }else{
                    ?>
                      var property_type ='';
                    <?php
                }

                 if($data['city']!="All Cities"){
                    ?>
                    var city = "<?=$data['city']?> ";
                    <?php
                }else{
                    ?>
                      var city ='';
                    <?php
                }

                if($this->uri->segment(2)=='buy'){
                    ?>
                    var sale_type = 'Buy';
                    <?php
                }elseif ($this->uri->segment(2)=='sale') {
                    ?>
                    var sale_type = 'Sale';
                    <?php
                }elseif($this->uri->segment(2)=='rent'){
                     ?>
                    var sale_type = 'Rent';
                    <?php
                }
             ?>
             $.ajax({

                url: '<?=base_url('admincp/ajax/get_all_list')?>',
                type: 'POST',
                data : {city:city,sale_type:sale_type,budget:budget,property_type:property_type}
            }).done(function(data) {
              //console.log(data);
              $('#res').html(data);
          })
          .fail(function(err) {
              console.log(err.responseText);
          })
          .always(function() {
              console.log("complete");
          });
        }
    get();
    });

    $(document).ready(function($) {

    var act = $('ul.dropdown-menu').children('li').children('a'); 
      event.preventDefault();
        $(act).click(function(event) {
            var field = $(this).attr('class');
            var val = $(this).data('val');
            /* Act on the event */
          
            <?php 
            $data = $this->input->get();
                if($data['budget']!=""){
                    ?>
                    var budget = '<?=$data['budget']?>';
                    <?php
                }else{
                    ?>
                      var budget ='';
                    <?php
                }

                if($data['property_type']!="All Catagories"){
                    ?>
                    var property_type = "<?=$data['property_type']?>";
                    <?php
                }else{
                    ?>
                      var property_type ='';
                    <?php
                }

                 if($data['city']!="All Cities"){
                    ?>
                    var city = "<?=$data['city']?>";
                    <?php
                }else{
                    ?>
                      var city ='';
                    <?php
                }

                if($this->uri->segment(2)=='buy'){
                    ?>
                    var sale_type = 'Buy';
                    <?php
                }elseif ($this->uri->segment(2)=='sale') {
                    ?>
                    var sale_type = 'Sale';
                    <?php
                }elseif($this->uri->segment(2)=='rent'){
                     ?>
                    var sale_type = 'Rent';
                    <?php
                }
             ?>
             $.ajax({

                url: '<?=base_url('admincp/ajax/filter')?>',
                type: 'POST',
                data : {city:city,sale_type:sale_type,budget:budget,property_type:property_type,field:field,val:val}
            }).done(function(data) {
              //console.log(data);
              $('#res').html(data);
          })
          .fail(function(err) {
              console.log(err.responseText);
          })
          .always(function() {
              console.log("complete");
          });
        });
        
    });
</script>
</html>
