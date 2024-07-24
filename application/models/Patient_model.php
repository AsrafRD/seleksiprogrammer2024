<?php
class Patient_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all() {
        $query = $this->db->get('patients');
        return $query->result_array();
    }

    public function insert($data) {
        return $this->db->insert('patients', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('patients', ['id' => $id])->row_array();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('patients', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('patients');
    }
}

?>
