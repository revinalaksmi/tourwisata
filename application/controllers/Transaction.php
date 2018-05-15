<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

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
		$this->load->model('transacmodel');
		$data['result'] = $this->transacmodel->GetArtikel();
		$this->load->view('transaksi',$data);
	}
	public function do_preview($id=''){
		$this->load->model('transac_model');
		$data['isi'] = $this->transacmodel->GetPreview($id);
		$this->load->view('preview', $data);
	}
	public function do_insert(){
		$this->load->model('mymodel');
		$data['result'] = $this->mymodel->get_all_categories();
		$this->load->view('booking',$data);
	    $this->form_validation->set_rules('id_member', 'ID Member', 'required');
	    $this->form_validation->set_rules('tanggalbrgkt', 'Tanggal Berangkat', 'required');
	    $this->form_validation->set_rules('jml_dewasa', 'Jumlah Penumpang Dewasa', 'required');
	    $this->form_validation->set_rules('jml_anak', 'Jumlah Penumpan Anak-anak', 'required');
	    $this->form_validation->set_rules('pembayaran', 'Pembayaran', 'required');

		if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('booking');
	    } else {
	    	$this->load->model('transacmodel');
			$this->transacmodel->create_transaksi();
			redirect('transaction');
		}
	}

	public function edit_data($id=''){
		$this->load->model('transacmodel');
		$biodata = $this->transacmodel->GetPreview($id);
		$data['transaksi'] = array(
			"id" 			=> $biodata[0]['id'],
			"id_paket" 			=> $biodata[0]['id_paket'],
			"id_member"		=> $biodata[0]['id_member'],
			"tanggalbrgkt"	=> $biodata[0]['tanggalbrgkt'],
			"jml_dewasa" 		=> $biodata[0]['jml_dewasa'],
			"jml_anak"		=> $biodata[0]['jml_anak'],
			"pembayaran" 		=> $biodata[0]['pembayaran'],
			
		);
		
		$this->load->view('update_booking',$data);
	}

	public function delete_transaksi($id)
	{
		$this->load->model('transacmodel');

		$data['transaksi'] = $this->transacmodel->get_transaksi_by_id($id);

		if ( empty($id) || !$data['transaksi'] ) show_404();

        $this->transacmodel->delete_transaksi($id);
	    redirect('Transaction');
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
			$id_paket			= $_POST['id_paket'];
			$id_member		= $_POST['id_member'];
			$tanggalbrgkt	= $_POST['tanggalbrgkt'];
			$jml_dewasa		= $_POST['jml_dewasa'];
			$jml_anak		= $_POST['jml_anak'];
			$pembayaran 		= $_POST['pembayaran'];
			
			$data_update 	= array(
									'id'			=> $id ,
									'id_paket'		=> $id_paket,
									'id_member'	=> $id_member,
									'tanggalbrgkt' 		=> $tanggalbrgkt,
									'jml_dewasa' 	=> $jml_dewasa,
									'jml_anak' 		=> $jml_anak,
									'pembayaran'		=> $pembayaran
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
}
