<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approve extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    $this->load->library('pagination');
    $this->load->model('m_approve');
    $this->load->model('m_koleksi');
  }

  // List all your items
  public function page()
  {
    $this->index();
  }
  public function index( $offset = 0 )
  {
    $this->load->library('pagination');
    
    $config['base_url'] = site_url('approve/page');
    $config['total_rows'] = $this->m_approve->get_jumlah_records();
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
    $dat['koleksi'] = $this->m_approve->get_all_koleksi($offset,$config['per_page']);

    $data['page_title'] = 'Approval List';
    $data['page_desc'] = 'daftar koleksi yang belum dipublikasikan';
    $data['page']       = $this->load->view('approve/v_index', $dat, true);
    $this->load->view('v_base',$data);
  }

  public function approving($id = NULL)
  {
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
    redirect('approve');
  }

  
}

/* End of file koleksi.php */
/* Location: ./application/controllers/koleksi.php */
