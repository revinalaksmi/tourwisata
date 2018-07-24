<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	
	public function GetArtikel(){
		
		$this->db->select('id,nama,gambar');
		$this->db->from('paket');
		$data=$this->db->get();
		return $data->result_array();
	}

	public function get_all_categories($limit = FALSE, $offset = FALSE)
    {
    	if ($limit) {
        $this->db->limit($limit, $offset);
      }

       // $data = $this->db->get('paket');
      $data = $this->db->get_where('paket', 'level'==1);
        return $data->result_array();
    }

    public function get_indo($limit = FALSE, $offset = FALSE)
    {
    	if ($limit) {
        $this->db->limit($limit, $offset);
      }

       // $data = $this->db->get('paket');
      $data = $this->db->get('paket');
        return $data->result_array();
    }

    public function get_luar($limit = FALSE, $offset = FALSE)
    {
    	if ($limit) {
        $this->db->limit($limit, $offset);
      }

       // $data = $this->db->get('paket');
      $data = $this->db->get('paket2');
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
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		}	

public function get_total()
  {
    return $this->db->count_all("paket");
  }

	

}