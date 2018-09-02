<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Contact extends CI_Controller{
    public function index()
    {
        $data['view'] = 'app/contact';
        $this->load->view('layout', $data, FALSE);
        
    }
    public function get()
    {
    	# code...
    	$ip = $_SERVER['REMOTE_ADDR'];
		echo $details = file_get_contents("https://ipinfo.io/$ip?token=684a31561ae3c2");
		// -> "Mountain View"
    }
}

?>