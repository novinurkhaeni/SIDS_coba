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

	public function about()
	{
		$data['title'] = 'About';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar_welcome', $data);
		$this->load->view('templates/sidebar_welcome', $data);
		$this->load->view('welcome/about', $data);
		$this->load->view('templates/footer');
	}

	public function feedback()
	{
		$data['title'] = 'Feedback';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar_welcome', $data);
		$this->load->view('templates/sidebar_welcome', $data);
		$this->load->view('welcome/feedback', $data);
		$this->load->view('templates/footer');
	}

	public function guide()
	{
		$data['title'] = 'Guide';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar_welcome', $data);
		$this->load->view('templates/sidebar_welcome', $data);
		$this->load->view('welcome/guide', $data);
		$this->load->view('templates/footer');
	}
}
