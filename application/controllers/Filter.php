<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	public function index()
	{
		
	}

	public function buy()
	{
		$array = array(
			'city' => $this->input->get('city')
		);
		if($this->input->get('city')!="All"){
			$this->session->set_userdata( $array );
		}
		$this->load->view('app/list');
	}
	public function sale()
	{
		$array = array(
			'city' => $this->input->get('city')
		);
		if($this->input->get('city')!="All"){
			$this->session->set_userdata( $array );
		}
		$this->load->view('app/list');
	}
	public function rent()
	{
		$array = array(
			'city' => $this->input->get('city')
		);
		if($this->input->get('city')!="All"){
			$this->session->set_userdata( $array );
		}
		$this->load->view('app/list');
	}
	public function commercial()
	{
		$array = array(
			'city' => $this->input->get('city')
		);
		if($this->input->get('city')!="All"){
			$this->session->set_userdata( $array );
		}
		$this->load->view('app/commercial');
	}
}

/* End of file Filter.php */
/* Location: ./application/controllers/Filter.php */