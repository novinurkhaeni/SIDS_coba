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
}
