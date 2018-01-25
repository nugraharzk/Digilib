<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_balai extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->table = 'balai';
	}


	public function get_all()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$res = $this->db->get();
		return $res->result();
	}

	public function get_all_balai($offset,$perpage)
	{
		//ambil semua koleksi berdasarkan offset untuk paging

		$this->db->select('*');
		$this->db->from('balai');
		$this->db->offset($offset);
		$this->db->limit($perpage);

		$balai = $this->db->get();

		return $balai->result();
	}

	public function get_jumlah_records()
	{
		//hitung jumlah semua records
		return $this->db->count_all('balai');
	}

	public function insert_balai($post)
	{
		//input data 
		$q = $this->db->insert($this->table, $post);
		return $q;

	}

	public function get_balai($id = null)
	{
		$this->db->select('*');
		$this->db->from('balai');
		$this->db->where('id',$id);

		$res = $this->db->get();
		//ambil satu row
		return $res->row();

	}

	public function update_balai($post,$id)
	{
		//update where id 
		$this->db->where('id',$id);
		$this->db->update('balai',$post);
	
	}

	public function delete_balai($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('balai');
	}
	

}

/* End of file M_balai.php */
/* Location: ./application/models/M_balai.php */