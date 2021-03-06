<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Builder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('app_model');
	}

	public function index($id="")
	{
		 $id;
		$data['view'] = 'app/agent-profile';
		    $this->load->library('pagination');
         $data['num']= $this->db->where('user_id',$id)->count_all_results('property');

	 	$config = [
	 		"base_url"			=> base_url('agent-profile/'.$id),
	 		"per_page"			=> 10,
	 		"total_rows"		=> $data['num'],
	 		"full_tag_open"		=> "<ul class='pagination'>",
	 		"full_tag_close"	=> "</ul>",
	 		"next_tag_open"		=> "<li class='page-item'>",
	 		"next_tag_close"	=> "<li>",
	 		"prev_tag_open"		=> "<li class='page-item'>",
	 		"prev_tag_close"	=> "<li>",
	 		"num_tag_open"		=> "<li class='page-item'>",
	 		"num_tag_close"		=> "<li>",
	 		"first_tag_open"	=> "<li>",
	 		"first_tag_close"	=> "</li>",
	 		"cur_tag_open"		=> "<li class='page-item active'><a>",
	 		"cur_tag_close"		=> "</a><li>",
 	 	];
 	 	$config['prev_link']='<i class="fa fa-arrow-left "></i>';
 	 	$config['next_link']='<i class="fa fa-arrow-right "></i>';
 	 	$data['list'] = $this->app_model->get_agent_all($config['per_page'], $this->uri->segment(3),$id);

	 	$this->pagination->initialize($config);
		$this->load->view('layout', $data, FALSE);
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
          $ext="Cr";
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
}

/* End of file Builder.php */
/* Location: ./application/controllers/Builder.php */