<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct() //method default yang selalu dijalankan
    {
        parent::__construct(); //memanggil method construct yg ada di CI_Controller
        $this->load->library('form_validation'); /*memanggil library form validation */
        $this->load->model('My_model');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('user');
        }

        /*rules form validation*/
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) { //memanggil method run
            $data['title'] = 'KKP User Login';
            $this->load->view('templates/auth_header', $data); //memanggil templates header
            $this->load->view('auth/login', $data); //memanggil view login
            $this->load->view('templates/auth_footer'); //memanggil templates header
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $data = array(
            'username' => $this->input->post('username', TRUE),
            'password' => md5($this->input->post('password', TRUE))
        );
        $hasil = $this->My_model->masuk($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['id_admin'] = $sess->id_admin;
                $sess_data['nama_admin'] = $sess->nama_admin;
                $this->session->set_userdata($sess_data);
            }
            $data = array(
                'last_login' => date('d/m/Y - h:i:s'),
            );
            $this->db->update('admin', $data, array('id_admin' => $sess->id_admin));
            $sess_data2['last_login'] = $sess->last_login;
            $this->session->set_userdata($sess_data2);
            redirect('user');
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger text-center"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Username & Password Salah</div>'
        );
        redirect('auth');
    }

    public function daftar()
    {
        $data['title'] = 'Membuat Akun';
        $this->load->view('templates/auth_header', $data); //memanggil templates header
        $this->load->view('auth/daftar', $data); //memanggil view daftar
        $this->load->view('templates/auth_footer'); //memanggil templates footer
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
