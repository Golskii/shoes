<?php

Class queries_user extends CI_Model
{
	function autonumber($kode_terakhir, $panjang_kode, $panjang_angka)
	{
    	$kode = substr($kode_terakhir, 0, $panjang_kode);
    	$angka = substr($kode_terakhir, $panjang_kode, $panjang_angka);
    	$angka_baru = str_repeat("0", $panjang_angka - strlen($angka+1)).($angka+1);
    	$kode_baru = $kode.$angka_baru;
    	return $kode_baru;
	}

	function insert_item2($data)
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

	function insert_user($data){
		$cari_kode = 'PGW';

		$this->db->select('KD_USER');
		$this->db->like('KD_USER', $cari_kode , 'after');
		$this->db->order_by('KD_USER', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('user');

		if($query->num_rows() > 0)
		{	
			foreach ($query->result() as $key) 
			{
				$kode[] = $key;
				foreach ($kode as $simpan) 
				{
					// var_dump($this->autonumber($simpan->KD_USER, 3, 4));die();
					// var_dump($data);die();
					$save['KD_USER']	= $this->autonumber($simpan->KD_USER, 3, 4);
					$save['NAMA']  = htmlspecialchars($data['nama']);
					$save['EMAIL']  = htmlspecialchars($data['email']);
					$save['PASSWORD']  = htmlspecialchars($data['password']);
					$save['ROLE']  = 1;
					$save['ALAMAT']  = htmlspecialchars($data['alamat']);
					$save['NO_TELEPON']  = $data['no_telepon'];
				}
			}
		}
		else
		{
			// var_dump('test');die();
			$save['KD_USER']	= 'PGW0001';
			$save['NAMA']  = htmlspecialchars($data['nama']);
			$save['NAMA']  = htmlspecialchars($data['nama']);
			$save['EMAIL']  = htmlspecialchars($data['email']);
			$save['PASSWORD']  = htmlspecialchars($data['password']);
			$save['ROLE']  = 1;
			$save['ALAMAT']  = htmlspecialchars($data['alamat']);
			$save['NO_TELEPON']  = $data['no_telepon'];
		}
		return $this->db->insert('USER', $save);
	}

	public function get_user()
	{
		$query = $this->db->get('USER');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}else{
			return array();
		}
	}

	public function get_user_byKD($kode)
	{
		$query = $this->db->get_where('user', array('KD_USER' => $kode));
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_user_byNAMA($data)
	{
		$query = $this->db->get_where('user', array('nama' => $data['nama']));
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function edit_user($data){
		$this->db->where('KD_USER',$data['kd_user']);
		return $this->db->update('user', $data);
	}

	public function hapus_user($kd_user){
		$this->db->where('KD_USER',$kd_user);
		return $this->db->delete('USER');
	}
}

?>
