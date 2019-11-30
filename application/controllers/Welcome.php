<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Satellite imagery catalog';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar_welcome', $data);
		$this->load->view('templates/sidebar_welcome', $data);
		$this->load->view('welcome/home', $data);
		$this->load->view('templates/footer');
	}
}
