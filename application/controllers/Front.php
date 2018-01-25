<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('m_koleksi');
		$this->load->helper('download');
	}

	// Pencarian standar

	public function index( )
	{	
		//handling search
		if($this->input->post())
		{
			//lakukan search
			$data['search'] = $this->m_koleksi->cari($this->input->post('keyword'));
			$this->load->view('v_front',$data);
		}else{
			//load frontend
			$this->load->view('v_front');
		}
	}

	/* Fungsi Pencarian Interpolasi */
	public function interpolation_search($list, $x)
	{
		// inisialisasi
		$l = 0;
		$r = count($list) - 1;
	 
	 	// selama kiri belum sampai kanan lakukan loop
		while ($l <= $r) {
			// jika isi dari list kiri sama dengan kanan
			if ($list[$l] == $list[$r]) {
				// jika isi kiri sama dengan yang dicari
				if ($list[$l] == $x) {
					// lempar index saat itu
					return $l;
					// jika tidak
				} else {
					// not found
					return -1;
				}
			}
	 
	 		// mencari formula
			$k = ($x - $list[$l])/($list[$r] - $list[$l]);
	 
			// not found
			if ($k < 0 || $k > 1) {
				return -1;
			}
	 
	 		// mencari index tengah
			$mid = round($l + $k*($r - $l));

			if ($x < $list[$mid]) {
				$r = $mid - 1;
			} else if ($x > $list[$mid]) {
				$l = $mid + 1;
			} else {
				// success!
				return $mid;
			}
	 
			// not found
			return -1;
		}
	}

	/* FUNGSI PENCARIAN DARI V_FRONT MASUK KESINI */
	public function cariKeyword()
	{
		// ambil data dari input v_front
		$find = set_value('keyword');

		// ubah karakter pertama menjadi ascii
		$a = ord($find);

		// fetch data dari db ke dalam variabel
		$db = $this->m_koleksi->get_all_subject();

		// hitung banyaknya baris dalam variabel db
		$c = count($db);

		// deklarasi array kosong
		$stack = array();

		// loop sebanyak baris dalam db
		foreach ($db as $row) {

			// ubah karakter pertama dari baris sekarang menjadi ascii untuk indexing
			$tmp = ord($row->subjek);

			// masukkan nilai ascii tadi ke dalam array list kosong tadi
			array_push($stack, $tmp);
		}

		// $j = 0;
		// while ($j < $c) {
		// 	echo $stack[$j];
		// 	echo $j." <br>";
		// 	$j++;
		// }

		/* FUNGSI INTERPOLASI DISINI */

		/*
		*  Panggil fungsi interpolasi dengan masukan parameter list dan yang akan dicari
		*  lalu tampung ke dalam variabel hasil. Hasil ini berupa integer dari index 
		*  string yang akan dicari.
		*/

		$hasil = $this->interpolation_search($stack,$a);

		// jika user memasukkan input
		if($a > 0){

			// jika hasil ketemu
			if($hasil != -1){

				// memanggil seluruh judul koleksi berdasarkan subjek
				$input['search'] = $this->m_koleksi->get_from_subject($db[$hasil]->subjek);
				$input['cari'] = $db[$hasil]->subjek;

				// masukkan baris dari db yang ditemukan ke dalam sebuah array\
				// $cek['search'] = $db[$hasil];

				// pindah ke view dengan membawa sebuah array
				$this->load->view('v_front',$input);
			}

			// jika hasil tidak ketemu
			else{

				// set flashdata untuk menampilkan pesan error
				$this->session->set_flashdata('error','Tidak Ditemukan :(');

				// mengembalikan ke halaman yang sama dengan berisi pesan tadi
				redirect('front');
			}
		}

		// jika user tidak memasukkan input
		else{

			// set flashdata berisi error user tidak memasukkan input
			$this->session->set_flashdata('error', 'Masukkan input.');

			// mengembalikan ke halaman yang sama dengan berisi pesan tadi
			redirect('front');
		}
	}

	//Detail
	public function detail($id){
		$ok['arr'] = $this->m_koleksi->get_id_row($id);
		
		$this->m_koleksi->addSeen($id,$ok['arr']->seen+1);

		$this->load->view('v_detail',$ok);
	}	

	public function download($id)
	{
		$ok = $this->m_koleksi->get_id_row($id);
		$this->addDowned($id,$ok->downloaded);

		$name = $ok->lampiran;
		$data = file_get_contents('./uploads/'.$ok->lampiran); 
		force_download($name, $data);

	}

	public function addDowned($id,$down)
	{
		$val = $down + 1;
		$this->m_koleksi->addDownloaded($id,$val);
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
