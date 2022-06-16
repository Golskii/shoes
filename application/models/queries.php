<?php

Class queries extends CI_Model
{

	public function insert_motor($data){ 
		$this->db->insert('sw_motor', $data);
	}
	public function update_motor($data, $kode){
		$this->db->where('MOTOR_KD',$kode);
		return $this->db->update('sw_motor', $data);
	}

	public function insert_workscope($data){
		$this->db->insert('sw_workscope', $data);
	}
	public function update_workscope($data, $kode){
		$this->db->where('WORK_KD',$kode);
		return $this->db->update('sw_workscope', $data);
	}

	public function insert_harga($data){
		$this->db->insert('sw_harga', $data);	
	}

	public function insert_perbaikan($data){
		$this->db->insert('sw_perbaikan', $data);	
	}
	public function update_perbaikan($data, $kode){
		$this->db->where('PENAWARAN_KD',$kode);
		return $this->db->update('sw_perbaikan', $data);
	}

	public function insert_custom($data){
		$this->db->insert('sw_custom', $data);
	}
	public function delete_custom($penawaran_kd){
		$this->db->where('PENAWARAN_KD',$penawaran_kd);
		$this->db->delete('sw_custom');
	}

	public function insert_additional($data){
		$this->db->insert('sw_additional', $data);
	}
	public function delete_additional($penawaran_kd){
		$this->db->where('PENAWARAN_KD',$penawaran_kd);
		$this->db->delete('sw_additional');
	}

	public function get_motor()
	{
		$this->db->select();
		$query = $this->db->get_where('sw_motor');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_motor_byKD($MOTOR_KD)
	{
		$query = $this->db->get_where('sw_motor', array('MOTOR_KD' => $MOTOR_KD));
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_last_motor()
	{
		$this->db->select();
		$this->db->order_by('MOTOR_KD', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get_where('sw_motor');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_last_perbaikan()
	{
		$this->db->select();
		$this->db->order_by('PERBAIKAN_KD', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get_where('sw_perbaikan');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_last_workscope()
	{
		$this->db->select();
		$this->db->order_by('WORK_KD', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get_where('sw_workscope');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_last_custom()
	{
		$this->db->select();
		$this->db->order_by('CUSTOM_KD', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('sw_custom');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_last_harga()
	{
		$this->db->select();
		$this->db->order_by('HARGA_KD', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('sw_harga');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_work_byKD($WORK_KD)
	{
		$query = $this->db->get_where('sw_workscope', array('WORK_KD' => $WORK_KD));
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_custombyPENAWARAN_KD($kode)
	{
		$query = $this->db->get_where('sw_custom', array('PENAWARAN_KD' => $kode));
		if($query->num_rows() > 0)
		{	
			return $query->result();
		}
	}

	public function get_additionalbyPENAWARAN_KD($kode){
		$query = $this->db->get_where('sw_additional', array('PENAWARAN_KD' => $kode));
		if($query->num_rows() > 0)
		{	
			return $query->result();
		}
	}

	public function get_harga_add_byPENAWARAN_KD($kode)
	{

		$this->db->join('sw_additional', 'sw_harga.HARGA_KD = sw_additional.HARGA_KD', 'left');
		$this->db->where(array(
			'sw_additional.PENAWARAN_KD'	=> $kode
		));
		$query = $this->db->get('sw_harga');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_harga_cust_byPENAWARAN_KD($kode)
	{

		$this->db->join('sw_custom', 'sw_harga.HARGA_KD = sw_custom.HARGA_KD', 'left');
		$this->db->where(array(
			'sw_custom.PENAWARAN_KD'	=> $kode
		));
		$query = $this->db->get('sw_harga');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_perbaikan_byPENAWARAN_KD($kode)
	{

		$query = $this->db->get_where('sw_perbaikan', array('PENAWARAN_KD' => $kode));
		if($query->num_rows() > 0)
		{	
			return $query->result();
		}
	}

	public function update_harga($kode,$data){
		$this->db->where('HARGA_KD',$kode);
		return $this->db->update('sw_harga', $data);
	}

	public function nearest_deadline(){
		$this->db->join('sw_po', 'sw_po.PO_KD = sw_penawaran.PO_KD', 'right');
		$this->db->join('sw_customer', 'sw_penawaran.CUSTOMER_KD = sw_customer.CUSTOMER_KD', 'left');
		$this->db->order_by('sw_po.PO_DATELINE', 'ASC');
		$this->db->where(array(
			'sw_po.PO_START !='	=> NULL,
			'sw_po.PO_DATELINE !='	=> NULL,
			//'sw_po.PO_END'	=> NULL
		));
		$query = $this->db->get('sw_penawaran');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
	}

	function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = $this->penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = $this->penyebut($nilai/10)." puluh". $this->penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . $this->penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = $this->penyebut($nilai/100) . " ratus" . $this->penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . $this->penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = $this->penyebut($nilai/1000) . " ribu" . $this->penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = $this->penyebut($nilai/1000000) . " juta" . $this->penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = $this->penyebut($nilai/1000000000) . " milyar" . $this->penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = $this->penyebut($nilai/1000000000000) . " trilyun" . $this->penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim($this->penyebut($nilai));
		} else {
			$hasil = trim($this->penyebut($nilai));
		}     		
		return $hasil = $hasil." rupiah";
	}

	public function bulan($nilai){
        $bulan = substr($nilai,5,2);
        if($bulan == 1){
        	return $bulan = "Januari";
        }else if($bulan == 2){
        	return $bulan = "Februari";
        }else if($bulan == 3){
            return $bulan = "Maret";
        }else if($bulan == 4){
            return $bulan = "April";
        }else if($bulan == 5){
            return $bulan = "Mei";
        }else if($bulan == 6){
            return $bulan = "Juni";
        }else if($bulan == 7){
            return $bulan = "Juli";
        }else if($bulan == 8){
            return $bulan = "Agustus";
        }else if($bulan == 9){
            return $bulan = "September";
        }else if($bulan == 10){
            return $bulan = "Oktober";
        }else if($bulan == 11){
            return $bulan = "November";
        }else if($bulan == 12){
            return $bulan = "Desember";
        }
	}
}

?>