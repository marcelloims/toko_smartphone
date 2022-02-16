<?php

class C_auth extends CI_Controller
{

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email Harus Diisi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Harus Diisi']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/v_form_login');
        } else {
            $auth = $this->Model_auth->cek_login();
            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login Gagal</strong> Email atau Password Salah!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                ');
                redirect('c_auth/login');
            } else {

                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);
                $this->session->set_userdata('id_user', $auth->id_user);
                $this->session->set_userdata('image', $auth->image);

                // var_dump($auth->image);
                // die;

                switch ($auth->role_id) {
                    case '1':
                        redirect('admin/c_admin/dashboard');
                        break;
                    case '2':
                        redirect('customer/c_customer/index');
                    case '3':
                        redirect('tenant/c_tenant/dashboard');
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('c_auth/login');
    }

    public function register()
    {
        $this->load->view('auth/v_register');
    }

    public function register_member()
    {
        $nama_user  = $this->input->post('nama_user');
        $username   = $this->input->post('username');
        $alamat     = $this->input->post('alamat');
        $telepon    = $this->input->post('telepon');
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        $data = [
            'nama_user' => $nama_user,
            'username'  => $username,
            'alamat'    => $alamat,
            'telepon'   => $telepon,
            'email'     => $email,
            'password'  => $password,
            'image'     => 'user.jpg',
            'role_id'   => '2'
        ];

        $this->Model_auth->register_member($data, 'tb_users');
        $this->session->set_flashdata('event', 'Berhasil Mendaftar');
        redirect('c_auth/login');
    }
}
