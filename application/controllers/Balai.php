<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('pagination');
		$this->load->model('m_balai');

	}

	// List all your items
	public function page()
	{
		$this->index();
	}
	public function index( $offset = 0 )
	{
		$this->load->library('pagination');
		
		$config['base_url'] = site_url('balai/page');
		$config['total_rows'] = $this->m_balai->get_jumlah_records();
		$config['per_page'] = 2;
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

		//ambil data balai
		$dat['balai'] = $this->m_balai->get_all_balai($offset,$config['per_page']);

		$data['page_title'] = 'Balai';
		$data['page_desc'] = 'daftar balai';
		$data['page']       = $this->load->view('balai/v_index', $dat, true);
		$this->load->view('v_base',$data);
	}

	// Add a new item
	public function add()
	{

		if($this->input->post())
		{
			$post = array(
					
					'nama' => $this->input->post('nama'),
					'alamat' => $this->input->post('alamat'),
					'telp' => $this->input->post('telp')
					);
			//print_r($post);

			$q = $this->m_balai->insert_balai($post);
			$msg = "Input balai Berhasil!";
        	$this->session->set_flashdata("k", $msg);

        	redirect('balai');

		}else{
			$data['page_title'] = 'balai';
			$data['page_desc'] = 'tambah balai';
			$data['page']       = $this->load->view('balai/v_form','', true);
			$this->load->view('v_base',$data);
		}
		
	}

	//Update one item
	public function update( $id = NULL )
	{
		if($this->input->post())
		{
			$post = array(
					'nama' => $this->input->post('nama'),
					'alamat' => $this->input->post('alamat'),
					'telp' => $this->input->post('telp')
					);
			//print_r($post);

			$q = $this->m_balai->update_balai($post,$id);
			$msg = "Update balai Berhasil!";
        	$this->session->set_flashdata("k", $msg);

        	redirect('balai');

		}else{
			$id = $this->uri->segment(3);
			$data['page_title'] = 'balai';
			$data['page_desc'] = 'Edit balai';
			$dat['balai'] = $this->m_balai->get_balai($id);
			$data['page']       = $this->load->view('balai/v_edit',$dat, true);
			$this->load->view('v_base',$data);
		}
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$id=$this->uri->segment(3);
		$this->m_balai->delete_balai($id);

		$msg = "Delete balai Berhasil!";
        $this->session->set_flashdata("k", $msg);

        redirect('balai');
	}
}

/* End of file balai.php */
/* Location: ./application/controllers/balai.php */
