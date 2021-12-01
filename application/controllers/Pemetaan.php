<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemetaan extends CI_Controller
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

    public function index()
    {
        $data = generate_page('Pemetaan', 'Pemetaan/index', 'Admin');

        $data_content['title_page'] = 'Pemetaan';
        $data['content'] = $this->load->view('partial/Pemetaan/Pemetaan', $data_content, true);
        $this->load->view('V_Pemetaan', $data);
    }
}

	

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */