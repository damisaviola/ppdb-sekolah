<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {

    public function index()
    {
        $data['title'] = 'PPDB Online 2026/2027 - SMA YPPK Tiga Raja Timika';
        $this->load->view('ppdb/index', $data);
    }

    public function login()
    {
        $data['title'] = 'Login Calon Siswa - PPDB SMA YPPK Tiga Raja';
        $this->load->view('auth/login', $data);
    }

    public function register()
    {
        $data['title'] = 'Daftar Akun PPDB - SMA YPPK Tiga Raja';
        $this->load->view('auth/register', $data);
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard Calon Siswa - PPDB SMA YPPK Tiga Raja';
        $this->load->view('dashboard/index', $data);
    }

    public function biodata()
    {
        $data['title'] = 'Lengkapi Biodata - PPDB SMA YPPK Tiga Raja';
        $this->load->view('dashboard/biodata', $data);
    }

    public function berkas()
    {
        $data['title'] = 'Unggah Berkas - PPDB SMA YPPK Tiga Raja';
        $this->load->view('dashboard/berkas', $data);
    }

    public function pengumuman()
    {
        $data['title'] = 'Pengumuman PPDB - SMA YPPK Tiga Raja';
        $this->load->view('ppdb/pengumuman', $data);
    }
}
