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
		if($post['budget']!=""){
  			$price = explode('-',$post['budget']);
  			unset($post['budget']);
  			$list = $this->db->where("price between '".$price[0]."' and '".$price[1]."'")->get_where('property',$post)->result_array();
  		}else{
  			unset($post['budget']);
  				$list = $this->db->get_where('property')->result_array();
  		} 
		$this->html($list);
	}

	public function property_type()
	{
		$post = $this->input->post();
		
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
			
			$res = $this->db->where($like)->get_where('property',['city'=>$post['city']])->result_array();
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city']])->result_array();
		}
		
		$this->html($res);
	}
	public function budget()
	{
		$post = $this->input->post();

		if(@$post['minprice']!=""){
			if($post['maxprice']!=""){
				$res = $this->db->where("price between '".$post['minprice']."' and '".$post['maxprice']."' ")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
			}else{
				
				$res = $this->db->where("price >= '".$post['minprice']."' ")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
			}
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function area()
	{
		$post = $this->input->post();

		if(@$post['minarea']!=""){
			if($post['maxarea']!=""){
				$res = $this->db->where("area between '".$post['minarea']."' and '".$post['maxarea']."' ")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
			}else{
				
				$res = $this->db->where("area >= '".$post['minarea']."' ")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
			}
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function test()
	{
		$post = $this->input->post();
		echo "<pre>";
		print_r($post);
	}
	public function bhk()
	{
		$post = $this->input->post();
		
		if(@$post['bhk']!=""){
			$like = "";
			 $i = count($post['bhk']);
			 $j=1;
			foreach ($post['bhk'] as $pr) {
				if($i==$j){
					$like.="bhk = '".$pr."'";
				}else{
					$like.="bhk = '".$pr."' or ";
				}
				$j++;
			}
			$bhk = $post['bhk'][count($post['bhk'])-1];
			if($bhk>5){
				$like.=" or bhk >='".$bhk."'";
			}
			$res = $this->db->where($like)->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}
	public function counstruction_status()
	{
		$post = $this->input->post();
		
		if(@$post['counstruction_status']!=""){
			$like = "";
			 $i = count($post['counstruction_status']);
			 $j=1;
			foreach ($post['counstruction_status'] as $pr) {
				if($i==$j){
					$like.="counstruction_status = '".$pr."'";
				}else{
					$like.="counstruction_status = '".$pr."' or ";
				}
				$j++;
			}
			$res = $this->db->where($like)->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function property_condition()
	{
		$post = $this->input->post();
		
		if(@$post['property_condition']!=""){
			$like = "";
			 $i = count($post['property_condition']);
			 $j=1;
			foreach ($post['property_condition'] as $pr) {
				if($i==$j){
					$like.="property_condtion = '".$pr."'";
				}else{
					$like.="property_condtion = '".$pr."' or ";
				}
				$j++;
			}
			$res = $this->db->where($like)->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function locality()
	{
		$post = $this->input->post();
		
		if(@$post['locality']!=""){
			$like = "";
			 $i = count($post['locality']);
			 $j=1;
			foreach ($post['locality'] as $pr) {
				if($i==$j){
					$like.="locality = '".$pr."'";
				}else{
					$like.="locality = '".$pr."' or ";
				}
				$j++;
			}
			$res = $this->db->where($like)->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function posted_by()
	{
		$post = $this->input->post();
		
		if(@$post['posted_by']!=""){
			$like = "";
			 $i = count($post['posted_by']);
			 $j=1;
			foreach ($post['posted_by'] as $pr) {
				if($i==$j){
					$like.="posted_by = '".$pr."'";
				}else{
					$like.="posted_by = '".$pr."' or ";
				}
				$j++;
			}
			$res = $this->db->where($like)->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function amenities()
	{
		$post = $this->input->post();
		
		if(@$post['amenities']!=""){
			$like = "";
			 $i = count($post['amenities']);
			 $j=1;
			foreach ($post['amenities'] as $pr) {
				if($i==$j){
					$like.="amenities = '".$pr."'";
				}else{
					$like.="amenities = '".$pr."' or ";
				}
				$j++;
			}
			$res = $this->db->where($like)->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function furnish()
	{
		$post = $this->input->post();
		
		if(@$post['furnish']!=""){
			$like = "";
			 $i = count($post['furnish']);
			 $j=1;
			foreach ($post['furnish'] as $pr) {
				if($i==$j){
					$like.="furnish = '".$pr."'";
				}else{
					$like.="furnish = '".$pr."' or ";
				}
				$j++;
			}
			$res = $this->db->where($like)->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		echo $this->db->last_query();
		$this->html($res);
	}

	public function bathroom()
	{
		$post = $this->input->post();
		
		if(@$post['bathroom']!=""){
			
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type'],'bathroom'=>$post['bathroom']])->result_array();
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function floor()
	{
		$post = $this->input->post();
		
		if(@$post['floor']!=""){
			if($post['floor']=='Basement' or $post['floor']=="Ground"){
				$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type'],'floor'=>$post['floor']])->result_array();
			}else{
				$fl = explode('-', $post['floor']);
				$res = $this->db->where("floor between '".$fl[0]."' and '".$fl[1]."'")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
			}
			
			
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}

	public function facing()
	{
		$post = $this->input->post();
		
		if(@$post['facing']!=""){
				$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type'],'facing'=>$post['facing']])->result_array();
			
			
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}	

	public function recent()
	{
		$post = $this->input->post();
		
		if(@$post['date']!=""){
				$res = $this->db->where("update_date >= DATE_SUB(CURDATE(), INTERVAL ".$post['date'].") ")->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
			
			
		}else{
			$res = $this->db->get_where('property',['city'=>$post['city'],'property_type'=>$post['property_type']])->result_array();
		}
		//echo $this->db->last_query();
		$this->html($res);
	}


	public function html($list='')
	{ 	//print_r($list);
		if($list){
				$city =  $this->app_model->city_id($list[0]['city'] );
		?> <div class="col-xs-12 col-md-9 col-xl-9" >

			<h3><?=count($list).' '. $list[0]['property_type'] ?> for <?=$list[0]['sale_type']?> in <?=$city->city_name?></h3>

		</div>
		<?php
		  foreach ($list as $listing) {
                    ?>
                      <!-- Single Featured Property -->
                <div class="col-xs-12 col-md-9 col-xl-9" >
                    <div class="single-featured-property mb-50 d-lg-flex" >
                        <!-- Property Thumbnail -->
                        <div class="property-thumb " >
                            <a href="<?=base_url('listing/single/'.$listing['id'])?>">
                                <img src="<?=base_url($listing['featured_image'])?>" class="img-responsive"  alt="<?=$listing['featured_image']?>">
                            </a>
                         <div class="tag">
                                <span>Show more photo</span>
                            </div>
                            
                        </div>
                        <!-- Property Content -->
                        <div class="property-content ">
                            <div class="d-lg-flex">
                                 <a href="<?=base_url('listing/single/'.$listing['id'])?>">
                                    <h5><?=substr($listing['name'],0,20)?>...</h5>
                                </a>
                                 <h4 class="h5-margin">₹&nbsp;<?=$this->nice_number($listing['price'])?></h4>

                                
                            </div>
                            <p class="location"  ><img src="<?=base_url('assets/')?>img/icons/location.png" class="" alt="">
                                <?php 
                                   $city =  $this->app_model->city_id($listing['city']);
                                   $state = $this->app_model->state_id($listing['state']);
                                   $loc = $this->app_model->loc_id($listing['locality']);
                                  // print_r($loc);
                                ?><?=$loc->area_name?>, <?=$city->city_name?>, <?=$state->state_name?> 
                            </p>
                            <p style="margin-bottom: 0px"><?=substr($listing['short_des'],0,65);?>....</p>
                            <div class="property-meta-data d-flex align-items-end  justify-content-between">
                                <div class="new-tag">
                                    <label for="">Area</label><br>
                                  <span><?=$listing['area']?> Sq.</span>
                                </div>
                                 <div class="space">
                                 <label for="">BHK</label><br>
                                  <span><?=$listing['bhk']?></span>
                                </div>
                                 <div class="space">
                                 <label for="">Bathroom</label><br>
                                  <span><?=$listing['bathroom']?></span>
                                </div>
                                <div class="bathroom">
                                     <label for="">Condition</label><br>
                                  <span><?=$listing['property_condtion']?></span>
                                </div>
                                 <div class="bathroom">
                                     <label for="">Posted By</label><br>
                                  <span><?=$listing['posted_by']?></span>
                                </div>
                                <div class="garage">
                                <label for="">Posted On</label><br>
                                  <span><?=date('d-M-y',strtotime($listing['create_date']))?></span>
                                </div>
                            </div>
                              <div style="margin-top: 15px;margin-bottom: 15px;display: flex;">
                                <a href="#" style="padding: 0px" class="btn south-btn m-1 south-red" data-action="<?=base_url('listing/enq/'.@$listing['id'])?>" data-toggle="modal" data-target="#myModal" >Contact Agent</a>      
                                <a href="<?=base_url('listing/single/'.$listing['id'])?>" class="btn south-btn m-1 south-green">View Detail</a>
                              </div>
                            
                        </div>
                    </div>
                </div>

                 <?php 
$gallery =   $this->admin_model->get_gallery_id($listing['id']);
                 foreach ($gallery as $image) {
                          ?>
                      <!--  <div class="col-md-55">
                        <div class="">
                          <div class="image view view-first">
                            <span class="notify-badge"></span>
                            <img style="width: 200px;height: 150px" src="<?=base_url().$image['image']?>" alt="image">
                            <div class="mask no-caption">
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                        <?php
                        } ?>
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
}

/* End of file Load.php */
/* Location: ./application/controllers/Load.php */