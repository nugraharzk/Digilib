<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koleksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('pagination');
		$this->load->model('m_koleksi');
		$this->output->enable_profiler(true);

	}

	// List all your items
	public function page()
	{
		$this->index();
	}
	public function approve_list()
	{
		$this->load->library('pagination');
		
		// $config['base_url'] = site_url('approve/page');
		// $config['total_rows'] = $this->m_koleksi->get_jumlah_records('approve');
		// $config['per_page'] = 5;
		// $config['uri_segment'] = 3;
		// $config['num_links'] = 3;
		// $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
		// $config['full_tag_close'] = '</ul>';
		// $config['first_link'] = 'First';
		// $config['first_tag_open'] = '<li>';
		// $config['first_tag_close'] = '</li>';
		// $config['num_tag_open'] = '<li>';
		// $config['num_tag_close'] = '</li>';
		// $config['last_link'] = 'Last';
		// $config['last_tag_open'] = '<li>';
		// $config['last_tag_close'] = '</li>';
		// $config['next_link'] = '&gt;';
		// $config['next_tag_open'] = '<li>';
		// $config['next_tag_close'] = '</li>';
		// $config['prev_link'] = '&lt;';
		// $config['prev_tag_open'] = '<li>';
		// $config['prev_tag_close'] = '</li>';
		// $config['cur_tag_open'] = '<li><a href="#">';
		// $config['cur_tag_close'] = '</a></li>';

		// $offset = $this->uri->segment(3);
		
		// $this->pagination->initialize($config);

		// init params
        $params = array();
        $limit_per_page = 3;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->m_koleksi->get_total();
 
        if ($total_records > 0) 
        {
            // get current page records
            $params["koleksi"] = $this->m_koleksi->get_current_page_records($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'koleksi/approve_list';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;

            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<span class="firstlink">';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<span class="lastlink">';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = 'Next Page';
            $config['next_tag_open'] = '<span class="nextlink">';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = 'Prev Page';
            $config['prev_tag_open'] = '<span class="prevlink">';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<span class="curlink">';
            $config['cur_tag_close'] = '</span>';
 
            $config['num_tag_open'] = '<span class="numlink">';
            $config['num_tag_close'] = '</span>';
             
            $this->pagination->initialize($config);
             
            // build paging links
            $params["paging"] = $this->pagination->create_links();
        }
         
        // $this->load->view('user_listing', $params);

		
		
		// $dat['paging'] = $this->pagination->create_links();

		//ambil data koleksi
		// $dat['koleksi'] = $this->m_koleksi->get_all_approval($offset,$config['per_page']);

		$data['page_title'] = 'Approval List';
		$data['page_desc'] = 'daftar koleksi yang belum diapprove';
		$data['page']       = $this->load->view('approvalList/v_index', $params, true);
		$this->load->view('v_base',$data);
	}
	public function index( $offset = 0 )
	{
		$this->load->library('pagination');
		
		$config['base_url'] = site_url('koleksi/page');
		$config['total_rows'] = $this->m_koleksi->get_jumlah_records('koleksi');
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$offset = $this->uri->segment(3);
		
		$this->pagination->initialize($config);

		
		
		$dat['paging'] = $this->pagination->create_links();

		//ambil data koleksi
		$dat['koleksi'] = $this->m_koleksi->get_all_koleksi($offset,$config['per_page']);

		$data['page_title'] = 'Koleksi';
		$data['page_desc'] = 'daftar koleksi';
		$data['page']       = $this->load->view('koleksi/v_index', $dat, true);
		$this->load->view('v_base',$data);
	}

	// Add a new item
	public function add()
	{

		if($this->input->post())
		{
			$post = array(
					'user_id' => $this->session->userdata('user_id'),
					'judul' => $this->input->post('judul'),
					'penulis' => $this->input->post('penulis'),
					'subjek' => $this->input->post('subjek'),
					'kategori' => $this->input->post('kategori'),
					'deskripsi' => $this->input->post('deskripsi'),
					//'lampiran' => $this->input->post('lampiran'),
					'c_date' => date('Y-m-d h:i:s')
					);

					//handling upload dulu
				if(isset($_FILES['userfile'])){
					$file = $this->do_upload('userfile');
					$post['lampiran'] = $file['file_name'];
				}
			//print_r($post);

			$q = $this->m_koleksi->insert_koleksi($post);
			$msg = "Input Koleksi Berhasil!";
        	$this->session->set_flashdata("k", $msg);

        	redirect('koleksi');

		}else{
			$data['page_title'] = 'Koleksi';
			$data['page_desc'] = 'tambah koleksi';
			$data['page']       = $this->load->view('koleksi/v_form','', true);
			$this->load->view('v_base',$data);
		}
		
	}

	//Update one item
	public function update( $id = NULL )
	{
		if($this->input->post())
		{

			$post = array(
				'user_id' => $this->session->userdata('user_id'),
				'judul' => $this->input->post('judul'),
				'penulis' => $this->input->post('penulis'),
				'subjek' => $this->input->post('subjek'),
				'kategori' => $this->input->post('kategori'),
				'deskripsi' => $this->input->post('deskripsi'),
				//'lampiran' => $this->input->post('lampiran'),
				'm_date' => date('Y-m-d h:i:s')
				);
			//handling upload dulu
				if($_FILES['userfile']['name'] != ''){
					$file = $this->do_upload('userfile');
					$post['lampiran'] = $file['file_name'];
				}
				
			

			
			//print_r($post);

			$q = $this->m_koleksi->update_koleksi($post,$id);
			$msg = "Update Koleksi Berhasil!";
        	$this->session->set_flashdata("k", $msg);

        	redirect('koleksi');

		}else{
			$id = $this->uri->segment(3);
			$data['page_title'] = 'Koleksi';
			$data['page_desc'] = 'Edit koleksi';
			$dat['koleksi'] = $this->m_koleksi->get_koleksi($id);
			$data['page']       = $this->load->view('koleksi/v_edit',$dat, true);
			$this->load->view('v_base',$data);
		}
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$id=$this->uri->segment(3);
		$this->m_koleksi->delete_koleksi($id);

		$msg = "Delete Koleksi Berhasil!";
        $this->session->set_flashdata("k", $msg);

        redirect('koleksi');
	}
	//approve
	public function approve($id = NULL)
	{
	//check hanya pustakawan
	
		if($this->session->userdata('level')=='pustakawan'):;
		$id = $this->uri->segment(3);

		$post = array(
			'approved_by' => $this->session->userdata('user_id'),
			'm_date' => date('Y-m-d h:i:s')
		);
		$this->m_koleksi->update_koleksi($post,$id);
		$this->session->set_flashData("k","Koleksi berhasil di approve!");
		else:
		$this->session->set_flashData("k","Anda tidak memiliki hak akses!");
		
		endif;
		redirect('koleksi');
	
	}
	//upload 
	public function do_upload($file)
	{
		
		$config['upload_path']		= 'uploads/';
		$config['allowed_types']	= 'pdf|gif|jpg|png';
		//$config['max_size']       = 100;
		//$config['max_width']      = 1024;
		//$config['max_height']     = 768;

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload($file))
		{
			return 'error';
		}
		else
		{
			$data = $this->upload->data();
			
			return $data;
		}
	}

	
}

/* End of file koleksi.php */
/* Location: ./application/controllers/koleksi.php */
