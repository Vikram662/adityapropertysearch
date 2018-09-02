<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
      
        $this->auth->CommonAuthChcek();
        $this->load->model('login_model');
    }
    

    public function index()
    {
        $this->load->view('login');
    }
    public function mail()
    {
        
        $msg = $this->load->view('template/reset_password','',TRUE);
        $this->sendmail->send();
    }

    public function start_session($id="")
    {
         $user = $this->login_model->get_user($id);

        $userdata = array(
            'id'=>$user->id,
            'role'=>$user->role,
            'login'=>TRUE
        );  
        $this->session->set_userdata($userdata);
    }

    public function chcek()
    {
        $postData  = $this->input->post();
        $Userid = $this->login_model->chcek_user($postData);
        if($Userid){
            $this->start_session($Userid);  
            echo json_encode(array('success'=>TRUE,'res'=>array('mag'=>'You have been successfully logged in.You Will Be Redirect Soon')));  
        }else{
            echo json_encode(array('success'=>FALSE,'res'=>array('mag'=>'You have Entered Wrong Email Or Password.')));
        }
        

    }  
    
    public function signup()
    {
        $postData = $this->input->post();
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Mobile No', 'trim|required|regex_match[/^[0-9]{10}$/]',array('regex_match'=>'Please Enter valid 10 digit no'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]',array('is_unique'=>'Email Already registered'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
        unset($postData['cpassword']);
        if ($this->form_validation->run() == FALSE) {
          
              echo json_encode(array('success'=>FALSE,'res'=>$this->form_validation->error_array()));
        } else {
            $postData['created_date'] = date('Y-m-d H:i:s');
            $postData['role'] = 'Agent';
            $Userid =$this->login_model->signup($postData);
            $this->start_session($Userid);
            echo json_encode(array('success'=>TRUE,'res'=>array('mag'=>'You have been successfully registered and logged in.')));
        }
        
    }
    public function forget()
    {
        $this->load->view('forget');
    }

    public function reset()
    {
        $email = $this->input->post('email');
        $this->login_model->get_user_email($email);
        
    }

}

/* End of file Login.php */
