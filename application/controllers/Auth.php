<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		//$this->output->enable_profiler(TRUE);

	}

	// List all your items
	public function index( $offset = 0 )
	{

	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}

	public function login()
	{
		//check jika tombol submit ditekan
		if(!$this->input->post('username')){
			$this->load->view('v_login');
		}else
		{
		//handling jika tombol submit ditekan
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$usr = $this->m_auth->login($username,$password);
			if(!$usr)
			{
				echo 'user not found';
			}else{
				//set session
				$user = $usr->row();
				$array = array(
					'is_logged_in' => true,
					'user_id' => $user->id,
					'balai' => $user->balai,
					'level' => $user->level,
					'nama' => $user->nama,
					'email' => $user->email
				);
				
				$this->session->set_userdata( $array );

				if($user->level == 'admin' || $user->level == 'pustakawan'){
					redirect('dashboard');
				}
				else
				{
					redirect('dashboard/user');
				}
			}
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
