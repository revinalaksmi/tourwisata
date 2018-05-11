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
}
