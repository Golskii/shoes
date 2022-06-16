<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_Application extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
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

    public function index()
    {
        if($this->session->userdata('login')){
            $this->dashboard();
        }else{
            $this->load->view('f_login');
        }
    }

    public function dashboard(){
        $this->page['page'] = 'dashboard';
        $this->load->view('master-be', $this->page);
    }

	//Start Item Controller
	public function additem(){
        $data = $this->input->post();
        $this->load->model("item/queries_item");
        $this->queries_item->insert_item($data);
        $this->item();
	}

	public function item(){
		if($this->session->userdata('login')){
            $this->load->model("item/queries_item");
            $dat_item = $this->queries_item->get_item();
            $this->page['dat_item'] = $dat_item;
            $this->page['page'] = 'item/index';
            $this->load->view('master-be', $this->page);
		}else{
			$this->load->view('f_login');
		}
	}

    public function edititem(){
        $data = $this->input->post();
        $this->load->model("item/queries_item");
        $this->queries_item->edit_item($data);
        $this->item();
    }

    public function hapusitem($kd_item){
        $this->load->model("item/queries_item");
        $this->queries_item->hapus_item($kd_item);
        $this->item();
    }

    public function formedititem($kd){
        if($this->session->userdata('login')){
            $this->load->model("item/queries_item");
            $this->page['data'] = $this->queries_item->get_item_byKD($kd);
            $this->page['page'] = 'item/edit-item';
            $this->load->view('master-be', $this->page);
        }else{
            $this->load->view('f_login');
        }
    }
	//End Item Controller

	//Start Treatment Controller
	public function addtreatment(){
        $data = $this->input->post();
        $this->load->model("treatment/queries_treatment");
        $this->queries_treatment->insert_treatment($data);
        $this->treatment();
	}

	public function treatment(){
		if($this->session->userdata('login')){
            $this->load->model("treatment/queries_treatment");
            $dat_treatment = $this->queries_treatment->get_treatment();
            $this->page['dat_treatment'] = $dat_treatment;
            $this->page['page'] = 'treatment/index';
            $this->load->view('master-be', $this->page);
		}else{
			$this->load->view('f_login');
		}
	}

    public function edittreatment(){
        $data = $this->input->post();
        $this->load->model("treatment/queries_treatment");
        $this->queries_treatment->edit_treatment($data);
        $this->treatment();
    }

    public function hapustreatment($kd_treatment){
        $this->load->model("treatment/queries_treatment");
        $this->queries_treatment->hapus_treatment($kd_treatment);
        $this->treatment();
    }

    public function formedittreatment($kd_treatment){
        if($this->session->userdata('login')){
            $this->load->model("treatment/queries_treatment");
            $this->page['data'] = $this->queries_treatment->get_treatment_byKD($kd_treatment);
            $this->page['page'] = 'treatment/edit-treatment';
            $this->load->view('master-be', $this->page);
        }else{
            $this->load->view('f_login');
        }
    }
	//End Treatment Controller

	//Start Customer Controller
	public function addcustomer(){
        $data = $this->input->post();
        $this->load->model("customer/queries_customer");
        $this->queries_customer->insert_customer($data);
        $this->customer();
	}
	public function addCustomerOrder(){
        $data = $this->input->post();
        $this->load->model("customer/queries_customer");
        $this->queries_customer->insert_customer($data);
        $this->getCustomer();
	}

	public function customer(){
		if($this->session->userdata('login')){
            $this->load->model("customer/queries_customer");
            $dat_customer = $this->queries_customer->get_customer();
            $this->page['dat_customer'] = $dat_customer;
            $this->page['page'] = 'customer/index';
            $this->load->view('master-be', $this->page);
		}else{
			$this->load->view('f_login');
		}
	}

	public function getCustomer(){
		if($this->session->userdata('login')){
            $this->load->model("customer/queries_customer");
            $dat_order = $this->queries_customer->get_customer();
            $this->page['dat_order'] = $dat_order;

			//Get Items
            $this->load->model("item/queries_item");
			$this->page['dat_item'] = $this->queries_item->get_item();

			//Get Treatment
            $this->load->model("treatment/queries_treatment");
			$this->page['dat_treatment'] = $this->queries_treatment->get_treatment();

            $this->page['page'] = 'order/index';
            $this->load->view('master-be', $this->page);
		}else{
			$this->load->view('f_login');
		}
	}

    public function editCustomerOrder(){
        $data = $this->input->post();
        $this->load->model("customer/queries_customer");
        $this->queries_customer->edit_customer($data);
        $this->formeditcustomer($data['kd_customer']);
    }

    public function hapuscustomer($id){
        $this->load->model("customer/queries_customer");
        $this->queries_customer->hapus_customer($id);
        $this->customer();
    }

    public function hapusCustomerOrder($kode){
        $this->load->model("customer/queries_customer");
        $this->queries_customer->hapus_customer($kode);
        $this->getCustomer();
    }

    public function formeditcustomer2($id){
        if($this->session->userdata('login')){
            $this->load->model("customer/queries_customer");
            $this->page['data'] = $this->queries_customer->getcustomerById($id);
            $this->page['page'] = 'customer/edit';
            $this->load->view('master-be', $this->page);
        }else{
            $this->load->view('f_login');
        }
    }

    public function formeditcustomer($kode){
        if($this->session->userdata('login')){
            $this->load->model("customer/queries_customer");
            $this->page['data'] = $this->queries_customer->get_customer_byKD($kode);
			$this->page['dat_order'] = $this->queries_customer->get_order_byCustomer($kode);

			//Get Items
            $this->load->model("item/queries_item");
			$this->page['dat_item'] = $this->queries_item->get_item();

			//Get Treatment
            $this->load->model("treatment/queries_treatment");
			$this->page['dat_treatment'] = $this->queries_treatment->get_treatment();

            $this->page['page'] = 'order/edit-order';
            $this->load->view('master-be', $this->page);
        }else{
            $this->load->view('f_login');
        }
    }
	//End Customer Controller

	//Start Order Controller
	public function addorder(){
		$this->addCustomerOrder();
        // $data = $this->input->post();
        // $this->load->model("order/queries_order");
        // $this->queries_order->insert_order($data);
        // $this->order();
	}

	public function order(){
		$this->getCustomer();
		// if($this->session->userdata('login')){
        //     $this->load->model("order/queries_order");
        //     $dat_order = $this->queries_order->get_order();
        //     $this->page['dat_order'] = $dat_order;
        //     $this->page['page'] = 'order/index';
        //     $this->load->view('master-be', $this->page);
		// }else{
		// 	$this->load->view('f_login');
		// }
	}

    public function editorder(){
		$this->editCustomerOrder();
        // $data = $this->input->post();
        // $this->load->model("order/queries_order");
        // $this->queries_order->edit_order($data);
        // $this->order();
    }

    public function hapusorder($kode){
		$this->hapusCustomerOrder($kode);
		// $this->order();
        // $this->load->model("order/queries_order");
        // $this->queries_order->hapus_order($id);
        // $this->order();
    }

    public function hapusitemorder($kode){
		// $this->order();
        $this->load->model("customer/queries_customer");
		$kd_customer = ($this->queries_customer->get_order_byKD($kode))->KD_CUSTOMER;
        $this->queries_customer->hapus_order($kode);
		// var_dump($kd_customer);die();
        $this->formeditcustomer($kd_customer);
    }

    public function formeditorder($kode){
		$this->formeditcustomer($kode);
        // if($this->session->userdata('login')){
        //     $this->load->model("order/queries_order");
        //     $this->page['data'] = $this->queries_order->getorderById($id);
        //     $this->page['page'] = 'order/edit';
        //     $this->load->view('master-be', $this->page);
        // }else{
        //     $this->load->view('f_login');
        // }
    }

	public function showOrder($kode){
        if($this->session->userdata('login')){
			$this->load->model("customer/queries_customer");
			$this->page['data'] = $this->queries_customer->get_customer_byKD($kode);
			$this->page['dat_order'] = $this->queries_customer->get_order_byCustomer($kode);
			
            $this->page['page'] = 'order/show-order';
            $this->load->view('master-be', $this->page);
		}else{
			$this->load->view('f_login');
		}
	}
	//End Order Controller

	//Start User Controller
	public function adduser(){
        $data = $this->input->post();
        $this->load->model("user/queries_user");
        $this->queries_user->insert_user($data);
        $this->user();
	}

	public function user(){
		if($this->session->userdata('login')){
            $this->load->model("user/queries_user");
            $dat_user = $this->queries_user->get_user();
            $this->page['dat_user'] = $dat_user;
            $this->page['page'] = 'pegawai/index';
            $this->load->view('master-be', $this->page);
		}else{
			$this->load->view('f_login');
		}
	}

    public function edituser(){
        $data = $this->input->post();
        $this->load->model("user/queries_user");
        $this->queries_user->edit_user($data);
        $this->user();
    }

    public function hapususer($id){
        $this->load->model("user/queries_user");
        $this->queries_user->hapus_user($id);
        $this->user();
    }

    public function formedituser($kode){
        if($this->session->userdata('login')){
            $this->load->model("user/queries_user");
            $this->page['data'] = $this->queries_user->get_user_byKD($kode);
            $this->page['page'] = 'pegawai/edit-pegawai';
            $this->load->view('master-be', $this->page);
        }else{
            $this->load->view('f_login');
        }
    }
	//End User Controller
}
