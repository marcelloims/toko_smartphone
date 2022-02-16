<?php

class C_customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
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

    function qrcode($kode)
    {
        qrcode::png(
            $qrcode = $kode,
            $outfile = false,
            $level = QR_ECLEVEL_H,
            $size = 2,
            $margin = 1,
        );
    }



    function index()
    {
        // config pagination
        $config['base_url']     = 'http://localhost/toko_smartphone/customer/c_customer/index';
        $config['total_rows']   = $this->Model_customer->total_produk();
        $config['per_page']     = 10;

        // Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->Model_customer->data_produk($config['per_page'], $data['start'])->result();
        $this->load->view('customer/landingpage/index', $data);
    }

    function samsung()
    {
        // config pagination
        $config['base_url']     = 'http://localhost/toko_smartphone/customer/c_customer/samsung';
        $config['total_rows']   = $this->Model_customer->total_samsung();
        $config['per_page']     = 10;

        // Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->Model_customer->samsung($config['per_page'], $data['start'])->result();

        $this->load->view('customer/produk/v_samsung', $data);
    }

    function apple()
    {
        // config pagination
        $config['base_url']     = 'http://localhost/toko_smartphone/customer/c_customer/apple';
        $config['total_rows']   = $this->Model_customer->total_apple();
        $config['per_page']     = 10;

        // Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->Model_customer->apple($config['per_page'], $data['start'])->result();

        $this->load->view('customer/produk/v_apple', $data);
    }

    function xiaomi()
    {
        // config pagination
        $config['base_url']     = 'http://localhost/toko_smartphone/customer/c_customer/xiaomi';
        $config['total_rows']   = $this->Model_customer->total_xiaomi();
        $config['per_page']     = 10;

        // Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->Model_customer->xiaomi($config['per_page'], $data['start'])->result();

        $this->load->view('customer/produk/v_xiaomi', $data);
    }

    function realme()
    {
        // config pagination
        $config['base_url']     = 'http://localhost/toko_smartphone/customer/c_customer/realme';
        $config['total_rows']   = $this->Model_customer->total_realme();
        $config['per_page']     = 10;

        // Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->Model_customer->realme($config['per_page'], $data['start'])->result();

        $this->load->view('customer/produk/v_realme', $data);
    }

    function poco()
    {
        // config pagination
        $config['base_url']     = 'http://localhost/toko_smartphone/customer/c_customer/poco';
        $config['total_rows']   = $this->Model_customer->total_poco();
        $config['per_page']     = 10;

        // Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->Model_customer->poco($config['per_page'], $data['start'])->result();

        $this->load->view('customer/produk/v_poco', $data);
    }

    function oppo()
    {
        // config pagination
        $config['base_url']     = 'http://localhost/toko_smartphone/customer/c_customer/oppo';
        $config['total_rows']   = $this->Model_customer->total_oppo();
        $config['per_page']     = 10;

        // Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->Model_customer->oppo($config['per_page'], $data['start'])->result();

        $this->load->view('customer/produk/v_oppo', $data);
    }

    function vivo()
    {
        // config pagination
        $config['base_url']     = 'http://localhost/toko_smartphone/customer/c_customer/vivo';
        $config['total_rows']   = $this->Model_customer->total_vivo();
        $config['per_page']     = 10;

        // Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->Model_customer->vivo($config['per_page'], $data['start'])->result();

        $this->load->view('customer/produk/v_vivo', $data);
    }

    function sony()
    {
        // config pagination
        $config['base_url']     = 'http://localhost/toko_smartphone/customer/c_customer/sony';
        $config['total_rows']   = $this->Model_customer->total_sony();
        $config['per_page']     = 10;

        // Styling Pagination
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->Model_customer->sony($config['per_page'], $data['start'])->result();

        $this->load->view('customer/produk/v_sony', $data);
    }















    function detail_produk($id)
    {
        $where = ['kode_produk' => $id];
        $data['detail'] = $this->Model_customer->detail_produk($where, 'tb_products')->row_array();
        $this->load->view('customer/produk/v_detail_produk', $data);
    }

    function add_to_cart($id)
    {

        $qty    = $this->input->post('qty');
        $size   = $this->input->post('size');
        $berat  = $this->input->post('berat');


        $produk = $this->Model_customer->add_produk($id);

        $data = array(
            'id'        => $produk->kode_produk,
            'qty'       => $qty,
            'price'     => $produk->harga,
            'name'      => $produk->nama_produk,
            'options'   => array('size' => $size),
            'image'     => $produk->gambar,
            'berat'     => $berat,
            'kategori'  => $produk->kategori,
            'id_pemilik' => $produk->id_pemilik,
            'stock'     => $produk->qty
        );


        $this->cart->insert($data);
        $this->session->set_flashdata('tambah_keranjang', 'Telah ditambahkan barang!');
        redirect('customer/c_customer/index');
    }

    function detail_keranjang()
    {
        $this->load->view('customer/keranjang/v_detail_keranjang');
    }

    function hapus_keranjang()
    {
        $this->cart->destroy();
        $this->session->set_flashdata('hapus_keranjang', 'Kosong!');
        redirect('customer/c_customer/index');
    }

    function hapus_items($rowid)
    {
        $this->cart->remove($rowid);
        redirect('customer/c_customer/detail_keranjang');
    }

    function update_keranjang()
    {
        $qty    = $this->input->post('qty');
        $kode   = $this->input->post('kode');

        $data = [
            'rowid' => $kode,
            'qty'   => $qty
        ];

        $this->cart->update($data);

        $res = $this->cart->contents();
        echo json_encode($res);
    }

    function checkout()
    {
        $data['ongkir'] = '';
        if (count($_POST)) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "origin=" . $this->input->post('kota') . "&destination=" . $this->input->post('kota_penerima') . "&weight=" . $this->input->post('berat') . "&courier=" . $this->input->post('ekspedisi'),
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded",
                    "key: bcd91342ee0d1c4b83b3e49fbf3b133c"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $data['ongkir'] = $response;
            }
        }
        $data['bank']       = ['BNI-xxxx-xxx-xxx', 'BRI-xxxx-xxx-xxx', 'MANDIRI-xxxx-xxx-xxx', 'BCA-xxxx-xxx-xxx'];
        $data['pembayaran'] = ['COD | Bayar di Tempat', 'Upload Bukti Bayar'];
        $this->load->view('customer/keranjang/v_checkout', $data);
    }

    function kota($prov_id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=" . $prov_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: bcd91342ee0d1c4b83b3e49fbf3b133c"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $kota = json_decode($response, true);

            if ($kota['rajaongkir']['status']['code'] == 200) {
                foreach ($kota['rajaongkir']['results'] as $kot)
                    echo "<option value='$kot[city_id]'>$kot[city_name]</option>";
            }
        }
    }

    function pembayaran()
    {
        $is_processed = $this->Model_customer->pembayaran();

        if ($is_processed) {
            $this->cart->destroy();
            $this->session->set_flashdata('order', 'Pesanan kamu sedang dalam proses');
            redirect('customer/c_customer/index');
        } else {
            echo "Maaf, Pesanan Anda Gagal Di Proses";
        }
    }


    function data_pesanan()
    {
        $data['pesanan']    = $this->Model_customer->data_pesanan()->result();
        $this->load->view('customer/pesanan/v_pesanan', $data);
    }

    function detail_pesanan($no)
    {
        $data['pesanan']    = $this->Model_customer->detail_pesanan($no)->row();
        $data['detail']    = $this->Model_customer->detail_pesanan($no)->result_array();
        $this->load->view('customer/pesanan/v_detail_pesanan', $data);
    }

    // function total_items()
    // {
    //     $data = $this->cart->total_items();
    //     echo json_encode($data);
    // }

    // function refresh_cart()
    // {
    //     $data = $this->cart->total_items();
    //     echo json_encode($data);
    // }


    function edit_akun($id)
    {
        $where          = ['id_user' => $id];
        $data['user']   = $this->Model_customer->edit_akun($where, 'tb_users')->row();

        $this->load->view('customer/user/v_edit', $data);
    }

    function update_akun()
    {
        $id         = $this->session->userdata('id_user');
        $nama_user  = $this->input->post('nama_user');
        $alamat     = $this->input->post('alamat');
        $email      = $this->input->post('email');
        $username   = $this->input->post('username');
        $image      =  $_FILES['image']['name'];
        if ($image = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "image Gagal di Upload";
            } else {
                $image = $this->upload->data('file_name');
            }
        }

        $where  = ['id_user' => $id];

        $data   = [
            'nama_user' => $nama_user,
            'alamat'    => $alamat,
            'email'     => $email,
            'username'  => $username,
            'image'     => $image
        ];

        $this->Model_customer->update_akun($where, $data, 'tb_users');
        $this->session->set_flashdata('update_akun', 'Berhasil Diupdate');
        redirect('customer/c_customer/index');
    }
}
