<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('auth');
         $this->auth->agent();
	}

    public function index()
    {
        $data['view'] = 'agent/profile';
        $this->load->view('agent/layout', $data, FALSE);
        
    }
    public function update($id="")
    {
        $data = $this->input->post();
        $data['password']= $this->encryption->encrypt( $data['password']);
       $q=  $this->db->where('id',$id)->update('users', $data);
       if($q){
            $this->session->set_flashdata('msg', 'Profile Update');
       }else{
             $this->session->set_flashdata('err', 'error in submission');
       }
       
        redirect(base_url('agent/profile'),'refresh');
    }

}

/* End of file Profile.php */
