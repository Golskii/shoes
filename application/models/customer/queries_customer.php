<?php

Class queries_customer extends CI_Model
{
	function autonumber($kode_terakhir, $panjang_kode, $panjang_angka)
	{
    	$kode = substr($kode_terakhir, 0, $panjang_kode);
    	$angka = substr($kode_terakhir, $panjang_kode, $panjang_angka);
    	$angka_baru = str_repeat("0", $panjang_angka - strlen($angka+1)).($angka+1);
    	$kode_baru = $kode.$angka_baru;
    	return $kode_baru;
	}

	function insert_customer($data)
	{
		$this->db->select('KD_CUSTOMER');
		$this->db->order_by('KD_CUSTOMER', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('customer');
		if($query->num_rows() > 0)
		{	
			foreach ($query->result() as $key) 
			{
				$kode[] = $key;
				foreach ($kode as $simpan) 
				{
					$kd_customer 				= $this->autonumber($simpan->KD_CUSTOMER, 3, 4);
					$save['KD_CUSTOMER']	 	= $kd_customer;
					$save['KD_USER']			= $this->session->userdata('kode');
					$save['NAMA']  				= htmlspecialchars($data['nama']);
					$save['HARGA'] 				= htmlspecialchars($data['harga']);
					$save['NO_TELEPON']  		= $data['no_telepon'];
					$save['JENIS_ORDER'] 		= htmlspecialchars($data['jenis_order']);
					$save['ALAMAT_PICKUP'] 		= htmlspecialchars($data['alamat_pickup']);
					$save['TANGGAL_PICKUP'] 	= htmlspecialchars($data['tanggal_pickup']);
					$save['ALAMAT_DELIVERY'] 	= htmlspecialchars($data['alamat_delivery']);
					$save['TANGGAL_DELIVERY'] 	= htmlspecialchars($data['tanggal_delivery']);
					$save['STATUS']			 	= htmlspecialchars($data['status']);

					$this->db->insert('customer', $save);
					foreach($data['jenis_item'] as $key => $item){
						$this->insert_order($data, $key, $kd_customer);
					}

					return true;
				}
				
			}
		}
		else
		{
			$kd_customer				= "CST0001";
			$save['KD_CUSTOMER'] 		= $kd_customer;
			$save['KD_USER']			= $this->session->userdata('kode');
			$save['NAMA']  				= htmlspecialchars($data['nama']);
			$save['HARGA'] 				= htmlspecialchars($data['harga']);
			$save['NO_TELEPON']  		= $data['no_telepon'];
			$save['JENIS_ORDER'] 		= htmlspecialchars($data['jenis_order']);
			$save['ALAMAT_PICKUP'] 		= htmlspecialchars($data['alamat_pickup']);
			$save['TANGGAL_PICKUP'] 	= htmlspecialchars($data['tanggal_pickup']);
			$save['ALAMAT_DELIVERY'] 	= htmlspecialchars($data['alamat_delivery']);
			$save['TANGGAL_DELIVERY'] 	= htmlspecialchars($data['tanggal_delivery']);
			$save['STATUS']			 	= htmlspecialchars($data['status']);

			$this->db->insert('customer', $save);
			foreach($data['jenis_item'] as $key => $item){
				$this->insert_order($data, $key, $kd_customer);
			}
			return true;
		}
	}

	function insert_order($data, $key2, $kd_customer){
		$this->db->select('KD_ORDER');
		$this->db->order_by('KD_ORDER', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('order');

		if($query->num_rows() > 0)
		{	
			foreach ($query->result() as $key) 
			{
				$kode[] = $key;
				foreach ($kode as $simpan) 
				{
					$save['KD_ORDER']		= $this->autonumber($simpan->KD_ORDER, 3, 4);
					$save['KD_ITEM']  		= htmlspecialchars($data['jenis_item'][$key2]);
					$save['KD_TREATMENT'] 	= htmlspecialchars($data['jenis_treatment'][$key2]);
					$save['KD_CUSTOMER']	= htmlspecialchars($kd_customer);
					$save['KETERANGAN'] 	= htmlspecialchars($data['keterangan'][$key2]);
					return $this->db->insert('ORDER', $save);
				}
			}
		}
		else
		{
			$save['KD_ORDER']		= 'ORD0001';
			$save['KD_ITEM']  		= htmlspecialchars($data['jenis_item'][$key2]);
			$save['KD_TREATMENT'] 	= htmlspecialchars($data['jenis_treatment'][$key2]);
			$save['KD_CUSTOMER']	= htmlspecialchars($kd_customer);
			$save['KETERANGAN'] 	= htmlspecialchars($data['keterangan'][$key2]);
			return $this->db->insert('ORDER', $save);
		}
	}

	public function get_customer()
	{
		$query = $this->db->get_where('customer');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}else{
			return array();
		}
	}

	public function list_customer()
	{
		$query = $this->db->get('sw_customer');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_customer_byKD($kode)
	{
		$query = $this->db->get_where('customer', array('KD_CUSTOMER' => $kode));
		if($query -> num_rows() > 0)
		{
			return $query->result()[0];
		}else{
			return array();
		}
	}

	public function get_order_byKD($kode)
	{
		$query = $this->db->get_where('order', array('KD_ORDER' => $kode));
		if($query -> num_rows() > 0)
		{
			return $query->result()[0];
		}else{
			return array();
		}
	}

	public function get_order_byCustomer($kode)
	{
		$query = $this->db->get_where('order', array('KD_CUSTOMER' => $kode));
		if($query -> num_rows() > 0)
		{
			$result = $query->result();
			$data = [];
			foreach($result as $key => $val){
				$item = $this->db->get_where('item', array('KD_ITEM' => $val->KD_ITEM))->result();
				$treatment = $this->db->get_where('treatment', array('KD_TREATMENT' => $val->KD_TREATMENT))->result();
				$newVal = (object) array_merge( (array)$val, array(
					'JENIS_ITEM' 		=> $item[0]->JENIS_ITEM,
					'JENIS_TREATMENT'	=> $treatment[0]->JENIS_TREATMENT,
				));
				$data[] = $newVal;
			}
			// var_dump($data);die();
			return $data;
			// return $query->result();
		}else{
			return array();
		}
	}

	public function edit_customer($data){
		$this->db->where('KD_CUSTOMER',$data['kd_customer']);
		$data_customer = array(
			'nama'				=> $data['nama'],
			'harga'				=> $data['harga'],
			'no_telepon'		=> $data['no_telepon'],
			'jenis_order'		=> $data['jenis_order'],
			'alamat_pickup'		=> $data['alamat_pickup'],
			'tanggal_pickup'	=> $data['tanggal_pickup'],
			'alamat_delivery'	=> $data['alamat_delivery'],
			'tanggal_delivery'	=> $data['tanggal_delivery'],
			'status'			=> $data['status']
		);
		$this->db->update('customer', $data_customer);

		//Edit Item
		$query = $this->db->get_where('order', array('KD_CUSTOMER' => $data['kd_customer']));
		$db_rows = $query->num_rows();
		$result = $query->result();
		// var_dump($result, $db_rows);die();
		foreach($result as $key => $order){
			$this->db->where('KD_ORDER', $order->KD_ORDER);
			$data_order = array(
				'kd_item'		=> $data['jenis_item'][$key],
				'kd_treatment'	=> $data['jenis_treatment'][$key],
				'keterangan'	=> $data['keterangan'][$key]
			);
			$this->db->update('order', $data_order);
		}
		for($key = $db_rows;$key < count($data['jenis_item']);$key++){
			$this->insert_order($data, $key, $data['kd_customer']);
		}
	}

	public function hapus_customer($KD_CUSTOMER){
		$query = $this->db->get_where('ORDER', array('KD_CUSTOMER' => $KD_CUSTOMER));
		$orders = $query->result();
		foreach($orders as $order){
			$this->db->where('KD_ORDER', $order->KD_ORDER);
			$this->db->delete('order');
		}

		$this->db->where('KD_CUSTOMER',$KD_CUSTOMER);
		return $this->db->delete('customer');
	}

	public function hapus_order($kode){
		$this->db->where('KD_ORDER',$kode);
		return $this->db->delete('order');
	}

	public function customer_thismonth(){
		$tahun = substr(date('ym'),0,2);
		$bulan = substr(date('ym'),2,2);
		$cari_kode = $tahun . "-" . $bulan. "-";
		$this->db->select('CUSTOMER_KD');
		$this->db->like('PENAWARAN_KD', $cari_kode , 'after');
		$query = $this->db->get_where('sw_penawaran');
		$jumlah = 0;
		$blacklist = array();
		if($query ->num_rows() > 0)
		{	
			foreach ($query->result() as $key) {
				$a = $key->CUSTOMER_KD;
				$cek=0;
				$black = 0;
				foreach ($query->result() as $key) {
					$b = $key->CUSTOMER_KD;
					if($a == $b){
						for ($i=0; $i <= count($blacklist)-1; $i++) { 
							if($a == $blacklist[$i]){
								$black = $black + 1;
							}	
						}
						if($black == 0){
							$cek = $cek + 1;
							array_push($blacklist, $a);
						}
					}
				}
				if($cek != 0){
					$jumlah = $jumlah + 1;
				}
			}
			return $jumlah;
		}

	}
}

?>
