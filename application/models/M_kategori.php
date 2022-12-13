<?php

class M_kategori extends CI_Model
{
    public function data_gamis()
    {
        return $this->db->get_where("produk", array('kategori' => 'gamis'));
    }
}
