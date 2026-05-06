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

    public function ppdb($page = 0)
    {
        $data['title'] = 'Kelola PPDB';
        $data['title_short'] = 'PPDB';
        
        // Sorting logic
        $sort = $this->input->get('sort') ?? 'id';
        $order = $this->input->get('order') ?? 'asc';
        $data['sort'] = $sort;
        $data['order'] = $order;

        // Mock data for applicants
        $applicants = [
            ['id' => 1, 'nama' => 'Budi Santoso', 'nisn' => '0012345678', 'status' => 'Menunggu', 'tanggal' => '2026-05-01'],
            ['id' => 2, 'nama' => 'Siti Aminah', 'nisn' => '0023456789', 'status' => 'Terverifikasi', 'tanggal' => '2026-05-02'],
            ['id' => 3, 'nama' => 'Agus Wijaya', 'nisn' => '0034567890', 'status' => 'Ditolak', 'tanggal' => '2026-05-03'],
            ['id' => 4, 'nama' => 'Dewi Lestari', 'nisn' => '0045678901', 'status' => 'Menunggu', 'tanggal' => '2026-05-04'],
            ['id' => 5, 'nama' => 'Ahmad Fauzi', 'nisn' => '0056789012', 'status' => 'Terverifikasi', 'tanggal' => '2026-05-05'],
            ['id' => 6, 'nama' => 'Lutfi Hakim', 'nisn' => '0067890123', 'status' => 'Menunggu', 'tanggal' => '2026-05-06'],
            ['id' => 7, 'nama' => 'Rina Wijaya', 'nisn' => '0078901234', 'status' => 'Terverifikasi', 'tanggal' => '2026-05-07'],
            ['id' => 8, 'nama' => 'Hendra Kusuma', 'nisn' => '0089012345', 'status' => 'Menunggu', 'tanggal' => '2026-05-08'],
        ];

        // Sort the mock data
        usort($applicants, function($a, $b) use ($sort, $order) {
            if ($a[$sort] == $b[$sort]) return 0;
            if ($order == 'asc') {
                return ($a[$sort] < $b[$sort]) ? -1 : 1;
            } else {
                return ($a[$sort] > $b[$sort]) ? -1 : 1;
            }
        });

        // Pagination setup
        $this->load->library('pagination');
        $config['base_url'] = base_url('admin/ppdb');
        $config['total_rows'] = count($applicants);
        $config['per_page'] = 4;
        $config['uri_segment'] = 3;
        $config['reuse_query_string'] = TRUE;
        
        // CI Pagination config
        $config['first_link'] = '<i class="fa-solid fa-angles-left text-[10px]"></i>';
        $config['last_link'] = '<i class="fa-solid fa-angles-right text-[10px]"></i>';
        $config['next_link'] = '<i class="fa-solid fa-chevron-right text-[10px]"></i>';
        $config['prev_link'] = '<i class="fa-solid fa-chevron-left text-[10px]"></i>';
        $config['prefix'] = '';
        $config['suffix'] = '';
        
        // Tailwind/Filament styling for CI Pagination
        $config['full_tag_open'] = '<div class="flex items-center gap-1">';
        $config['full_tag_close'] = '</div>';
        $config['num_tag_open'] = '';
        $config['num_tag_close'] = '';
        $config['cur_tag_open'] = '<button class="w-8 h-8 flex items-center justify-center rounded-lg bg-brand-600 text-white text-xs font-bold shadow-sm shadow-brand-600/20">';
        $config['cur_tag_close'] = '</button>';
        $config['next_tag_open'] = '';
        $config['next_tag_close'] = '';
        $config['prev_tag_open'] = '';
        $config['prev_tag_close'] = '';
        $config['first_tag_open'] = '';
        $config['first_tag_close'] = '';
        $config['last_tag_open'] = '';
        $config['last_tag_close'] = '';
        $config['attributes'] = array('class' => 'w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-white text-xs font-bold transition-all');

        $this->pagination->initialize($config);
        
        $data['applicants'] = array_slice($applicants, $page, $config['per_page']);
        $data['pagination'] = $this->pagination->create_links();
        $data['total_rows'] = $config['total_rows'];
        $data['start'] = $page + 1;
        $data['end'] = min($page + $config['per_page'], $config['total_rows']);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/ppdb/index', $data);
        $this->load->view('admin/templates/footer');
    }
}
