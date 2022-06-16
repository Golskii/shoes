<?php

Class queries_item extends CI_Model
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

	function insert_item($data){
		$this->db->select('KD_ITEM');
		$this->db->order_by('KD_ITEM', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('item');

		if($query->num_rows() > 0)
		{	
			foreach ($query->result() as $key) 
			{
				$kode[] = $key;
				foreach ($kode as $simpan) 
				{
					// var_dump($this->autonumber($simpan->KD_ITEM, 3, 4));die();
					// var_dump($data);die();
					$save['KD_ITEM']	= $this->autonumber($simpan->KD_ITEM, 3, 4);
					$save['JENIS_ITEM']  = htmlspecialchars($data['jenis_item']);
					return $this->db->insert('ITEM', $save);
				}
			}
		}
		else
		{
			// var_dump('test');die();
			$save['KD_ITEM']	= 'ITM0001';
			$save['JENIS_ITEM']  = htmlspecialchars($data['jenis_item']);
			return $this->db->insert('ITEM', $save);
		}
	}

	public function get_item()
	{
		$query = $this->db->get('ITEM');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}else{
			return array();
		}
	}

	public function get_item_byKD($kode)
	{
		$query = $this->db->get_where('item', array('kd_item' => $kode));
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_item_byNAMA($data)
	{
		$query = $this->db->get_where('item', array('jenis_item' => $data['jenis_item']));
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function edit_item($data){
		$this->db->where('KD_ITEM',$data['kd_item']);
		return $this->db->update('item', $data);
	}

	public function hapus_item($kd_item){
		$this->db->where('KD_ITEM',$kd_item);
		return $this->db->delete('ITEM');
	}
}

?>
