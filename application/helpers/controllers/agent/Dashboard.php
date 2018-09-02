<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->agent();
        
    }
    
    public function index()
    {   
        $data['view'] = 'agent/dashboard';
        $this->load->view('agent/layout', $data, FALSE);
    }
    public function resend()
    {
        $user = $this->admin_model->get_current_user();
        $otp = mt_rand(000000,999999);
        $msg = "Verification code is ".$otp;
        $this->db->where('id',$user->id)->update('users',['otp'=>$otp]);
        $this->sms->sendsms($msg,$user->phone);
        $this->session->set_flashdata('msg', 'Otp Send Your Reister mobile no.');
        redirect(base_url('agent'),'refresh');
    }   
    public function verify()
    {
        $user = $this->admin_model->get_current_user();
        $otp = $this->input->post('otp');
        if($otp==$user->otp){
            $this->db->update('users', ['no_verify'=>1]);
            $this->session->set_flashdata('msg', 'Mobile No. Verified Successfully');
            redirect(base_url('agent'),'refresh');
        }else{
            $this->session->set_flashdata('err', 'OTP Not Match ! Please Enter correct OTP ');
            redirect(base_url('agent'),'refresh');
        }
    }
}

/* End of file Dashboard.php */
