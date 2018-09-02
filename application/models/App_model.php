<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {

    public function get_all($limit,$offset)
    {
         if(@$this->session->userdata('city')){
            return $this->db->where('city',$this->session->userdata('city'))->order_by('update_date','desc')->get('property',$limit,$offset)->result_array();
         }else{
            return $this->db->order_by('update_date','desc')->get('property',$limit,$offset)->result_array();    
         }
    	
    }
    public function get_agent_all($limit,$offset,$id)
    {
        if(@$this->session->userdata('city')){
            return $this->db->where('city',$this->session->userdata('city'))->where('user_id',$id)->order_by('update_date','desc')->get('property',$limit,$offset)->result_array();
         }else{
            return $this->db->order_by('update_date','desc')->where('user_id',$id)->get('property',$limit,$offset)->result_array();    
         }
    }

    public function city_id($id)
    {
    	return $this->db->get_where('city', ['city_id'=>$id])->row();
    }

    public function state_id($id)
    {
    	return $this->db->get_where('states', ['state_id'=>$id])->row();
    }

    public function loc_id($id)
    {
    	return $this->db->get_where('locality', ['id'=>$id])->row();
    }

}

/* End of file App_model.php */
