<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Here we would typically check for admin session
        // if (!$this->session->userdata('admin_logged_in')) {
        //     redirect('auth/admin_login');
        // }
    }

    public function login()
    {
        $data['title'] = 'Login Admin - SMA YPPK Tiga Raja';
        $this->load->view('admin/login', $data);
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['title_short'] = 'Overview';
        
        // Mock data for stats
        $data['stats'] = [
            'total_pendaftar' => 128,
            'pendaftar_baru' => 12,
            'pendaftar_terverifikasi' => 85,
            'pendaftar_ditolak' => 5
        ];

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function beranda()
    {
        $data['title'] = 'Kelola Beranda';
        $data['title_short'] = 'Beranda';

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/beranda', $data);
        $this->load->view('admin/templates/footer');
    }

    public function ppdb()
    {
        $data['title'] = 'Kelola PPDB';
        $data['title_short'] = 'PPDB';
        
        // Mock data for applicants
        $data['applicants'] = [
            ['id' => 1, 'nama' => 'Budi Santoso', 'nisn' => '0012345678', 'status' => 'Menunggu', 'tanggal' => '2026-05-01'],
            ['id' => 2, 'nama' => 'Siti Aminah', 'nisn' => '0023456789', 'status' => 'Terverifikasi', 'tanggal' => '2026-05-02'],
            ['id' => 3, 'nama' => 'Agus Wijaya', 'nisn' => '0034567890', 'status' => 'Ditolak', 'tanggal' => '2026-05-03'],
            ['id' => 4, 'nama' => 'Dewi Lestari', 'nisn' => '0045678901', 'status' => 'Menunggu', 'tanggal' => '2026-05-04'],
        ];

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/ppdb/index', $data);
        $this->load->view('admin/templates/footer');
    }
}
