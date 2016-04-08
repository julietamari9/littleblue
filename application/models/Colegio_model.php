<?php
// BACKEND
class Colegio_model extends CI_Model {

    var $table = 'colegio';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        
        $this->db->from($this->table);

      
    }

  function get_datatables($start)
    {
        $this->_get_datatables_query();
        
        $this->db->limit(10, $start);

        $this->db->order_by("nombre", "asc"); 

        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();

        return $query->row();
    }

        public function get_by_letter($letter)
    {
        $this->db->from($this->table);
        $this->db->like('nombre',$letter,'after');
        $query = $this->db->get();

        return $query->result();
    }

        public function get_like($search)
    {
        $this->db->from($this->table);
        $this->db->like('nombre',$search);
        
        $query = $this->db->get();


        return $query->result();
    }


}