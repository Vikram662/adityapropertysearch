<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_model extends CI_Model {

    
	public function get_all()
	{
		 return $this->db->order_by('update_date','desc')->get_where('property',['user_id'=>$this->session->userdata('id')])->result_array();
	}
	public function get_current_user()
    {
      $id = $this->session->userdata('id');
        return $this->db->get_where('users',['id'=>$id])->row();
    }
    public function get_user($id="")
    {
      
        return $this->db->get_where('users',['id'=>$id])->row();
    }

    public function get_state()
   	{
   		return $this->db->order_by('state_name','asc')->get('states')->result_array();
   	}

   	public function get_city($id)
   	{
   		return $this->db->order_by('city_name','asc')->get_where('city',['state_id'=>$id])->result_array();

   	}


   	public function get_loc($id)
   	{
   		return $this->db->order_by('area_name','asc')->get_where('locality',['city_id'=>$id])->result_array();
   		
   	}

   	public function add_porperty($data)
   	{
   		$this->db->insert('property', $data);
   		return $this->db->insert_id();
   	}

   	public function add_gallery($data)
   	{
   		$this->db->insert('property_gallery', $data);
   		return true;
   	}

   	public function update_detail($data,$id)
   	{
   		$this->db->where('id', $id)->update('property',$data);
   		return true;
   	}

 

    public function get_property_by_id($id='')
    {
      return $this->db->get_where('property',['id'=>$id])->row();
      
    }

    public function get_gallery_id($id='')
    {
      return $this->db->get_where('property_gallery',['property_id'=>$id])->result_array();
      
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

/* End of file Agent_model.php */
