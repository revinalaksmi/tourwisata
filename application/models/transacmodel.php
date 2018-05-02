<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transacmodel extends CI_Model {
	
	public function GetArtikel(){
        $this->db->select('transaksi.id,id_paket,id_member,tanggalbrgkt,jml_dewasa,jml_anak,pembayaran');
        $this->db->join('paket', 'transaksi.id_paket =paket.id');
        $this->db->join('member', 'transaksi.id_member =member.username');

        $data = $this->db->get('transaksi');
       
	
		return $data->result_array();
	}
	public function GetPreview($id=''){
		$isi = $this->db->query('SELECT nama,tempat,hrg_dewasa,hrg_anak,fasilitas,syarat,gambar FROM paket where id = '.$id);
		return $isi->result_array();
	}
	
function json(){
        $this->datatables->select('id,id_paket,id_member,tanggalbrgkt,jml_dewasa,jml_anak,pembayaran');
        $this->datatables->from('transaksi');
        return print_r($this->datatables->generate());
    }
	

}