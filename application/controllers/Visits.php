<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visits extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Visit_model');
        $this->load->model('Patient_model');
        $this->load->helper('url'); // Tambahkan baris ini untuk memuat helper URL
    }

    public function index() {
        $data['visits'] = $this->Visit_model->get_all();
        $this->load->view('visits/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = array(
                'patient_id' => $this->input->post('patient_id'),
                'name' => $this->input->post('name'),
                'clinic_name' => $this->input->post('clinic_name'),
                'tanggal_daftar' => $this->input->post('tanggal_daftar'),
                'tanggal_mulai_periksa' => $this->input->post('tanggal_mulai_periksa'),
                'tanggal_selesai_periksa' => $this->input->post('tanggal_selesai_periksa'),
                'doctor_name' => $this->input->post('doctor_name')
            );
            $this->Visit_model->insert($data);
            redirect('visits');
        } else {
            $data['patients'] = $this->Patient_model->get_all();
            $this->load->view('visits/create', $data);
        }
    }

    public function edit($id) {
        if ($this->input->post()) {
            $data = array(
                'patient_id' => $this->input->post('patient_id'),
                'name' => $this->input->post('name'),
                'clinic_name' => $this->input->post('clinic_name'),
                'tanggal_daftar' => $this->input->post('tanggal_daftar'),
                'tanggal_mulai_periksa' => $this->input->post('tanggal_mulai_periksa'),
                'tanggal_selesai_periksa' => $this->input->post('tanggal_selesai_periksa'),
                'doctor_name' => $this->input->post('doctor_name')
            );
            $this->Visit_model->update($id, $data);
            redirect('visits');
        } else {
            $data['visit'] = $this->Visit_model->get_by_id($id);
            $data['patients'] = $this->Patient_model->get_all();
            $this->load->view('visits/edit', $data);
        }
    }

    public function delete($id) {
        $this->Visit_model->delete($id);
        redirect('visits');
    }
}
?>
