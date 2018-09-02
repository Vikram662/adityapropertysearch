<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('auth');
        $this->auth->admin();
        
    }

	public function index()
	{
		 $data['view'] = 'admin/user';
        $this->load->view('admin/layout', $data, FALSE);
	}
	public function status($st='',$id="")
	{
		$q =$this->db->where('id', $id)->update('users',['status'=>$st]);
		if($q){
			$this->session->set_flashdata('msg', 'Agent Status Change');
			redirect(base_url('admincp/user'),'refresh');
			}else{
				$this->session->set_flashdata('err', 'Serror Error');
			redirect(base_url('admincp/user'),'refresh');
			}
	}
	public function login($id="")
	{
		$this->start_session($id);
		redirect('agent/dashboard','refresh');
	}

	public function start_session($id="")
    {
         $user = $this->login_model->get_user($id);
        
        $userdata = array(
            'id'=>$user->id,
            'role'=>$user->role,
            'access'=>'Admin',
            'admin_id'=>$this->session->userdata('id'),
            'login'=>TRUE
        );  
        $this->session->set_userdata($userdata);
    }

}

/* End of file User.php */
/* Location: ./application/controllers/admincp/User.php */