<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function city()
	{
		 $stat_id = $this->input->post('val');
		
		 	?>
			<option value="">Choose option</option>
                            <?php 
                                $cities = $this->admin_model->get_city($stat_id);
                                foreach ($cities as $city) { 
                                  ?>
                                      <option value="<?=$city['city_id']?>"><?=$city['city_name']?></option>
                                  <?php
                                }
                            ?>
                        
		 	<?php
		 
  	}
  	public function loc()
	{
		 $city_id = $this->input->post('val');
		
		 	?>
			
                            <option value="">Choose option</option>
                            <?php 
                                $localities = $this->admin_model->get_loc($city_id);
                                foreach ($localities as $locality) { 
                                  ?>
                                      <option value="<?=$locality['id']?>"><?=$locality['area_name']?></option>
                                  <?php
                                }
                            ?>
                       
		 	<?php
		 
  	}

  	public function get_all_list()
  	{
  		$post = $this->input->post();
  	
  		if($post['budget']!=""){
  			$price = explode('-',$post['budget']);
  			unset($post['budget']);
  			$res = $this->db->where("price between '".$price[0]."' and '".$price[1]."'")->get_where('property',$post)->result_array();
  		}else{
  			unset($post['budget']);
  			$res = $this->db->get_where('property',$post)->result_array();
  		}
  		
  		
  		foreach ($res as $data) {
  			$city = $this->db->get_where('city',['city_id'=>$data['city']])->row();
  			$loc = $this->db->get_where('locality',['id'=>$data['locality']])->row();
  			?>

			<div class="col-lg-12">
                            <form id="login-form" method="post">
                                    <div class="col-xs-12 col-md-12 w3-hover-shadow" style="padding-top:2%;">
                                        <div class="well well-sm">
                                            <div class="row">
                                               <div class="col-xs-12 col-md-4">
                                                    <div class="row rating-desc">
                                                        
                                                            <img src="<?=base_url('')?><?=$data['featured_image']?>" class="img-thumbnail list" alt="Cinque Terre" style="height: 264px;margin-left: 12px" />
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-8 ">

                                                    <h4><b><?=$data['name']?></b> </h4>
                                                    <div>

                                                       <table cellpadding="0" cellpadding="0">
                                                        <tr>
                                                          <th width="30%%"> <p style="color:#A6ACAF; font-size:100%; float:left;">for <?=$data['sale_type']?> in <?=$city->city_name?></p></th>
                                                          <td width="70%"> <p style="font-size:100%;"><a href="#" style=" margin-left:5%;"><u>Map</u></a></p></td>
                                                        </tr>
                                                        <tr>
                                                          <th>  <p style="color:#A6ACAF; font-size:100%; float:left; margin-right:3%;">Short Description</p></th>
                                                          <td> <p style="font-size:100%;"><?=$data['short_des']?></p></td>
                                                        </tr>
                                                        <tr>
                                                          <th>  <p style="color:#A6ACAF; font-size:100%; float:left; margin-right:3%;">Tags</p></th>
                                                          <td>  <p style="font-size:100%;">
                                                          <?=$data['keyword']?></p></td>
                                                        </tr>
                                                      
                                                        <tr>
                                                          <th> <p style="color:#A6ACAF; font-size:100%; float:left; margin-right:3%;">locality</p></th>
                                                          <td> <p style="font-size:100%;">
                                                          <?=$loc->area_name?></p></td>
                                                        </tr>
                                                       
                                                      </table> 
                                                      <div class="col-xs-12 col-md-12 text-left">
                                                        <div  class="col-xs-3 col-md-3">
                                                             <b style="font-size:110%;">Rs.<?=$data['price']?>/-</b>
                                                            <p style="font-size:100%; margin-top:5%;"><?=$data['area']?> Sq. Ft </p>
                                                           
                                                        </div>
                                                        <div  class="col-xs-4 col-md-4">
                                                            <p style="font-size:100%; margin-top:5%;"><strong>Posted On</strong> <?=date('d F Y',strtotime($data['create_date']))?></p>
                                                        </div>

                                                     <div  class="col-xs-5 col-md-5">
                                                              <a href="<?=base_url('listing/single/'.$data['id'])?>" style="color:#FF0000;" class="btn btn-default"><center>View Detail</center></a>
                                                        <button type="button" style="color:#FFFFFF;" class="btn btn-danger"><center>Contact </center></button>
                                                        </div>                                                         
                                                     </div>
                                                            
                                                    </div>
                                                   
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </form>
                             </div>
  			<?php
  		}
  	}

  	public function filter()
  	{
  		$post = $this->input->post();

  		$post[$post['field']] = $post['val'];
      if($post['field']=='area'){
            if($post['budget']!=""){
            $price = explode('-',$post['budget']);
            $area = explode('-', $post['area']);
            unset($post['area']);
            unset($post['budget']);
            unset($post['field']);
            unset($post['val']);
           if($area[0]!=""){
            $res = $this->db->where("price between '".$price[0]."' and '".$price[1]."' and area between '".$area[0]."' and '".$area[1]."'")->get_where('property',$post)->result_array();
          }else{
            $res = $this->db->where("price between '".$price[0]."' and '".$price[1]."'")->get_where('property',$post)->result_array();
          }
            
          }else{
            unset($post['budget']);
            unset($post['field']);
            unset($post['val']);
            $res = $this->db->get_where('property',$post)->result_array();
          }
      }elseif ($post['field']=='update_date') {
          if($post['budget']!=""){
           
            $price = explode('-',$post['budget']);
            unset($post['budget']);
            unset($post['field']);
            unset($post['val']);
            if($post['update_date']=='all'){
               unset($post['update_date']);
               $res = $this->db->where("price between '".$price[0]."' and '".$price[1]."'")->get_where('property',$post)->result_array();
            }else{
              $date = $post['update_date'];
               unset($post['update_date']);
               $res = $this->db->where("price between '".$price[0]."' and '".$price[1]."' and `create_date` >= DATE_SUB(CURDATE(), INTERVAL ".$date.")")->get_where('property',$post)->result_array(); 
            }
              
          }else{
            unset($post['budget']);
            unset($post['field']);
            unset($post['val']);
            $res = $this->db->get_where('property',$post)->result_array();
          }
      }else{
          if($post['budget']!=""){
            $price = explode('-',$post['budget']);
            unset($post['budget']);
            unset($post['field']);
            unset($post['val']);
            $res = $this->db->where("price between '".$price[0]."' and '".$price[1]."'")->get_where('property',$post)->result_array();
          }else{
            unset($post['budget']);
            unset($post['field']);
            unset($post['val']);
            $res = $this->db->get_where('property',$post)->result_array();
          }
      }
  	
  		// echo  $this->db->last_query();
  		// exit();
  		if($res){
  		
  		foreach ($res as $data) {
  			$city = $this->db->get_where('city',['city_id'=>$data['city']])->row();
  			$loc = $this->db->get_where('locality',['id'=>$data['locality']])->row();
  			?>
		  <div class="col-lg-12">
                            <form id="login-form" method="post">
                                    <div class="col-xs-12 col-md-12 w3-hover-shadow" style="padding-top:2%;">
                                        <div class="well well-sm">
                                            <div class="row">
                                               <div class="col-xs-12 col-md-4">
                                                    <div class="row rating-desc">
                                                        
                                                            <img src="<?=base_url('')?><?=$data['featured_image']?>" class="img-thumbnail list" alt="Cinque Terre" style="height: 264px;margin-left: 12px" />
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-8 ">

                                                    <h4><b><?=$data['name']?></b> </h4>
                                                    <div>

                                                       <table cellpadding="0" cellpadding="0">
                                                        <tr>
                                                          <th width="30%%"> <p style="color:#A6ACAF; font-size:100%; float:left;">for <?=$data['sale_type']?> in <?=$city->city_name?></p></th>
                                                          <td width="70%"> <p style="font-size:100%;"><a href="#" style=" margin-left:5%;"><u>Map</u></a></p></td>
                                                        </tr>
                                                        <tr>
                                                          <th>  <p style="color:#A6ACAF; font-size:100%; float:left; margin-right:3%;">Short Description</p></th>
                                                          <td> <p style="font-size:100%;"><?=$data['short_des']?></p></td>
                                                        </tr>
                                                        <tr>
                                                          <th>  <p style="color:#A6ACAF; font-size:100%; float:left; margin-right:3%;">Tags</p></th>
                                                          <td>  <p style="font-size:100%;">
                                                          <?=$data['keyword']?></p></td>
                                                        </tr>
                                                      
                                                        <tr>
                                                          <th> <p style="color:#A6ACAF; font-size:100%; float:left; margin-right:3%;">locality</p></th>
                                                          <td> <p style="font-size:100%;">
                                                          <?=$loc->area_name?></p></td>
                                                        </tr>
                                                       
                                                      </table> 
                                                      <div class="col-xs-12 col-md-12 text-left">
                                                        <div  class="col-xs-3 col-md-3">
                                                             <b style="font-size:110%;">Rs.<?=$data['price']?>/-</b>
                                                            <p style="font-size:100%; margin-top:5%;"><?=$data['area']?> Sq. Ft </p>
                                                           
                                                        </div>
                                                        <div  class="col-xs-4 col-md-4">
                                                            <p style="font-size:100%; margin-top:5%;"><strong>Posted On</strong> <?=date('d F Y',strtotime($data['create_date']))?></p>
                                                        </div>

                                                     <div  class="col-xs-5 col-md-5">
                                                              <a href="<?=base_url('listing/single/'.$data['id'])?>" style="color:#FF0000;" class="btn btn-default"><center>View Detail</center></a>
                                                        <button type="button" style="color:#FFFFFF;" class="btn btn-danger"><center>Contact </center></button>
                                                        </div>                                                         
                                                     </div>
                                                            
                                                    </div>
                                                   
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </form>
                             </div>
				  			<?php
					  		}
					  	}else{
					  		?>
					  		<div class="col-lg-12">
					  			<div class="col-xs-12 col-md-12 w3-hover-shadow" style="padding-top:2%;">
					                <div class="well well-sm">
					                    <div class="row">
					                        <div class="col-xs-12 col-md-6 ">
					                        	<h3>No Result Found</h3>
					                        </div>
					                    </div>
					                </div>
					              </div>
					  			</div>
					  		<?php
					  		
					  	}
  	}

}

/* End of file Ajxa.php */
/* Location: ./application/controllers/admincp/Ajxa.php */