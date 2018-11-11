<?php
class Searchmodel extends CI_Model
{

    public function __construct() {
        parent::__construct();
    }

    function search($nim)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('nim', $nim);
        $query = $this->db->get();
        return $query->result();
    }
}

?>