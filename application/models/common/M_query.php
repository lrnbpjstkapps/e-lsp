<?php
	class M_query extends CI_Model{		
		
		function getQuery_listKUK($condition, $order)
			{				
				$this->db->select('apl01.UUID_APL01, skema.NOMOR_SKEMA, skema.NAMA_SKEMA, 
					uk.UUID_UK, uk.KODE_UK, uk.JUDUL_UK, ek.UUID_EK, ek.NOMOR_EK, ek.NAMA_EK, 
					kuk.UUID_KUK, kuk.NOMOR_KUK, kuk.PERNYATAAN, kuk.PERTANYAAN');
				$this->db->from("FR_APL_01 AS apl01");
				$this->db->join("APL01_UK AS apl01uk", "apl01.UUID_APL01 = apl01uk.UUID_APL01", "LEFT");
				$this->db->join("UNIT_KOMPETENSI AS uk", "apl01uk.UUID_UK = uk.UUID_UK", "LEFT");
				$this->db->join("SKEMA_UK AS skemauk", "apl01uk.UUID_UK = skemauk.UUID_UK", "LEFT");
				$this->db->join("SKEMA AS skema", "skemauk.UUID_SKEMA = skema.UUID_SKEMA", "LEFT");
				$this->db->join("ELEMEN_KOMPETENSI AS ek", "apl01uk.UUID_UK = ek.UUID_UK", "LEFT");
				$this->db->join("KRITERIA_UNJUK_KERJA AS kuk", "ek.UUID_EK = kuk.UUID_EK", "LEFT");
				$this->db->where($condition);
				$this->db->order_by($order);
				
				return $this->db->get();
			}
	}
?>