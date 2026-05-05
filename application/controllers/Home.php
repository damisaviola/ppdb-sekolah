<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
    {
        $data['title'] = 'SMA YPPK Tiga Raja Timika - Cerdas & Berkarakter';
        $this->load->view('beranda/index', $data);
    }

}
