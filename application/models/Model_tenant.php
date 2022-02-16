<?php

class Model_tenant extends CI_Model
{
    public function data_produk()
    {
        return  $this->db->get_where('tb_products', ['id_pemilik' => $this->session->userdata('id_user')]);
    }

    public function data_pesanan()
    {
        return  $this->db->get_where('tb_detail_transactions', ['id_pemilik' => $this->session->userdata('id_user')]);
    }

    public function data_tenant()
    {
        return  $this->db->get_where('tb_users', ['role_id' => 3]);
    }
}
