<?php

class kategori extends CI_Controller
{
    public function gamis()
    {
        $data['gamis'] = $this->M_kategori->data_gamis()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('gamis', $data);
        $this->load->view('templates/footer');
    }
}
