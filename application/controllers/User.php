<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Satellite imagery catalog';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/home_user', $data);
        $this->load->view('templates/footer');
        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // echo 'Selamat datang ' . $data['user']['nama_user'];
    }

    public function profil()
    {
        $data['title'] = 'Satellite imagery catalog';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/profil', $data);
        $this->load->view('templates/footer');
    }
}
