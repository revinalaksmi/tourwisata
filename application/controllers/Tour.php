<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller {

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
		$data['result'] = $this->mymodel->GetArtikel();
		$this->load->view('home',$data);
	}
	public function do_preview($id=''){
		$this->load->model('mymodel');
		$data['isi'] = $this->mymodel->GetPreview($id);
		$this->load->view('preview', $data);
	}
	public function about(){
		$this->load->view('about');
	}
	public function booking(){
		$this->load->view('booking');
	}
	public function news(){
		$this->load->view('news');
	}
}
