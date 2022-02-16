<?php

class C_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum</strong> Login.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            ');
            redirect('c_auth/login');
        }
    }





    // ========== DASHBOARD ==========
    public function dashboard()
    {
        $data['pesanan']    = $this->Model_admin->data_pesanan()->num_rows();
        $data['produk']     = $this->Model_admin->data_produk()->result();
        $data['member']     = $this->Model_admin->data_member()->num_rows();
        $data['samsung']    = $this->Model_admin->total_samsung()->result();
        $data['xiaomi']     = $this->Model_admin->total_xiaomi()->result();
        $data['iphone']     = $this->Model_admin->total_iphone()->result();
        $data['realme']     = $this->Model_admin->total_realme()->result();
        $data['poco']       = $this->Model_admin->total_poco()->result();
        $data['oppo']       = $this->Model_admin->total_oppo()->result();
        $data['vivo']       = $this->Model_admin->total_vivo()->result();
        $data['sony']       = $this->Model_admin->total_sony()->result();
        $this->load->view('admin/v_dashboard', $data);
    }
    // ========== DASHBOARD ==========






    // ========== DATA MEMBER ==========
    public function data_member()
    {
        $kode   = "MEM-";
        $number = $this->Model_admin->number_member()->row();
        $result = substr($number->id_user, 4);

        $data['id_member']  = $kode . ($result + 1);
        $data['member']     = $this->Model_admin->data_member()->result();

        $this->load->view('admin/member/v_data_member', $data);
    }

    function qrcode($kode)
    {
        qrcode::png(
            $qrcode = $kode,
            $outfile = false,
            $level = QR_ECLEVEL_H,
            $size = 2,
            $margin = 1
        );
    }

    public function tambah_member()
    {
        $id_member      = $this->input->post('id_member');
        $nama_member    = $this->input->post('nama_member');
        $telepon        = $this->input->post('telepon');
        $email          = $this->input->post('email');
        $username       = $this->input->post('username');
        $password       = $this->input->post('password');
        $alamat         = $this->input->post('alamat');

        $data = [
            'id_user'   => $id_member,
            'nama_user' => $nama_member,
            'alamat'    => $alamat,
            'telepon'   => $telepon,
            'email'     => $email,
            'username'  => $username,
            'password'  => $password,
            'role_id'   => 2,
            'image'     => "user.jpg"
        ];

        $this->Model_admin->tambah_member($data, 'tb_users');
        $this->session->set_flashdata('pesan', 'Berhasil disimpan');
        redirect('admin/c_admin/data_member');
    }

    public function detail_member($id)
    {
        $where = ['id_user' => $id];
        $data['detail'] = $this->Model_admin->detail_member($where, 'tb_users')->row_array();

        $this->load->view('admin/member/v_detail_member', $data);
    }

    public function edit_member($id)
    {
        $where = ['id_user' => $id];
        $data['edit'] = $this->Model_admin->edit_member($where, 'tb_users')->row_array();

        $this->load->view('admin/member/v_edit_member', $data);
    }

    public function update_member()
    {
        $id_member      = $this->input->post('id_member');
        $nama_member    = $this->input->post('nama_member');
        $telepon        = $this->input->post('telepon');
        $email          = $this->input->post('email');
        $username       = $this->input->post('username');
        $password       = $this->input->post('password');
        $alamat         = $this->input->post('alamat');

        $data = [
            'nama_user' => $nama_member,
            'alamat'    => $alamat,
            'telepon'   => $telepon,
            'email'     => $email,
            'username'  => $username,
            'password'  => $password,
            'role_id'   => 2
        ];

        $where = ['id_user' => $id_member];

        $this->Model_admin->update_member($where, $data, 'tb_users');
        $this->session->set_flashdata('pesan', 'Berhasil diupdate');
        redirect('admin/c_admin/data_member');
    }

    public function hapus_member($id)
    {
        $where = ['id_user' => $id];
        $this->Model_admin->hapus_member($where, 'tb_users');
        $this->session->set_flashdata('pesan', 'Berhasil dihapus');
        redirect('admin/c_admin/data_member');
    }
    // ========== DATA MEMBER ==========






    // ========== DATA TENANT ==========
    function data_tenant()
    {
        $data['tenant'] = $this->Model_admin->data_tenant()->result();
        $this->load->view('admin/tenant/v_data_tenant', $data);
    }

    public function tambah_tenant()
    {
        $nama_tenant    = $this->input->post('nama_tenant');
        $telepon        = $this->input->post('telepon');
        $email          = $this->input->post('email');
        $username       = $this->input->post('username');
        $password       = $this->input->post('password');
        $alamat         = $this->input->post('alamat');

        $data = [
            'nama_user' => $nama_tenant,
            'alamat'    => $alamat,
            'telepon'   => $telepon,
            'email'     => $email,
            'username'  => $username,
            'password'  => $password,
            'role_id'   => 3,
            'image'     => "user.jpg"
        ];

        $this->Model_admin->tambah_tenant($data, 'tb_users');
        $this->session->set_flashdata('pesan', 'Berhasil disimpan');
        redirect('admin/c_admin/data_tenant');
    }

    public function detail_tenant($id)
    {
        $where = ['id_user' => $id];
        $data['detail'] = $this->Model_admin->detail_tenant($where, 'tb_users')->row_array();

        $this->load->view('admin/tenant/v_detail_tenant', $data);
    }

    public function edit_tenant($id)
    {
        $where = ['id_user' => $id];
        $data['edit'] = $this->Model_admin->edit_tenant($where, 'tb_users')->row_array();

        $this->load->view('admin/tenant/v_edit_tenant', $data);
    }

    public function update_tenant()
    {
        $id_user        = $this->input->post('id_user');
        $nama_tenant    = $this->input->post('nama_tenant');
        $telepon        = $this->input->post('telepon');
        $email          = $this->input->post('email');
        $username       = $this->input->post('username');
        $password       = $this->input->post('password');
        $alamat         = $this->input->post('alamat');

        $data = [
            'nama_user' => $nama_tenant,
            'alamat'    => $alamat,
            'telepon'   => $telepon,
            'email'     => $email,
            'username'  => $username,
            'password'  => $password,
            'role_id'   => 3,
            'image'     => "user.jpg"
        ];

        $where = ['id_user' => $id_user];

        $this->Model_admin->update_tenant($data, $where, 'tb_users');
        $this->session->set_flashdata('pesan', 'Berhasil diupdate');
        redirect('admin/c_admin/data_tenant');
    }

    public function hapus_tenant($id)
    {
        $where = ['id_user' => $id];
        $this->Model_admin->hapus_tenant($where, 'tb_users');
        $this->session->set_flashdata('pesan', 'Berhasil dihapus');
        redirect('admin/c_admin/data_tenant');
    }
    // ========== DATA TENANT ==========





    // ========== DATA UNIT ==========
    public function data_unit()
    {
        $data['unit']   = $this->Model_admin->data_unit()->result();
        $this->load->view('admin/unit/v_data_unit', $data);
    }

    public function tambah_unit()
    {
        $nama_unit          = $this->input->post('nama_unit');
        $keterangan_unit    = $this->input->post('keterangan_unit');

        $data = [
            'nama_unit'         => $nama_unit,
            'keterangan_unit'   => $keterangan_unit
        ];

        $this->Model_admin->tambah_unit($data, 'tb_units');
        $this->session->set_flashdata('pesan', 'Berhasil disimpan');
        redirect('admin/c_admin/data_unit', $data);
    }

    public function edit_unit($id)
    {
        $where          = ['kode_unit' => $id];
        $data['edit']   = $this->Model_admin->edit_unit($where, 'tb_units')->row_array();

        $this->load->view('admin/unit/v_edit_unit', $data);
    }

    public function update_unit()
    {
        $kode_unit          = $this->input->post('kode_unit');
        $nama_unit          = $this->input->post('nama_unit');
        $keterangan_unit    = $this->input->post('keterangan_unit');

        $data = [
            'nama_unit'         => $nama_unit,
            'keterangan_unit'   => $keterangan_unit
        ];

        $where = ['kode_unit' => $kode_unit];

        $this->Model_admin->update_unit($where, $data, 'tb_units');
        $this->session->set_flashdata('pesan', 'Berhasil diubah');
        redirect('admin/c_admin/data_unit', $data);
    }

    public function hapus_unit($id)
    {
        $where = ['kode_unit' => $id];
        $this->Model_admin->delete_unit($where, 'tb_units');
        $this->session->set_flashdata('pesan', 'Berhasil dihapus');
        redirect('admin/c_admin/data_unit');
    }
    // ========== DATA UNIT ==========





    // ========== DATA TYPE ==========
    public function data_type()
    {
        $data['type']   = $this->Model_admin->data_type()->result();
        $this->load->view('admin/type/v_data_type', $data);
    }

    public function tambah_type()
    {
        $nama_type          = $this->input->post('nama_type');
        $keterangan_type    = $this->input->post('keterangan_type');

        $data = [
            'nama_jenis'         => $nama_type,
            'keterangan_jenis'   => $keterangan_type
        ];

        $this->Model_admin->tambah_type($data, 'tb_types');
        $this->session->set_flashdata('pesan', 'Berhasil disimpan');
        redirect('admin/c_admin/data_type', $data);
    }

    public function edit_type($id)
    {
        $where          = ['kode_jenis' => $id];
        $data['edit']   = $this->Model_admin->edit_type($where, 'tb_types')->row_array();

        $this->load->view('admin/type/v_edit_type', $data);
    }

    public function update_type()
    {
        $kode_type          = $this->input->post('kode_jenis');
        $nama_type          = $this->input->post('nama_jenis');
        $keterangan_type    = $this->input->post('keterangan_jenis');

        $data = [
            'nama_jenis'         => $nama_type,
            'keterangan_jenis'   => $keterangan_type
        ];

        $where = ['kode_jenis' => $kode_type];

        $this->Model_admin->update_type($where, $data, 'tb_types');
        $this->session->set_flashdata('pesan', 'Berhasil diubah');
        redirect('admin/c_admin/data_type', $data);
    }

    public function hapus_type($id)
    {
        $where = ['kode_jenis' => $id];
        $this->Model_admin->delete_type($where, 'tb_types');
        $this->session->set_flashdata('pesan', 'Berhasil dihapus');
        redirect('admin/c_admin/data_type');
    }
    // ========== DATA TYPE ==========





    // ========== DATA KATEGORI ==========
    public function data_kategori()
    {
        $data['kategori']   = $this->Model_admin->data_kategori()->result();
        $this->load->view('admin/kategori/v_data_kategori', $data);
    }

    public function tambah_kategori()
    {
        $nama_kategori          = $this->input->post('nama_kategori');
        $keterangan_kategori    = $this->input->post('keterangan_kategori');

        $data = [
            'nama_kategori'         => $nama_kategori,
            'keterangan_kategori'   => $keterangan_kategori
        ];

        $this->Model_admin->tambah_kategori($data, 'tb_categories');
        $this->session->set_flashdata('pesan', 'Berhasil disimpan');
        redirect('admin/c_admin/data_kategori', $data);
    }

    public function edit_kategori($id)
    {
        $where          = ['kode_kategori' => $id];
        $data['edit']   = $this->Model_admin->edit_kategori($where, 'tb_categories')->row_array();

        $this->load->view('admin/kategori/v_edit_kategori', $data);
    }

    public function update_kategori()
    {
        $kode_kategori          = $this->input->post('kode_kategori');
        $nama_kategori          = $this->input->post('nama_kategori');
        $keterangan_kategori    = $this->input->post('keterangan_kategori');

        $data = [
            'nama_kategori'         => $nama_kategori,
            'keterangan_kategori'   => $keterangan_kategori
        ];

        $where = ['kode_kategori' => $kode_kategori];

        $this->Model_admin->update_kategori($where, $data, 'tb_categories');
        $this->session->set_flashdata('pesan', 'Berhasil diubah');
        redirect('admin/c_admin/data_kategori', $data);
    }

    public function hapus_kategori($id)
    {
        $where = ['kode_kategori' => $id];
        $this->Model_admin->delete_kategori($where, 'tb_categories');
        $this->session->set_flashdata('pesan', 'Berhasil dihapus');
        redirect('admin/c_admin/data_kategori');
    }
    // ========== DATA KATEGORI ==========





    // ========== DATA DATA Produk ==========
    public function data_produk()
    {
        $kode   = "PRO-";
        $number = $this->Model_admin->number_produk()->row();
        $result = substr($number->kode_produk, 4);
        $data['id_produk']  = $kode . ($result + 1);


        $data['kategori']   = $this->Model_admin->data_kategori()->result();
        $data['satuan']     = $this->Model_admin->data_unit()->result();
        $data['jenis']      = $this->Model_admin->data_type()->result();
        $data['produk']     = $this->Model_admin->data_produk()->result();
        $data['pemilik']    = $this->Model_admin->data_tenant()->result();

        $this->load->view('admin/produk/v_data_produk', $data);
    }

    public function tambah_produk()
    {
        date_default_timezone_set("Asia/Makassar");

        $nama_produk    = $this->input->post('nama_produk');
        $harga          = $this->input->post('harga');
        $satuan         = $this->input->post('satuan');
        $berat          = $this->input->post('berat');
        $id_pemilik     = $this->input->post('id_pemilik');
        $jenis          = $this->input->post('jenis');
        $kategori       = $this->input->post('kategori');
        $qty            = $this->input->post('qty');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal di Upload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }


        $data = [
            'nama_produk'   => $nama_produk,
            'harga'         => $harga,
            'satuan'        => $satuan,
            'berat'         => $berat,
            'jenis'         => $jenis,
            'kategori'      => $kategori,
            'qty'           => $qty,
            'gambar'        => $gambar,
            'tanggal_masuk' => date('Y-m-d H:i:s'),
            'id_pemilik'    => $id_pemilik
        ];

        $this->Model_admin->tambah_produk($data, 'tb_products');
        $this->session->set_flashdata('pesan', 'Berhasil disimpan');
        redirect('admin/c_admin/data_produk');
    }

    public function detail_produk($kode)
    {
        $where = ['kode_produk' => $kode];
        $data['detail'] = $this->Model_admin->detail_produk($where, 'tb_products')->row();
        // var_dump($data);
        // die;
        echo json_encode($data);
    }

    public function edit_produk($id)
    {
        $where              = ['kode_produk' => $id];
        $data['edit']       = $this->Model_admin->edit_produk($where, 'tb_products')->row_array();
        $data['kategori']   = $this->Model_admin->data_kategori()->result();
        $data['satuan']     = $this->Model_admin->data_unit()->result();
        $data['jenis']      = $this->Model_admin->data_type()->result();
        $data['pemilik']    = $this->Model_admin->data_tenant()->result();

        $this->load->view('admin/produk/v_edit_produk', $data);
    }

    public function update_produk()
    {
        $kode_produk    = $this->input->post('kode_produk');
        $nama_produk    = $this->input->post('nama_produk');
        $harga          = $this->input->post('harga');
        $satuan         = $this->input->post('satuan');
        $berat          = $this->input->post('berat');
        $id_pemilik     = $this->input->post('id_pemilik');
        $jenis          = $this->input->post('jenis');
        $kategori       = $this->input->post('kategori');
        $qty            = $this->input->post('qty');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal di Upload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }


        $data = [
            'nama_produk'   => $nama_produk,
            'harga'         => $harga,
            'satuan'        => $satuan,
            'berat'         => $berat,
            'jenis'         => $jenis,
            'kategori'      => $kategori,
            'qty'           => $qty,
            'gambar'        => $gambar,
            'id_pemilik'    => $id_pemilik
        ];

        $where = ['kode_produk' => $kode_produk];

        $this->Model_admin->update_produk($where, $data, 'tb_products');
        $this->session->set_flashdata('pesan', 'Berhasil diubah');
        redirect('admin/c_admin/data_produk');
    }

    public function hapus_produk($id)
    {
        $where = ['kode_produk' => $id];
        $this->Model_admin->hapus_produk($where, 'tb_products');
        $this->session->set_flashdata('pesan', 'Berhasil dihapus');
        redirect('admin/c_admin/data_produk');
    }
    // ========== DATA DATA Produk ==========





    // ========== DATA TRANSAKSI ==========
    function data_pesanan()
    {
        $data['pesanan']    = $this->Model_admin->data_pesanan()->result();
        $this->load->view('admin/transaksi/v_data_pesanan', $data);
    }

    function detail_pesanan($id)
    {
        $data['pesanan']    = $this->Model_admin->detail_pesanan($id)->row();
        $data['detail']     = $this->Model_admin->detail_pesanan($id)->result_array();
        $this->load->view('admin/transaksi/v_detail_pesanan', $data);
    }

    function edit_pesanan($id)
    {
        $data['status'] = ['In Process', 'Delevery', 'Success'];
        $data['edit']   = $this->Model_admin->edit_pesanan($id)->row();
        $this->load->view('admin/transaksi/v_edit_pesanan', $data);
    }

    function update_pesanan()
    {
        $data   = ['status' => $this->input->post('status')];
        $where  = ['no_transaksi' => $this->input->post('invoice')];

        $this->Model_admin->update_pesanan($data, $where, 'tb_transactions');
        $this->session->set_flashdata('pesan', 'Berhasil diubah');
        redirect('admin/c_admin/data_pesanan');
    }
    // ========== DATA TRANSAKSI ==========
}
