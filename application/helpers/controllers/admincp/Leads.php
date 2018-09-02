<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //Do your magic here
          $this->load->library('auth');
        $this->auth->admin();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['view'] = 'admin/leads';
        $this->load->view('admin/layout', $data, FALSE);
        
    }

}

/* End of file Leads.php */
/* Location: ./application/controllers/admincp/Leads.php */