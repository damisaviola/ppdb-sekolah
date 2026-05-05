<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

    public function not_found()
    {
        $this->output->set_status_header('404');
        $data['title'] = '404 - Halaman Tidak Ditemukan';
        $this->load->view('errors/custom_404', $data);
    }
}
