<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('main_models');
        $this->page = array(
            'data' => '',
            'navbar'  => (object) array(
                'left' => 'admin/navbar-left',
                'top'  => 'admin/navbar-top',
                'left_smr' => 'manajer/navbar-left',
                'left_sls' => 'sales/navbar-left',
                'left_prc' => 'purchase/navbar-left',
            ),
        );
	}

	function index()
	{
		$this->load->view('f_login');
	}

	function regis()
	{
		redirect('Login/index#signup');
	}

	function login_validasi()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			// admin
		if($this->main_models->proses_login_user($email, $password))
		{
        $this->page['page'] = 'dashboard';
        $this->load->view('master-be', $this->page);
		}else{
			$this->session->set_flashdata('error', 'Invalid Email and Password');
			redirect ('Login/index');		
		}
		}else{
			$this->index();
		}
	}

	function regis_validasi()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telpon', 'No.Telpon', 'required');

		if($this->form_validation->run())
		{
			$akses = $this->input->post('akses');
			$data=$this->input->post();
			unset($data['insert']);
			unset($data['akses']);
			$this->load->model('main_models');

			if($akses == 2)
			{
				$this->main_models->proses_regis_sales($data);
				redirect ('Login/index');
			}else if($akses == 3)
			{
				$this->main_models->proses_regis_purchaser($data);
				redirect ('Login/index');
			}
		}
		else
		{
			$this->regis();
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect ('Login/index');
	}

}

?>
