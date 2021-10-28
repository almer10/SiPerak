<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
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
        $data = generate_page('Report', 'Report/index', 'Admin');

        $data_content['title_page'] = 'Report';
        $data['content'] = $this->load->view('partial/Report/Report', $data_content, true);
        $this->load->view('V_Report', $data);
    }
}

	

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */