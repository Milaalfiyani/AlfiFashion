<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Webme extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_heroUnit');
        $data['hero'] = $this->M_heroUnit->getallHero();
        $this->load->view('webme/home', $data);
    }
    public function tambahFoto()
    {
        $this->load->view('webme/tambah-foto');
    }

    public function uploadFoto()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 2048;
        $config['max_height']           = 1080;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_foto')) {
            $error = array('error' => $this->upload->display_errors());

            echo 'upload gagal';

            // $this->load->view('upload_form', $error);
        } else {
            $data = $this->upload->data();

            $input = $this->input->post();

            $foto['label'] = $input['label'];
            $foto['description'] = $input['description'];
            $foto['file_foto'] = $data['file_name'];
            $foto['status_persetujuan'] = 'belum disetujui';

            $this->db->insert('hero_unit', $foto);
            if ($this->db->affected_rows() > 0) {
                echo 'data berhasil disimpan';
            } else {
                echo 'data gagal disimpan';
            }


            // $this->load->view('upload_success', $data);
        }
    }

    public function hapusFoto()
    {
        /*
		ambil data yang lama
		di unlink
		upload data baru
		*/
        unlink('./uploads/wallpaperflare_com_wallpaper.jpg');
        echo 'file berhasil dihapus';
    }

    public function login()
    {
        $this->load->view('Webme/login');
    }
    public function tambah()
    {
        $this->load->view('Webme/tambah');
    }

    public function daftar()
    {
        $this->load->view('webme/daftar');
    }
}
