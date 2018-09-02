<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Contact extends CI_Controller{
    public function index()
    {
        $data['view'] = 'app/contact';
        $this->load->view('layout', $data, FALSE);
        
    }
}
?>