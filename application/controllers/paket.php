<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('mymodel');
		$data['result'] = $this->mymodel->GetPaket();
		$this->load->view('templates/header-paket', $data);
		$this->load->view('paket',$data);
	}
	// public function do_preview($id=''){
	// 	$this->load->model('transac_model');
	// 	$data['isi'] = $this->transacmodel->GetPreview($id);
	// 	$this->load->view('preview', $data);
	// }
		public function do_insert(){
	    $this->form_validation->set_rules('nama', 'Nama', 'required');
	    $this->form_validation->set_rules('tempat', 'Tempat', 'required');
	    $this->form_validation->set_rules('hrg_dewasa', 'Harga Penumpang Dewasa', 'required');
	    $this->form_validation->set_rules('hrg_anak', 'Harga Penumpang Anak-anak', 'required');
	    $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
	    $this->form_validation->set_rules('syarat', 'Syarat', 'required');
	    // Cek apakah input valid atau tidak

	   
	    if ($this->form_validation->run() === FALSE)
	    {
	       $this->load->view('templates/header');
	        $this->load->view('add_paket');
	        $this->load->view('templates/footer');
	    }

		$config['upload_path']          = 'assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $data['upload_error'] = $this->upload->display_errors();
                print_r($data['upload_error']);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $nama			= $this->input->post('nama');
			$tempat 		= $this->input->post('tempat');
			$hrg_dewasa 	= $this->input->post('hrg_dewasa');
			$hrg_anak		= $this->input->post('hrg_anak');
			$fasilitas		= $this->input->post('fasilitas');
			$syarat 		= $this->input->post('syarat');
			$gambar		= $this->upload->data('file_name');
			
			$data_insert	= array(
									'nama'			=> $nama,
									'tempat'		=> $tempat,
									'hrg_dewasa'	=> $hrg_dewasa,
									'hrg_anak' 		=> $hrg_anak,
									'fasilitas' 	=> $fasilitas,
									'syarat' 		=> $syarat,
									'gambar'		=> $gambar
								);
			print_r($data_insert);
			$this->load->model('mymodel');
			$res = $this->mymodel->InsertData('paket', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('tour');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
        }
	}

	public function edit_data($id='',$gambar=''){
		$this->load->model('mymodel');
		$biodata = $this->mymodel->GetPreview($id);
		$data = array(
			"id" 			=> $biodata[0]['id'],
			"nama" 			=> $biodata[0]['nama'],
			"tempat"		=> $biodata[0]['tempat'],
			"hrg_dewasa"	=> $biodata[0]['hrg_dewasa'],
			"hrg_anak" 		=> $biodata[0]['hrg_anak'],
			"fasilitas"		=> $biodata[0]['fasilitas'],
			"syarat" 		=> $biodata[0]['syarat'],
			"gambar"		=> $biodata[0]['gambar']
		);
		$this->load->view('edit_paket',$data);
	}
	public function do_update(){
		$config['upload_path']          = 'assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
               print_r($error);
        }
        else
        {
			$result_upload=$this->upload->data();
			$id 			= $_POST['id'];
			$nama			= $_POST['nama'];
			$tempat 		= $_POST['tempat'];
			$hrg_dewasa 	= $_POST['hrg_dewasa'];
			$hrg_anak		= $_POST['hrg_anak'];
			$fasilitas		= $_POST['fasilitas'];
			$syarat 		= $_POST['syarat'];
			$gambar		= $this->upload->data('file_name');
			$data_update 	= array(
									'nama'			=> $nama ,
									'tempat'		=> $tempat,
									'hrg_dewasa'	=> $hrg_dewasa,
									'hrg_anak' 		=> $hrg_anak,
									'fasilitas' 	=> $fasilitas,
									'syarat' 		=> $syarat,
									'gambar'		=> $gambar
				);
			$this->load->model('mymodel');
			$where = array('id' => $id);
			$res = $this->mymodel->UpdateData('paket',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('tour');
			}
		}
	}
	public function hapus($id){
		$this->load->model('mymodel');
		$where = array('id' => $id);
		$this->mymodel->hapus_data($where,'paket');
		redirect('tour');
	}
}
