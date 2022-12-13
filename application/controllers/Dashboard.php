<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['produk'] = $this->M_produk->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $produk = $this->M_produk->find($id);

        $data = array(
            'id'    => $produk->id,
            'qty'   => 1,
            'price' => $produk->harga_barang,
            'name'  => $produk->nama_barang
        );
        $this->cart->insert($data);
        redirect('dashboard');
    }
}

/* End of file Dashboard.php and path \application\controllers\Dashboard.php */