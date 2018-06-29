<?php
	class M_query extends CI_Model{		
		function get_KUK_by_APL01($condition, $order)
			{				
				$this->db->select('APL01.UUID_APL01, SKE.NOMOR_SKEMA, SKE.NAMA_SKEMA, 
					UK.UUID_UK, UK.KODE_UK, UK.JUDUL_UK, EK.UUID_EK, EK.NOMOR_EK, EK.NAMA_EK, KUK.UUID_KUK, KUK.NOMOR_KUK, KUK.PERNYATAAN, KUK.PERTANYAAN');
				$this->db->from("FR_APL_01 AS APL01");
				$this->db->join("APL01_UK AS 01UK", "APL01.UUID_APL01 = 01UK.UUID_APL01", "LEFT");
				$this->db->join("UNIT_KOMPETENSI AS UK", "01UK.UUID_UK = UK.UUID_UK", "LEFT");
				$this->db->join("SKEMA_UK AS SKEUK", "01UK.UUID_UK = SKEUK.UUID_UK", "LEFT");
				$this->db->join("SKEMA AS SKE", "SKEUK.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
				$this->db->join("ELEMEN_KOMPETENSI AS EK", "01UK.UUID_UK = EK.UUID_UK", "LEFT");
				$this->db->join("KRITERIA_UNJUK_KERJA AS KUK", "EK.UUID_EK = KUK.UUID_EK", "LEFT");
				$this->db->where($condition);
				$this->db->order_by($order);
				return $this->db->get();
			}		

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