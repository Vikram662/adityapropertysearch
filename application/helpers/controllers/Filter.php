<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	public function index()
	{
		
	}

	public function buy()
	{
		$this->load->view('app/list');
	}
	public function sale()
	{
		
	$this->load->view('app/list');
	}
	public function rent()
	{
		
		$this->load->view('app/list');
	}
	public function commercial()
	{
		
		$this->load->view('app/commercial');
	}
}

/* End of file Filter.php */
/* Location: ./application/controllers/Filter.php */