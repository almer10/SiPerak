<?php
defined('BASEPATH') or exit('No direct script access allowed');

class inbox extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Aspirasi');
    }

    public function index()
    {

        $queryAllAspirasi = $this->M_Aspirasi->getData();
        $DATA = array('queryAllAsp' => $queryAllAspirasi);
        $data = generate_page('inbox', 'inbox/index', 'admin');

        $data['content'] = $this->load->view('inbox/inbox',  $DATA, true);
        $this->load->view('V_Aspirasi', $data);
    }

    public function halaman_tambah()
    {
        $this->load->view('partial/inbox/inbox');
    }

    public function halaman_edit($id)
    {
        $queryAspirasiDetail = $this->M_Aspirasi->getDataDetail($id);
        $DATA = array('queryAspDetail' => $queryAspirasiDetail);
        $data = generate_page('inbox', 'inbox/halaman_edit', 'admin');
        $data['content'] = $this->load->view('inbox/inboxEdit',  $DATA, true);
        $this->load->view('V_Aspirasi', $data);
    }

    public function fungsiTambah()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $aspirasi = $this->input->post('aspirasi');


        $ArrInsert = array(
            'nik' => $nik,
            'nama' => $nama,
            'aspirasi' => $aspirasi
        );

        $this->M_Aspirasi->insertData($ArrInsert);
        $this->session->set_flashdata('msg_alert', 'Data Aspirasi berhasil ditambah');
        redirect(base_url('inbox/index'));
    }

    public function fungsiEdit()
    {
        $id = $this->input->post('id');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $aspirasi = $this->input->post('aspirasi');


        $ArrUpdate = array(
            'nik' => $nik,
            'nama' => $nama,
            'aspirasi' => $aspirasi

        );

        $this->M_Aspirasi->updateData($id, $ArrUpdate);
        $this->session->set_flashdata('msg_alert', 'Data Aspirasi berhasil diubah');
        redirect(base_url('inbox/index'));
    }

    public function fungsiDelete($id)
    {
        $this->M_Aspirasi->deleteData($id);
        $this->session->set_flashdata('msg_alert', 'Data Aspirasi berhasil dihapus');
        redirect(base_url('inbox/index'));
    }
}
