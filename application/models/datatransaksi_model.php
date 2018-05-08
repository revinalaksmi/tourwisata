<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datatransaksi_model extends CI_Model {
	
	
	var $table = 'transaksi';


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


public function get_all_datatransaksi()
{
$this->db->from('transaksi');
$query=$this->db->get();
return $query->result();
}

public function create_datatransaksi()
    {
        $data = array(
            'id_member'          => $this->input->post('id_member'),
            'pembayaran'   => $this->input->post('pembayaran')
        );

        return $this->db->insert('transaksi', $data);
    }


	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function datatransaksi_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function datatransaksi_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function get_datatransaksi(){
		return $this->db->get('transaksi');
	}
	public function dropdown(){
		$data = $this->db->select('id_paket')->from('transaksi')->get();
		$data_select[''] = "Pilih id paket";
		foreach ($data->result() as $row) {
			$data_select[$row->id_paket] = $row->tanggalbrgkt;
		}
		return $data_select;
		}
	}
