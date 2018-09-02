<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Load extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('admin_model');
		
	}

	 public function nice_number($num) {
        // first strip any formatting;
     //function call
			
			$ext="";//thousand,lac, crore
			$number_of_digits = $this->count_digit($num); //this is call :)
			    if($number_of_digits>3)
			{
			    if($number_of_digits%2!=0)
			        $divider=$this->divider($number_of_digits-1);
			    else
			        $divider=$this->divider($number_of_digits);
			}
			else
			    $divider=1;

			$fraction=$num/$divider;
			$fraction=number_format($fraction,2);
			if($number_of_digits==4 ||$number_of_digits==5)
			    $ext="K";
			if($number_of_digits==6 ||$number_of_digits==7)
			    $ext="Lac";
			if($number_of_digits==8 ||$number_of_digits==9)
			    $ext="Cr.";
			return $fraction." ".$ext;
    }

	  public function count_digit($number) {
		  return strlen($number);
		}

		public function divider($number_of_digits) {
		    $tens="1";

		  if($number_of_digits>8)
		    return 10000000;

		  while(($number_of_digits-1)>0)
		  {
		    $tens.="0";
		    $number_of_digits--;
		  }
		  return $tens;
		}



	public function index()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='index';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);

		if($post['budget']!=""){
  			$price = explode('-',$post['budget']);
  			unset($post['budget']);
  			$list = $this->db->where("price between '".$price[0]."' and '".$price[1]."'")->get_where('property',$post,$limit,$offset)->result_array();
  		}else{
  			unset($post['budget']);

  			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
  			// if($post['property_type']=='All Catagories')
  			// 	unset($post['property_type']);
  			// }
  			$list = $this->db->get_where('property',$post,$limit,$offset)->result_array();
  		} 
  		//echo $this->db->last_query();
		$this->html($list);
	}

	public function property_type()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='property_type';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['property_type']){
			$like = "";
			 $i = count($post['property_type']);
			 $j=1;
			foreach ($post['property_type'] as $pr) {
				if($i==$j){
					$like.="property_type like '%".$pr."%'";
				}else{
					$like.="property_type like '%".$pr."%' or ";
				}
				$j++;
			}
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			unset($post['property_type']);
			$res = $this->db->where($like)->get_where('property',$post,$limit,$offset)->result_array();
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		
		$this->html($res);
	}
	public function budget()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='budget';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		$post = $this->input->post();

		if(@$post['minprice']!=""){
			unset($post['offset']);
			if($post['maxprice']!=""){
				$res = $this->db->where("price between '".$post['minprice']."' and '".$post['maxprice']."' ")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']],$limit,$offset)->result_array();
			}else{
				
				$res = $this->db->where("price >= '".$post['minprice']."' ")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']],$limit,$offset)->result_array();
			}
		}else{
			unset($post['offset']);
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
  			
  				unset($post['minprice']);
  			
  				unset($post['maxprice']);
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function area()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='area';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['minarea']!=""){
			if($post['maxarea']!=""){
				$res = $this->db->where("area between '".$post['minarea']."' and '".$post['maxarea']."' ")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']],$limit,$offset)->result_array();
			}else{
				if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
				$res = $this->db->where("area >= '".$post['minarea']."' ")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']],$limit,$offset)->result_array();
			}
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
  			unset($post['minarea']);
  			unset($post['maxarea']);
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function test()
	{
		
		$tables = $this->db->list_tables();

foreach ($tables as $table)
{
        echo $table;
         echo "<br>";
}
	}
	public function bhk()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='bhk';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['bhk']!=""){
			$like = "(";
			 $i = count($post['bhk']);
			 $j=1;
			foreach ($post['bhk'] as $pr) {
				if($i==$j){
					$like.="bhk = '".$pr."' )";
				}else{
					$like.="bhk = '".$pr."' or ";
				}
				$j++;
			}
			$bhk = $post['bhk'][count($post['bhk'])-1];
			if($bhk>5){
				$like.=" or bhk >='".$bhk."'";
			}
			unset($post['bhk']);

			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->where($like)->get_where('property',$post,$limit,$offset)->result_array();
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}
	public function counstruction_status()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='counstruction_status';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['counstruction_status']!=""){
			$like = "(";
			 $i = count($post['counstruction_status']);
			 $j=1;
			foreach ($post['counstruction_status'] as $pr) {
				if($i==$j){
					$like.="counstruction_status = '".$pr."' )";
				}else{
					$like.="counstruction_status = '".$pr."' or ";
				}
				$j++;
			}
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
  			unset($post['counstruction_status']);
			$res = $this->db->where($like)->get_where('property',$post,$limit,$offset)->result_array();
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function property_condition()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='property_condition';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['property_condition']!=""){
			$like = "(";
			 $i = count($post['property_condition']);
			 $j=1;
			foreach ($post['property_condition'] as $pr) {
				if($i==$j){
					$like.="property_condtion = '".$pr."' )";
				}else{
					$like.="property_condtion = '".$pr."' or ";
				}
				$j++;
			}
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
  			unset($post['property_condition']);
			$res = $this->db->where($like)->get_where('property',$post,$limit,$offset)->result_array();
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function locality()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='locality';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['locality']!=""){
			$like = "(";
			 $i = count($post['locality']);
			 $j=1;
			foreach ($post['locality'] as $pr) {
				if($i==$j){
					$like.="locality = '".$pr."' )";
				}else{
					$like.="locality = '".$pr."' or ";
				}
				$j++;
			}
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
  			unset($post['locality']);
			$res = $this->db->where($like)->get_where('property',$post,$limit,$offset)->result_array();
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function posted_by()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='posted_by';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['posted_by']!=""){
			$like = "(";
			 $i = count($post['posted_by']);
			 $j=1;
			foreach ($post['posted_by'] as $pr) {
				if($i==$j){
					$like.="posted_by = '".$pr."' )";
				}else{
					$like.="posted_by = '".$pr."' or ";
				}
				$j++;
			}
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
  			unset($post['posted_by']);
			$res = $this->db->where($like)->get_where('property',$post,$limit,$offset)->result_array();
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function amenities()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='amenities';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['amenities']!=""){
			$like = "(";
			 $i = count($post['amenities']);
			 $j=1;
			foreach ($post['amenities'] as $pr) {
				if($i==$j){
					$like.="amenities = '".$pr."' )";
				}else{
					$like.="amenities = '".$pr."' or ";
				}
				$j++;
			}
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
  			unset($post['amenities']);
			$res = $this->db->where($like)->get_where('property',$post,$limit,$offset)->result_array();
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function furnish()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='furnish';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['furnish']!=""){
			$like = "(";
			 $i = count($post['furnish']);
			 $j=1;
			foreach ($post['furnish'] as $pr) {
				if($i==$j){
					$like.="furnish = '".$pr."' )";
				}else{
					$like.="furnish = '".$pr."' or ";
				}
				$j++;
			}
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
  			unset($post['furnish']);
			$res = $this->db->where($like)->get_where('property',$post,$limit,$offset)->result_array();
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function bathroom()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='bathroom';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['bathroom']!=""){
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function floor()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='floor';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['floor']!=""){
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			if($post['floor']=='Basement' or $post['floor']=="Ground"){
				$res = $this->db->get_where('property',$post)->result_array();
			}else{
				$fl = explode('-', $post['floor']);
				
	  			unset($post['floor']);
				$res = $this->db->where("floor between '".$fl[0]."' and '".$fl[1]."'")->get_where('property',$post,$limit,$offset)->result_array();
			}
			
			
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function facing()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='facing';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['facing']!=""){
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
				$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
			
			
		}else{
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}	

	public function recent()
	{
		$post = $this->input->post();
		if(@$post['e']){
			$post = $post['e'];
			$newpost = $post;
			unset($newpost['fname']);
		}else{
			$newpost = $post;
		}
		$post['fname'] ='recent';
		$this->session->set_userdata('post',$post);
		
		$offset = $post['offset'];
		$limit = 10;

		unset($post['offset']);
		unset($post['fname']);
		if(@$post['date']!=""){
			$date = $post['date'];
			unset($post['date']);
				$res = $this->db->where("update_date >= DATE_SUB(CURDATE(), INTERVAL ".$date.") ")->get_where('property',$post,$limit,$offset)->result_array();
			
			
		}else{
			unset($post['date']);
			if($post['city']=='All Cities'){
  				unset($post['city']);
  			}
  			if($post['property_type']=='All Catagories'){
  				unset($post['property_type']);
  			}
			$res = $this->db->get_where('property',$post,$limit,$offset)->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function next()
	{
            $all_post = $this->session->userdata('post');
            $fun = $all_post['fname'];
            $all_post['offset'] = $all_post['offset']+10;
           echo json_encode($all_post);
	}
	public function prev()
	{
            $all_post = $this->session->userdata('post');
            $fun = $all_post['fname'];
            if($all_post['offset']!=0){
            	  $all_post['offset'] = $all_post['offset']-10;
            }
           echo json_encode($all_post);
	}

	public function html($list='')
	{ 	//print_r($list);
		if($list){
				$city =  $this->app_model->city_id($list[0]['city'] );
		?> <div class="col-xs-12 col-md-12 col-xl-12 " >

			<h3><?=count($list).' '. $list[0]['property_type'] ?> for <?=$list[0]['sale_type']?> in <?=$city->city_name?></h3>

		</div>
		<?php
		  foreach ($list as $listing) {
                    ?>

                      <!-- Single Featured Property -->
                <div class="col-xs-12 col-md-12 col-xl-12 " >
                    <div class="single-featured-property mb-50 d-lg-flex" >
                        <!-- Property Thumbnail -->
                        <div class="property-thumb " >
                            <a href="<?=base_url('listing/single/'.$listing['id'])?>">
                                <img src="<?=base_url($listing['featured_image'])?>" class="img-responsive"  alt="<?=$listing['featured_image']?>">
                            </a>
                             <h4 class="h5-margin">₹&nbsp;<?=$this->nice_number($listing['price'])?>
                             <br><br>
                             	 <a href="<?=base_url('listing/single/'.$listing['id'])?>" class="display-sm">
                            	 <p class="location"  ><img src="<?=base_url('assets/')?>img/icons/location.png" class="" alt="">
                                <?php 
                                   $city =  $this->app_model->city_id($listing['city']);
                                   $loc = $this->app_model->loc_id($listing['locality']);
                                  // print_r($loc);
                                ?><?=$loc->area_name?>, <?=$city->city_name?>
                            </p>
                             </h4>	
								
                        <!--  <div class="tag">
                                <span>Show more photo</span>
                            </div>
                             -->
                        </div>
                        <!-- Property Content -->
                        <div class="property-content ">
                            <div class="d-lg-flex">
                            	 <a href="<?=base_url('listing/single/'.$listing['id'])?> " class="display-md">
                            	 <p class="location"  ><img src="<?=base_url('assets/')?>img/icons/location.png" class="" alt="">
                                <?php 
                                   $city =  $this->app_model->city_id($listing['city']);
                                   $loc = $this->app_model->loc_id($listing['locality']);
                                  // print_r($loc);
                                ?><?=$loc->area_name?>, <?=$city->city_name?> 
                            </p>
                        </a>
                                <!--  <a href="<?=base_url('listing/single/'.$listing['id'])?>">
                                    <h5><?=substr($listing['name'],0,20)?>...</h5>
                                </a>
                                 -->
                                
                            </div>
                           
                            <p style="margin-bottom: 0px"><?=substr($listing['short_des'],0,80);?>....</p>
                            <div class="property-meta-data d-flex align-items-end display-md  justify-content-between">
                                <div class="new-tag">
                                    <label for="">Area</label><br>
                                  <span><?=$listing['area']?> Sq.</span>
                                </div>
                                <?php if($listing['c_area']) {?>
								 <div class="new-tag">
                                    <label for="">Carpet Area</label><br>
                                  <span><?=$listing['c_area']?> Sq.</span>
                                </div>
                            <?php }
                             if($listing['sale_type']!='Commercial'){
                             ?>
                                 <div class="space">
                                 <label for="">BHK</label><br>
                                  <span><?=$listing['bhk']?></span>
                                </div>
							<?php } ?>
                                 <div class="space">
                                 <label for="">Bathroom</label><br>
                                  <span><?=$listing['bathroom']?></span>
                                </div>
                                <?php if($listing['sale_type']=='Buy'){ ?>
                                <div class="bathroom">
                                     <label for="">Transaction</label><br>
                                  <span><?=$listing['property_condtion']?></span>
                                </div>
                            <?php }elseif ($listing['sale_type']=='Rent') {
                            	?>
									 <div class="bathroom">
                                     <label for="">Tenants Preferred</label><br>
                                  <span><?=$listing['tenants_condtion']?></span>
                                </div>
                            	<?php
                            } ?>
                                 <div class="bathroom">
                                     <label for="">Posted By</label><br>
                                  <span><?=$listing['posted_by']?></span>
                                </div>
                                <!-- <div class="garage">
                                <label for="">Posted On</label><br>
                                  <span><?=date('d-M-y',strtotime($listing['create_date']))?></span>
                                </div> -->
                                
                            </div>
                          <ul class="tag-ul display-sm">
							   <li>
							      <div class="new-tag">
							         <label for="">Area</label><br>
							         <span><?=$listing['area']?> Sq.</span>
							      </div>
							   </li>
							    <?php if($listing['c_area']) {?>
							   <li>
							     
							      <div class="new-tag">
							         <label for="">Carpet Area</label><br>
							         <span><?=$listing['c_area']?> Sq.</span>
							      </div>
							    
							   </li>
								  <?php }   if($listing['sale_type']!='Commercial'){ ?>
							   <li>
							      <div class="space">
							         <label for="">BHK</label><br>
							         <span><?=$listing['bhk']?></span>
							      </div>
							   </li>
							<?php } ?>
							   </ul>
							 <ul  class="tag-ul display-sm">
							   <li>
							      <div class="space">
							         <label for="">Bathroom</label><br>
							         <span><?=$listing['bathroom']?></span>
							      </div>
							   </li>
							     <?php if($listing['sale_type']=='Buy'){ ?>
							     	  <li>
							      <div class="bathroom">
							         <label for="">Transaction</label><br>
							         <span><?=$listing['property_condtion']?></span>
							      </div>
							   </li>
							     <?php }elseif ($listing['sale_type']=='Rent') {
							     	?>
									 <div class="bathroom">
                                     <label for="">Tenants Preferred</label><br>
                                  <span><?=$listing['tenants_condtion']?></span>
                                </div>
							     	<?php
							     } ?>
							 
							   <li>
							      <div class="bathroom">
							         <label for="">Posted By</label><br>
							         <span><?=$listing['posted_by']?></span>
							      </div>
							   </li>
							</ul>
                              <div style="margin-top: 15px;margin-bottom: 15px;display: flex;">
                                <a href="#" style="padding: 0px" class="btn south-btn m-1 south-red" data-action="<?=base_url('listing/enq/'.@$listing['id'])?>" data-toggle="modal" data-target="#myModal" >Contact Agent</a>      
                                <a href="<?=base_url('listing/single/'.$listing['id'])?>" class="btn south-btn m-1 south-green">View Detail</a>
                              </div>
                            
                        </div>
                    </div>
                </div>
                     
                <?php
                   }
		}else{
			?>
				<div class="col-xs-12 col-md-9 col-xl-9" >

			<h3>Sorry We Can't find Any property For you</h3>

		</div>
			<?php
		}
	
	}
	  
	 public  function __destruct(){

       
         $this->session->unset_userdata('post');
    }
}

/* End of file Load.php */
/* Location: ./application/controllers/Load.php */