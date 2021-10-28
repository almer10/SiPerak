<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ebook extends CI_Controller
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

    public function pegawai()
    {
        $data = generate_page('Ebook', 'Ebook/pegawai', 'Pegawai');

        $data_content['title_page'] = 'Ebook';
        $data['content'] = $this->load->view('partial/Ebook/Pegawai', $data_content, true);
        $this->load->view('V_Ebook', $data);
    }
    public function admin()
    {
        $data = generate_page('Ebook', 'Ebook/admin', 'Admin');

        $data_content['title_page'] = 'Ebook';
        $data['content'] = $this->load->view('partial/Ebook/Admin', $data_content, true);
        $this->load->view('V_Ebook', $data);
    }
}

	

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */