<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Model
{
	
	public function add_product($data)
	{
		$this->db->insert('store_items', $data);
	}
	public function get_all()
	{
		$query = $this->db->get('store_items');
		return $this->db->get('store_items')->result_array();
	}
	public function remove_item($id)
	{
		$this->db->delete('store_items', array('id' => $id));
	}
	public function edit_item($id){
		$query = "SELECT * FROM store_items WHERE id = ?";
		return $this->db->query($query, $id)->result_array();
	}
	public function update_item($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('store_items', $data); 
		redirect("/");
	}

	public function show_item($id)
	{
		$query = "SELECT * FROM store_items WHERE id = ?";
		return $this->db->query($query, $id)->result_array();
	}
}


 ?>