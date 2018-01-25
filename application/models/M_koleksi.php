<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_koleksi extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->table = 'koleksi';
	}

	public function getAll()
	{
		return $this->db->select('*')->get('koleksi')->result();
	}

	public function get_id($id)
	{
		return $this->db->where('id',$id)->get('koleksi')->result();
	}

	public function get_id_row($id)
	{
		return $this->db->where('id',$id)->get('koleksi')->row();
	}

	public function get_seen_row($id)
	{
		return $this->db->where('seen',$id)->get('koleksi')->row();
	}

	public function get_down_row($id)
	{
		return $this->db->where('downloaded',$id)->get('koleksi')->row();
	}

	public function get_all_koleksi($id)
	{
		return $this->db->select('*')->where('approved_by !=',0)->get('koleksi')->result();
	}

	public function get_from_subject($id)
	{
		return $this->db->select('*')->where('subjek',$id)->where('approved_by !=',0)->get('koleksi')->result();
	}

	public function getMax($data)
	{
		return $this->db->select_max($data)->get('koleksi')->row();
	}

	public function get_all_subject()
	{
		//ambil semua koleksi berdasarkan offset untuk paging

		// mengambil db dengan sorting judul ascending dari koleksi
		$koleksi = $this->db->distinct()
							->select('subjek')
							->order_by("subjek","asc")
							->get('koleksi');
		#$this->db->where('approved_by !=',0);
		#$this->db->offset($offset);
		#$this->db->limit($perpage);

		#$koleksi = $this->db->get();

		// melempar nilai
		return $koleksi->result();
	}

	public function get_all_approval($offset,$perpage)
	{
		//ambil semua koleksi berdasarkan offset untuk paging

		$this->db->select('*');
		$this->db->from('koleksi');
		$this->db->where('approved_by',0);
		$this->db->offset($offset);
		$this->db->limit($perpage);

		$koleksi = $this->db->get();

		return $koleksi->result();
	}

	public function get_jumlah_records($type=null)
	{
		//hitung jumlah semua records
		if($type=='koleksi'){
			$this->db->where('approved_by !=',0);
		}else if($type=='approve'){
			$this->db->where('approved_by',0);
		}
		return $this->db->count_all_results('koleksi');
	}

	public function insert_koleksi($post)
	{
		//input data koleksi
		$q = $this->db->insert($this->table, $post);
		
		/*$q = array(
            'path' =>$lampiran['full_path'],

            );*/
		return $q;
	}

	public function get_koleksi($id)
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
		$this->db->where('approved_by !=',0);
		$this->db->like('judul',$keyword);
		$this->db->or_like('penulis',$keyword);
		$this->db->or_like('subjek',$keyword);
		$this->db->or_like('kategori',$keyword);
		$this->db->or_like('deskripsi',$keyword);
		$this->db->or_like('lampiran',$keyword);

		$res = $this->db->get();

		return $res->result();
	}

	public function addSeen($id,$seen)
	{
		$data = array('seen' => $seen);
		$this->db->where('id',$id)
				 ->update('koleksi',$data);
	}

	public function addDownloaded($id,$down)
	{
		$data = array('downloaded' => $down);
		$this->db->where('id',$id)
				 ->update('koleksi',$data);
	}
	
	public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->where('approved_by',0)->get("koleksi");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
     
    public function get_total() 
    {
        return $this->db->count_all("koleksi");
    }
}

/* End of file M_koleksi.php */
/* Location: ./application/models/M_koleksi.php */