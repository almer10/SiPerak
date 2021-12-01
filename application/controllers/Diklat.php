<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diklat extends CI_Controller
{

    // private $m_strukturorganisasi;

    function __construct()
    {
        parent::__construct();
        isnt_login(function () {
            redirect(base_url('auth/login'));
        });
        // $this->load->model('M_StrukturOrganisasi');
        // $this->m_strukturorganisasi = $this->M_StrukturOrganisasi;
    }

    public function rencana()
    {
        $data = generate_page('Diklat', 'Diklat/rencana', 'Admin');

        $data_content['title_page'] = 'Rencana';
        $data['content'] = $this->load->view('partial/Diklat/Rencana', $data_content, true);
        $this->load->view('V_Diklat', $data);
    }
    public function realisasi()
    {
        $data = generate_page('Diklat', 'Diklat/realisasi', 'Admin');

        $data_content['title_page'] = 'Realisasi';
        $data['content'] = $this->load->view('partial/Diklat/realisasi', $data_content, true);
        $this->load->view('V_Diklat', $data);
    }
}

	

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */