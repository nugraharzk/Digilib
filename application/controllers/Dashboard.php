<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		//check login
		is_logged_in();
		// $this->output->enable_profiler(TRUE);
		$this->load->model('m_koleksi');

	}

	// index dashboard
	public function index()
	{	
		$data['page_title'] = 'Dashboard';
		$data['page_desc'] = 'dashboard area';
		$maxseen			= $this->m_koleksi->getMax('seen');
		$maxdown			= $this->m_koleksi->getMax('downloaded');
		$ok = (string)$maxseen->seen;
		$oke = (string)$maxdown->downloaded;
		$data['koleksi']	= $this->m_koleksi->get_seen_row($ok);
		$data['koleksid']	= $this->m_koleksi->get_down_row($oke);
		$data['page']       = $this->load->view('v_dashboard', $data, true);
		$this->load->view('v_base',$data);
	}
	public function user()
	{
		redirect('koleksi');
	}

	
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
