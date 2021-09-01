<?php

class M_sewa extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_users');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function view()
    {
        return $this->db->get('tbl_users')->result();
    }

    public function view_row()
    {
        return $this->db->get('tbl_users')->result();
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
}
