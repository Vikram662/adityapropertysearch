<?php
defined('BASEPATH') OR  exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->auth->admin();
        
    }
    
    public function index()
    {   
        $data['view'] = 'admin/dashboard';
        $this->load->view('admin/layout', $data, FALSE);
    }
  
}

?>
 