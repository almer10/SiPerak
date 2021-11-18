<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aspirasi extends CI_Controller
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
        $data = generate_page('Aspirasi', 'Aspirasi/index', 'Pegawai');

        $data_content['title_page'] = 'Aspirasi';
        $data['content'] = $this->load->view('partial/Aspirasi/Aspirasi', $data_content, true);
        $this->load->view('V_Aspirasi', $data);
    }

    public function simpan_data()
    {
        $data['list_data'] = $this->M_Aspirasi->get_master_inbox();
        $data = generate_page('Aspirasi', 'Aspirasi/simpan_data', 'Pegawai');

        $data_content['title_page'] = 'Aspirasi';
        $data['nama'] = $this->M_Aspirasi->get_nama();
        $data['nipp'] = $this->M_Aspirasi->get_nipp();
        $data['aspirasi'] = $this->M_Aspirasi->get_aspirasi();
        $this->load->view('V_Aspirasi', $data);
    }

    public function eksekusi_edit()
    {
        $this->M_Aspirasi->eksekusi_edit();
    }
}
/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */