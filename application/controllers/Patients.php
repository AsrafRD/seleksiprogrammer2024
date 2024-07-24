<?php 
class Patients extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Patient_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['patients'] = $this->Patient_model->get_all();
        $this->load->view('patients/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'gender' => $this->input->post('gender'),
                'address' => $this->input->post('address')
            ];
            $this->Patient_model->insert($data);
            redirect('patients');
        }
        $this->load->view('patients/create');
    }

    public function edit($id) {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'gender' => $this->input->post('gender'),
                'address' => $this->input->post('address')
            ];
            $this->Patient_model->update($id, $data);
            redirect('patients');
        }
        $data['patient'] = $this->Patient_model->get_by_id($id);
        $this->load->view('patients/edit', $data);
    }

    public function delete($id) {
        $this->Patient_model->delete($id);
        redirect('patients');
    }
}

?>