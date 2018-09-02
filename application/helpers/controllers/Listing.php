<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('app_model');
	}
    public function index()
    {
    
        $data['view'] = 'app/listing';

         $this->load->library('pagination');
         $data['num']= $this->db->count_all_results('property');

	 	$config = [
	 		"base_url"			=> base_url('listing/index'),
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
 	 	$data['list'] = $this->app_model->get_all($config['per_page'], $this->uri->segment(3));

	 	$this->pagination->initialize($config);
        $this->load->view('layout', $data, FALSE);
        
    }
   	public function search()
   	{
   		
        $data['view'] = 'app/search';

         $this->load->library('pagination');
         $data['num']= $this->db->count_all_results('property');

	 	$config = [
	 		"base_url"			=> base_url('listing/index'),
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
 	 	$data['list'] = $this->app_model->get_all($config['per_page'], $this->uri->segment(3));

	 	$this->pagination->initialize($config);
        $this->load->view('layout', $data, FALSE);	
   	}

   	public function single($id='')
   	{
   			$data['view'] = 'app/single';
   			$this->load->view('layout', $data, FALSE);

   	}
   	public function enq($id='')
   	{
   		$post = $this->input->post();
   		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]',array('required'=>'Please Enter Name'));
   		$this->form_validation->set_rules('phone', 'Mobile No', 'trim|required|regex_match[/^[0-9]{10}$/]',array('regex_match'=>'Please Enter valid 10 digit no','required'=>'Please Enter Phone'));
   		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',array('required'=>'Please Enter Email '));
   		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
   		 if ($this->form_validation->run() == FALSE) {
          
            $data['view'] = 'app/single';
   			$this->load->view('layout', $data, FALSE);
        } else {
            $post['date'] = date('Y-m-d H:i:s');
            $post['otp'] = mt_rand(000000,999999);
            $post['verfy'] = 0;
         	$this->db->insert('enq', $post);
   			$otpid = $this->db->insert_id();
         	$this->session->set_flashdata('msg', 'One Time Password(OTP) Send Your Mobile No');
         	$this->session->set_userdata('otp_id',$otpid);
         	$msg = "Your Verification code Is ".$post['otp'];
         	$this->load->library('sms');
         	echo $this->sms->sendsms($msg,$post['phone']);
          	 redirect('listing/single/'.$id);
        }
   	}
   	public function verfy($id='')
   	{
   		$post = $this->input->post();
   		$this->form_validation->set_rules('otp', 'OTP', 'trim|required|min_length[3]',array('required'=>'Please Enter Otp'));
   		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
   		 if ($this->form_validation->run() == FALSE) {
          
            $data['view'] = 'app/single';
   			$this->load->view('layout', $data, FALSE);
        } else {
           $data = $this->db->get_where('enq',['id'=>$this->session->userdata('otp_id')])->row();
           if($data->otp==$post['otp']){
           		$this->db->where('id',$this->session->userdata('otp_id'))->update('enq',['verfy'=>1]);
           		$this->session->set_flashdata('msg', 'Query Succesfully Submitted');
	         	$this->session->unset_userdata('otp_id');
	            redirect('listing/single/'.$id);
           }else{
           		$this->session->set_flashdata('msg', 'OTP Not Match');
	            redirect('listing/single/'.$id);
           }
         	
        }
   	}

	public function test()
	{
		$this->load->view('test1');
	}
  public function send()
  {
          $post = $this->input->post();
       $post['date'] = date('Y-m-d H:i:s');
            $post['otp'] = mt_rand(000000,999999);
            $post['verfy'] = 0;
          $this->db->insert('enq', $post);
        $otpid = $this->db->insert_id();
          $this->session->set_flashdata('msg', 'One Time Password(OTP) Send Your Mobile No');
          $this->session->set_userdata('otp_id',$otpid);
          $msg = "Your Verification code Is ".$post['otp'];
          $this->load->library('sms');
          echo $this->sms->sendsms($msg,$post['phone']);
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