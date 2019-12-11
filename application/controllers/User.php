<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('welcome');
        }
        $this->load->model('My_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Satellite imagery catalog';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/home_user', $data);
        $this->load->view('templates/footer');
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat datang ' . $data['user']['nama_user'];
    }

    public function profil()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Satellite imagery catalog';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/profil', $data);
        $this->load->view('templates/footer');
    }

    public function about()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'About';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('welcome/about', $data);
        $this->load->view('templates/footer');
    }

    public function feedback()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Feedback';

        $this->form_validation->set_rules('options', 'Penilaian', 'required|trim');
        $this->form_validation->set_rules('feedback', 'Message', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('welcome/feedback', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nilai' => $this->input->post('options'),
                'email' => $this->input->post('email'),
                'feedback' => $this->input->post('feedback')
            ];
            $this->db->insert('feedback', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penilaian anda telah terkirim</div>');
            redirect('user/feedback');
        }
    }

    public function guide()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Guide';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('welcome/guide', $data);
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Contact';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('welcome/contact', $data);
        $this->load->view('templates/footer');
    }

    public function ubahPassword()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Ubah Password';

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/profil', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/ubahpassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same!</div>');
                    redirect('user/ubahpassword');
                } else {
                    //password sudah benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success " role="alert">Password changed!</div>');
                    redirect('user/ubahpassword');
                }
            }
        }
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Edit ProfilS';

        $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('jk', 'gender', 'required|trim');
        $this->form_validation->set_rules('tempatLahir', 'tempat lahir', 'required|trim');
        $this->form_validation->set_rules('tglLahir', 'tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('noHp', 'Nomor Hp', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/profil', $data);
            $this->load->view('templates/footer');
        } else {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');
            $jk = $this->input->post('jk');
            $tempatLahir = $this->input->post('tempatLahir');
            $tglLahir = $this->input->post('tglLahir');
            $alamat = $this->input->post('alamat');
            $noHp = $this->input->post('noHp');

            //cek jika ada gambar yg akan diupload
            $upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['user']['foto'];
                    if ($old_image != 'foto.jpg') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            //cek jika nama diedit
            $this->db->set('username', $username);
            $this->db->set('nama_user', $nama);
            $this->db->set('jenis_kelamin', $jk);
            $this->db->set('tempat_lahir', $tempatLahir);
            $this->db->set('tanggal_lahir', $tglLahir);
            $this->db->set('alamat', $alamat);
            $this->db->set('no_hp', $noHp);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user/profil');
        }
    }
}
