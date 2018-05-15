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

    public function update_transaksi()
    {
        $data = array(
            'id_paket'          => $this->input->post('id_paket'),
            'id_member'         => $this->input->post('id_member'),
            'tanggalbrgkt'        => $this->input->post('tanggalbrgkt'),
            'jml_dewasa'        => $this->input->post('jml_dewasa'),
            'jml_anak'        => $this->input->post('jml_anak'),
            'pembayaran'        => $this->input->post('pembayaran')
        );
        return $this->db->update('transaksi', $data);
    }

    //fungsi delete transaksi
    public function delete_transaksi($id)
    {
        if ( !empty($id) ){
            $delete = $this->db->delete('transaksi', array('id'=>$id) );
            return $delete ? true : false;
        } else {
            return false;
        }
    }

    public function GetPreview($id=''){
        $isi = $this->db->query('SELECT id,id_paket,id_member,tanggalbrgkt,jml_dewasa,jml_anak,pembayaran FROM transaksi where id = '.$id);
        return $isi->result_array();
    }

    public function get_transaksi_by_id($id)
    {
        $this->db->select('transaksi.id,id_paket,id_member,tanggalbrgkt,jml_dewasa,jml_anak,pembayaran');
        $this->db->join('paket', 'transaksi.id_paket =paket.id');
        $this->db->join('member', 'transaksi.id_member =member.username');

        $data = $this->db->get_where('transaksi', array('transaksi.id' => $id));
                    
        return $data->row();
    }
}

