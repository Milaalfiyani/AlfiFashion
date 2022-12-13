<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('produk');
	}
	public function tambah_produk($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function edit_produk($where, $table)
	{
		$this->db->get_where($table, $where);
		return $this->db->get_where('produk');
	}
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
		return true;
	}
	public function find($id)
	{
		$result = $this->db->where('id', $id)
			->limit(1)
			->get('produk');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}
}



/* End of file M_produk.model.php and path \application\models\M_produk.model.php */