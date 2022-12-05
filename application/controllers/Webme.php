<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Webme extends CI_Controller
{

    public function home()
    {
        $this->load->view('Webme/home');
    }

    public function product()
    {
        $this->load->view('webme/product');
    }

    public function login()
    {
        $this->load->view('webme/login');
    }

    public function daftar()
    {
        $this->load->view('webme/daftar');
    }
}
