<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
    {
        $data['title'] = 'SMA YPPK Tiga Raja Timika - Cerdas & Berkarakter';
        $this->load->view('beranda/index', $data);
    }

    public function profil()
    {
        $data['title'] = 'Profil Sekolah - SMA YPPK Tiga Raja Timika';
        $this->load->view('beranda/profil', $data);
    }

    public function visi_misi()
    {
        $data['title'] = 'Visi & Misi - SMA YPPK Tiga Raja Timika';
        $this->load->view('beranda/visi_misi', $data);
    }

    public function sejarah()
    {
        $data['title'] = 'Sejarah Sekolah - SMA YPPK Tiga Raja Timika';
        $this->load->view('beranda/sejarah', $data);
    }

}
