<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

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
		$this->page['page'] = '';
		$this->load->view('v_landing.php', $this->page);
	}

	public function getCustomer(){
        $data = $this->input->post();
		$this->load->model("customer/queries_customer");
		$this->page['data'] = $this->queries_customer->get_customer_byKD($data['kode']);
		$status = [
			'Pickup' => '10%',
			'Antri' => '25%',
			'Proses' => '50%',
			'Delivery' => '75%',
			'Close' => '100%',
		];
		$this->page['dat_order'] = $this->queries_customer->get_order_byCustomer($data['kode']);
		if(isset($this->page['data']->STATUS)){
			$this->page['status'] = $status[$this->page['data']->STATUS];
		}else{
			$this->page['error'] = "Order tidak ditemukan, periksa kembali Kode Order Anda.";
		}
		$this->load->view('v_landing.php', $this->page);
	}
}

?>
