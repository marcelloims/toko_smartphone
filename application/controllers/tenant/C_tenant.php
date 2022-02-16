<?php

class C_tenant extends CI_Controller
{

    public function dashboard()
    {
        $data['produk']     = $this->Model_tenant->data_produk()->result();
        $data['pesanan']    = $this->Model_tenant->data_pesanan()->result();
        $data['tenant']     = $this->Model_tenant->data_tenant()->num_rows();

        $this->load->view('tenant/v_dashboard', $data);
    }

    public function data_produk()
    {
        $data['produk']     = $this->Model_tenant->data_produk()->result();
        $this->load->view('tenant/v_data_produk', $data);
    }

    public function data_pesanan()
    {
        $data['pesanan']     = $this->Model_tenant->data_pesanan()->result();
        $this->load->view('tenant/v_pesanan', $data);
    }
}
