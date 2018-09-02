<?php 
defined('BASEPATH') OR exit('No diredct script access allowed');

class Auth {
    
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->helper('url');
    }

    public function admin()
    {  
       if($this->CI->session->has_userdata('login') && $this->CI->session->userdata('role')=='Admin'){
           
       }else{
        return $this->UserRedirect($this->CI->session->userdata('role'));
       }
    }

    public function agent()
    {
        if($this->CI->session->has_userdata ('login') && ($this->CI->session->userdata('role')=='Agent' || $this->CI->session->userdata('access')=='Admin')){
          // $res =  $this->CI->db->get_where('users',['id'=>$this->CI->session->has_userdata ('id')])->row();

        }else{ 
            return $this->UserRedirect($this->CI->session->userdata('role'));
         }
    }

    public function UserRedirect($role)
    {
        if($role=='Admin'){
            redirect(base_url('admincp'),'refresh');
        }elseif($role=='Agent'){
            redirect(base_url('agent'),'refresh');
        }else{
            redirect('logout','refresh');
        }
    }
    public function CommonAuthChcek()
    {
        if($this->CI->session->has_userdata ('login')){
            return $this->UserRedirect($this->CI->session->userdata('role'));
        }
    }
    
}