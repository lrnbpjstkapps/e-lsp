<?php
	class m_custom extends CI_Model{		
		
		function getADt_SKE_UK($uuid)
			{				
				$this->db->select('SKE_UK.UUID_SKEMA_UK, SKE.UUID_SKEMA, SKE.NOMOR_SKEMA, 
					SKE.NAMA_SKEMA, UK.UUID_UK, UK.KODE_UK, UK.JUDUL_UK');
				$this->db->from("SKEMA_UK AS SKE_UK");
				$this->db->join("SKEMA AS SKE", "SKE_UK.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
				$this->db->join("UNIT_KOMPETENSI AS UK", "SKE_UK.UUID_UK = UK.UUID_UK", "LEFT");
				$this->db->where('SKE_UK.UUID_UK', $uuid);
				$this->db->where('SKE_UK.IS_ACTIVE', '1');
				return $this->db->get()->result();
			}
	}
?>