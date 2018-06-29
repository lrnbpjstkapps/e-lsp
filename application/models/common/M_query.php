<?php
	class M_query extends CI_Model{		
		function get_KUK_by_APL01($condition)
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
				$this->db->order_by("UK.KODE_UK", "ASC");
				$this->db->order_by("EK.NOMOR_EK", "ASC");
				$this->db->order_by("KUK.NOMOR_KUK", "ASC");
				return $this->db->get();
			}
	}
?>