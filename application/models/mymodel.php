<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	
	public function GetArtikel(){
		
		$this->db->select('id,nama,gambar');
		$this->db->from('paket');
		$data=$this->db->get();
	
		return $data->result_array();
	}
	public function GetPreview($id=''){
		$isi = $this->db->query('SELECT id,nama,tempat,hrg_dewasa,hrg_anak,fasilitas,syarat,gambar FROM paket where id = '.$id);
		return $isi->result_array();
	}
	public function InsertData($tabelNama,$data){
		$res = $this->db->insert($tabelNama,$data);
		return $res;
	}
	public function UpdateData($tabelNama,$data,$where){
		$res = $this->db->update($tabelNama,$data,$where);
		return $res;
	}

	

}