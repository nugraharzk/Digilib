<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_approve extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->table = 'koleksi';
	}

	public function get_all_koleksi($offset,$perpage)
	{
		//ambil semua koleksi berdasarkan offset untuk paging

		$this->db->select('*');
		$this->db->from('koleksi');
		$this->db->offset($offset);
		$this->db->limit($perpage);

		$koleksi = $this->db->get();

		return $koleksi->result();
	}

	public function get_jumlah_records()
	{
		//hitung jumlah semua records
		return $this->db->count_all('koleksi');
	}

	public function insert_koleksi($post)
	{
		//input data koleksi
		$q = $this->db->insert($this->table, $post);
		
$q = array(
            'path' =>$lampiran['full_path'],

            );
return $q;
	}

	public function get_koleksi($id = null)
	{
		$this->db->select('*');
		$this->db->from('koleksi');
		$this->db->where('id',$id);

		$res = $this->db->get();
		//ambil satu row
		return $res->row();

	}

	public function update_koleksi($post,$id)
	{
		//update where id 
		$this->db->where('id',$id);
		$this->db->update('koleksi',$post);
	
	}

	public function delete_koleksi($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('koleksi');
	}


	public function cari($keyword)
	{
		$this->db->select('*');
		$this->db->from('koleksi');
		$this->db->like('judul',$keyword);
		$this->db->or_like('penulis',$keyword);
		$this->db->or_like('subjek',$keyword);
		$this->db->or_like('kategori',$keyword);
		$this->db->or_like('deskripsi',$keyword);
		$this->db->or_like('lampiran',$keyword);

		$res = $this->db->get();

		return $res->result();
	}
	

}

/* End of file M_koleksi.php */
/* Location: ./application/models/M_koleksi.php */