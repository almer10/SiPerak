<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produktivitas extends CI_Controller
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
        $data = generate_page('Produktivitas SDM', 'Produktivitas/index', 'Admin');

        $data_content['title_page'] = 'Dokumen SDM';
        $data['content'] = $this->load->view('partial/Produktivitas/Admin', $data_content, true);
        $this->load->view('V_Produktivitas', $data);
    }
}

	

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */