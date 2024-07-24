<?php
class Visit_model extends CI_Model {
    public function get_all() {
        return $this->db->get('visits')->result_array();
    }

    public function insert($data) {
        return $this->db->insert('visits', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('visits', ['id' => $id])->row_array();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('visits', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('visits');
    }
}
?>
