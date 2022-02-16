<?php

class Model_admin extends CI_Model
{
    //  ========== DATA DASHBOARD ==========

    public function total_samsung()
    {
        return $this->db->get_where('tb_detail_transactions', ['kategori' => 1]);
    }

    public function total_xiaomi()
    {
        return $this->db->get_where('tb_detail_transactions', ['kategori' => 2]);
    }

    public function total_oppo()
    {
        return $this->db->get_where('tb_detail_transactions', ['kategori' => 3]);
    }

    public function total_vivo()
    {
        return $this->db->get_where('tb_detail_transactions', ['kategori' => 4]);
    }

    public function total_realme()
    {
        return $this->db->get_where('tb_detail_transactions', ['kategori' => 5]);
    }

    public function total_iphone()
    {
        return $this->db->get_where('tb_detail_transactions', ['kategori' => 6]);
    }

    public function total_poco()
    {
        return $this->db->get_where('tb_detail_transactions', ['kategori' => 7]);
    }

    public function total_sony()
    {
        return $this->db->get_where('tb_detail_transactions', ['kategori' => 8]);
    }
    //  ========== DATA DASHBOARD ==========










    //  ========== DATA MEMBER ==========
    public function data_member()
    {
        return $this->db->get_where('tb_users', ['role_id' => 2]);
    }

    function qrcode()
    {
        return $this->db->get_where('tb_users', ['role_id' => 2]);
    }

    public function number_member()
    {
        $this->db->select_max('id_user');
        $this->db->from('tb_users');
        $this->db->like('id_user', 'MEM');
        return $this->db->get();
    }

    public function tambah_member($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detail_member($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function edit_member($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_member($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_member($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    //  ========== DATA MEMBER ==========





    // ========== DATA TENANT ==========
    public function data_tenant()
    {
        return $this->db->get_where('tb_users', ['role_id' => 3]);
    }

    public function tambah_tenant($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detail_tenant($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function edit_tenant($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_tenant($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_tenant($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // ========== DATA TENANT ==========





    // ========== DATA UNIT ==========
    public function data_unit()
    {
        $this->db->order_by('nama_unit', 'ASC');
        return $this->db->get('tb_units');
    }

    public function tambah_unit($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_unit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_unit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_unit($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // ========== DATA UNIT ==========





    // ========== DATA TYPE ==========
    public function data_type()
    {
        $this->db->order_by('nama_jenis', 'ASC');
        return $this->db->get('tb_types');
    }

    public function tambah_type($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_type($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_type($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_type($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // ========== DATA TYPE ==========





    // ========== DATA KATEGORI ==========
    public function data_kategori()
    {
        $this->db->order_by('nama_kategori', 'ASC');
        return $this->db->get('tb_categories');
    }

    public function tambah_kategori($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_kategori($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_kategori($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete_kategori($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // ========== DATA TYPE ==========





    // ========== DATA PRODUK ==========
    public function number_produk()
    {
        $this->db->select_max('kode_produk');
        $this->db->from('tb_products');
        $this->db->like('kode_produk', 'PRO');
        return $this->db->get();
    }

    public function data_produk()
    {
        $this->db->order_by('tanggal_masuk', 'DESC');
        return $this->db->get('tb_products');
    }

    public function tambah_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detail_produk($where, $table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->join('tb_types', 'tb_types.kode_jenis = tb_products.jenis');
        $this->db->join('tb_units', 'tb_units.kode_unit = tb_products.satuan');
        $this->db->join('tb_categories', 'tb_categories.kode_kategori = tb_products.kategori');
        return $this->db->get();
    }

    public function edit_produk($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_produk($where, $data, $table)
    {
        if ($data['gambar'] == NULL) {
            unset($data['gambar']);
        } else {
            unlink('uploads/' . $table['gambar']);
        }
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_produk($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // ========== DATA PRODUK ==========





    // ========== DATA TRANSAKSI ==========
    function data_pesanan()
    {
        return $this->db->get('tb_transactions');
    }

    function detail_pesanan($id)
    {
        $this->db->select('*');
        $this->db->from('tb_transactions');
        $this->db->where('tb_transactions.no_transaksi', $id);
        $this->db->join('tb_detail_transactions', 'tb_transactions.no_transaksi = tb_detail_transactions.no_transaksi');
        return $this->db->get();
    }

    function edit_pesanan($id)
    {
        return $this->db->get_where('tb_transactions', ['no_transaksi' => $id]);
    }

    function update_pesanan($data, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // ========== DATA TRANSAKSI ==========
}
