<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('dosen_model');
    }

    public function index() {
        $data['dosen'] = $this->dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->view('templates/header');
        $this->load->view('dosen/form_dosen');
        $this->load->view('templates/footer');
    }

    public function insert() {
        $data = array(
            'nidn' => $this->input->post('nidn'),
            'namadosen' => $this->input->post('namadosen'),
            'alamat' => $this->input->post('alamat'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp')
        );

        if ($this->dosen_model->insert_dosen($data)) {
            $this->session->set_flashdata('success', 'Dosen berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan dosen');
        }
        redirect('dosen');
    }

    public function edit($id) {
        $data['dosen'] = $this->dosen_model->get_dosen_by_id($id);
        $this->load->view('templates/header');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data = array(
            'nidn' => $this->input->post('nidn'),
            'namadosen' => $this->input->post('namadosen'),
            'alamat' => $this->input->post('alamat'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp')
        );

        if ($this->dosen_model->update_dosen($id, $data)) {
            $this->session->set_flashdata('success', 'Data dosen berhasil diperbarui');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui data dosen');
        }
        redirect('dosen');
    }

    public function hapus($id) {
        if ($this->dosen_model->delete_dosen($id)) {
            $this->session->set_flashdata('success', 'Dosen berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus dosen');
        }
        redirect('dosen');
    }
}