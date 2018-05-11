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

	public function create_transaksi()
    {
        $data = array(
            'id_paket'        	=> $this->input->post('id_paket'),
            'id_member'  		=> $this->input->post('id_member'),
            'tanggalbrgkt'        => $this->input->post('tanggalbrgkt'),
            'jml_dewasa'        => $this->input->post('jml_dewasa'),
            'jml_anak'        => $this->input->post('jml_anak'),
            'pembayaran'        => $this->input->post('pembayaran')
        );
        return $this->db->insert('transaksi', $data);
    }
}