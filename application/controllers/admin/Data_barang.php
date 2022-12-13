<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['produk'] = $this->M_produk->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('admin/footer');
    }
    public function tambah_aksi()
    {
        $nama_barang   = $this->input->post('nama_barang');
        $harga_barang = $this->input->post('harga_barang');
        $detail_produk   = $this->input->post('detail_produk');
        $image     = $_FILES['image'];
        if ($image = '') {
        } else {
            $config['upload_path']   = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "Image Gagal Di Upload";
            } else {
                $image = $this->upload->data('file_name');
            }
        }


        $data = array(
            'nama_barang'  => $nama_barang,
            'harga_barang' => $harga_barang,
            'detail_produk'  => $detail_produk,
            'image'    => $image
        );
        $this->M_produk->tambah_produk($data, 'produk');
        redirect('/admin/Data_barang/');
    }

    public function edit_produk($id)
    {
        $where = array('id' => $id);
        $data['produk'] = $this->M_produk->edit_produk($where, 'produk')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/edit_produk', $data);
        $this->load->view('admin/footer');
    }
    public function update()
    {
        $id              = $this->input->post('id');
        $nama_barang     = $this->input->post('nama_barang');
        $harga_barang    = $this->input->post('harga_barang');
        $detail_produk   = $this->input->post('detail_produk');
        $image           = $this->input->post('image');

        $data = array(
            'nama_barang'  => $nama_barang,
            'harga_barang' => $harga_barang,
            'detail_produk'  => $detail_produk,
            'image' => $image
        );

        $where = array(
            'id' => $id
        );
        $this->M_produk->update_data($where, $data, 'produk');
        redirect('/admin/Data_barang/');
    }
    public function hapus_data($id)
    {
        $where = array('id' => $id);
        $this->M_produk->hapus_data($where, 'produk');
        redirect('/admin/Data_barang');
    }
}

/* End of file Data_barang.php.php and path \application\controllers\admin\Data_barang.php.php */