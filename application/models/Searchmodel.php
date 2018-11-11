<?php
class Searchmodel extends CI_Model
{

    public function __construct() {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('nim',$keyword);
        $query  =   $this->db->get('mahasiswa');
        return $query->result();
    }
}

?>