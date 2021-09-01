<?php

class M_bayar extends CI_Model
{
    function tampil_data()
    {
        $this->db->order_by('tgl1', 'desc');
        return $this->db->get('tb_sewa');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function view()
    {
        return $this->db->get('tb_sewa')->result();
    }

    public function view_row()
    {
        return $this->db->get('tb_sewa')->result();
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function cari()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from tb_sewa where tempat like '%$cari%' ");
        return $data->result();

    }
}
