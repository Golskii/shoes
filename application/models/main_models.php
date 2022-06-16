<?php

Class main_models extends CI_Model
{
	function proses_login_user($email, $password)
	{
		$query= $this->db->get_where('user', array('email'=> $email, 'password'=> $password));
		// var_dump($query->result());die();
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $user):
				if($user->ROLE == 0){
					$role = 'ADMINISTRATOR';
				}else if($user->ROLE == 1){
					$role = 'PEGAWAI';
				}
				// else if($user->ROLE == 2){
				// 	$role = 'SALES';
				// }else if($user->ROLE == 3){
				// 	$role = 'PURCHASER';
				// }
				else{
					$role = ' '; 
				}
				$data_login = array(
						'name' => $user->NAMA,
						'kode' => $user->KD_USER,
						'email' => $user->EMAIL,
						'role' => $role,
						'login' => true
					);
			$this->session->set_flashdata('pesan', '');
			$this->session->set_userdata($data_login);
			endforeach;
			return true;
		}
		else
		{
			
				return false;
		}
	}

	// function proses_login_sales($username, $password)
	// {
	// 	$query= $this->db->get_where('sw_sales', array('SALES_NAMA'=> $username, 'SALES_EMAIL'=> ($password), 'SALES_STATUS'=> 1));
	// 	if($query->num_rows() > 0)
	// 	{
	// 		foreach($query->result() as $sales):
	// 			$data_login = array(
	// 					'kode' => $sales->SALES_KD,
	// 					'username' => $username,
	// 					'role' => 'SALES',
	// 					'login' => true
	// 				);
	// 		$this->session->set_userdata($data_login);
	// 		endforeach;
	// 		return true;
	// 	}
	// 	else
	// 	{
	// 		return false;
	// 	}
	// }
	// function proses_login_sales_mng($username, $password)
	// {
	// 	$query= $this->db->get_where('sw_sales_manajer', array('SMANAJER_NAMA'=> $username, 'SMANAJER_EMAIL'=> ($password), 'SMANAJER_STATUS'=> 1));
	// 	if($query->num_rows() > 0)
	// 	{
	// 		foreach($query->result() as $sales_mng):
	// 			$data_login = array(
	// 					'kode' => $sales_mng->SMANAJER_KD,
	// 					'username' => $username,
	// 					'role' => 'SALES MANAGER',
	// 					'login' => true
	// 				);
	// 		$this->session->set_userdata($data_login);
	// 		endforeach;
	// 		return true;
	// 	}
	// 	else
	// 	{
	// 		return false;
	// 	}
	// }
	// function proses_login_purchase($username, $password)
	// {
	// 	$query= $this->db->get_where('sw_purchase', array('PURCHASE_NAMA'=> $username, 'PURCHASE_EMAIL'=> ($password), 'PURCHASE_STATUS'=> 1));
	// 	if($query->num_rows() > 0)
	// 	{
	// 		foreach($query->result() as $purchaser):
	// 			$data_login = array(
	// 					'kode' => $purchaser->PURCHASER_KD,
	// 					'username' => $username,
	// 					'akses' => $akses,
	// 					'role' => 'PURCHASER',
	// 					'login' => true
	// 				);
	// 		$this->session->set_userdata($data_login);
	// 		endforeach;
	// 		return true;
	// 	}
	// 	else
	// 	{
	// 		return false;
	// 	}
	// }

	function autonumber($kode_terakhir, $panjang_kode, $panjang_angka)
	{
    	$kode = substr($kode_terakhir, 0, $panjang_kode);
    	$angka = substr($kode_terakhir, $panjang_kode, $panjang_angka);
    	$angka_baru = str_repeat("0", $panjang_angka - strlen($angka+1)).($angka+1);
    	$kode_baru = $kode.$angka_baru;
    	return $kode_baru;
	}
	
	function proses_regis_sales($data)
	{
		$cari_kode = 'SLS';

		$this->db->select('USER_KD');
		$this->db->like('USER_KD', $cari_kode , 'after');
		$this->db->order_by('USER_KD', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('sw_user');
		if($query->num_rows() > 0)
		{	
			foreach ($query->result() as $key) 
			{
				$kode[] = $key;
				foreach ($kode as $simpan) 
				{
					$save['USER_KD']	 = $simpan->USER_KD;
					$save['USER_KD']	 = $this->autonumber($save['USER_KD'], 3, 4);
					$save['USER_NAMA']  = htmlspecialchars($data['fullname']);
					$save['USER_USERNAME']  = htmlspecialchars($data['username']);
					$save['USER_PASSWORD'] = htmlspecialchars($data['password']);
					$save['USER_EMAIL'] = htmlspecialchars($data['email']);
					$save['USER_ALAMAT'] = htmlspecialchars($data['alamat']);
					$save['USER_TELP']  = $data['telpon'];
					$save['USER_STATUS'] = 1;
					$save['USER_LEVEL'] = 2;
					return $this->db->insert('sw_user', $save);
				}
				
			}
		}
		else
		{
			$save['USER_KD']	 = "SLS0001";
			$save['USER_NAMA']  = htmlspecialchars($data['fullname']);
			$save['USER_USERNAME']  = htmlspecialchars($data['username']);
			$save['USER_PASSWORD'] = htmlspecialchars($data['password']);
			$save['USER_EMAIL'] = htmlspecialchars($data['email']);
			$save['USER_ALAMAT'] = htmlspecialchars($data['alamat']);
			$save['USER_TELP']  = $data['telpon'];
			$save['USER_STATUS'] = 1;
			$save['USER_LEVEL'] = 2;
			return $this->db->insert('sw_user', $save);
		}
	}

	function proses_regis_purchaser($data)
	{
		$cari_kode = 'PCS';

		$this->db->select('USER_KD');
		$this->db->like('USER_KD', $cari_kode , 'after');
		$this->db->order_by('USER_KD', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('sw_user');
		if($query->num_rows() > 0)
		{	
			foreach ($query->result() as $key) 
			{
				$kode[] = $key;
				foreach ($kode as $simpan) 
				{
					$save['USER_KD']	 = $simpan->USER_KD;
					$save['USER_KD']	 = $this->autonumber($save['USER_KD'], 3, 4);
					$save['USER_NAMA']  = htmlspecialchars($data['fullname']);
					$save['USER_USERNAME']  = htmlspecialchars($data['username']);
					$save['USER_PASSWORD'] = htmlspecialchars($data['password']);
					$save['USER_EMAIL'] = htmlspecialchars($data['email']);
					$save['USER_ALAMAT'] = htmlspecialchars($data['alamat']);
					$save['USER_TELP']  = $data['telpon'];
					$save['USER_STATUS'] 	= 1;
					$save['USER_LEVEL'] = 3;
					return $this->db->insert('sw_user', $save);
				}
				
			}
		}
		else
		{
			$save['USER_KD'] 	= "PCS0001";
			$save['USER_NAMA']  = htmlspecialchars($data['fullname']);
			$save['USER_USERNAME']  = htmlspecialchars($data['username']);
			$save['USER_PASSWORD'] = htmlspecialchars($data['password']);
			$save['USER_EMAIL'] = htmlspecialchars($data['email']);
			$save['USER_ALAMAT'] = htmlspecialchars($data['alamat']);
			$save['USER_TELP']  = $data['telpon'];
			$save['USER_STATUS'] 	= 1;
			$save['USER_LEVEL'] = 3;
			return $this->db->insert('sw_user', $save);
		}
	}
	
}

?>
