<?php
	class m_custom extends CI_Model{		
		
		function getDt_FN105($uuid)
			{				
				$this->db->select('UK.UUID_UK, UK.JUDUL_UK, UK.KODE_UK');
				$this->db->from("SKEMA_UK SUK");
				$this->db->join("SKEMA AS SKE", "SUK.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
				$this->db->join("UNIT_KOMPETENSI AS UK", "SUK.UUID_UK = UK.UUID_UK", "LEFT");
				$this->db->where('SUK.UUID_SKEMA', $uuid);
				$this->db->where('SUK.IS_ACTIVE', '1');
				$this->db->order_by("UK.KODE_UK", "ASC");
				return $this->db->get();
			}
			
		function getDt_FN105_FN134($uuid)
			{				
				$this->db->select('UK.UUID_UK');
				$this->db->from("APL01_UK AS 01UK");
				$this->db->join("UNIT_KOMPETENSI AS UK", "01UK.UUID_UK = UK.UUID_UK", "LEFT");
				$this->db->where('01UK.UUID_APL01', $uuid);
				$this->db->where('01UK.IS_ACTIVE', '1');
				return $this->db->get();
			}
			
		function getDt_FN142_FN134($uuid)
			{				
				$this->db->select('AB.UUID_BUKTI');
				$this->db->from("APL01_BUKTI AS AB");
				$this->db->join("BUKTI AS BUK", "AB.UUID_BUKTI = BUK.UUID_BUKTI", "LEFT");
				$this->db->where('AB.UUID_APL01', $uuid);
				$this->db->where('AB.IS_ACTIVE', '1');
				return $this->db->get();
			}
			
		function getADt($uuid)
			{				
				$this->db->select('APL01.UUID_APL01, APL01.UUID_ADM, APL01.NAMA_LENGKAP, 
					APL01.TEMPAT_LAHIR, APL01.TGL_LAHIR, APL01.JENIS_KELAMIN, APL01.KEBANGSAAN,
					APL01.ALAMAT_RUMAH, APL01.KODE_POS_RUMAH, APL01.NO_TLP_RUMAH, APL01.NO_TLP_HP, 
					APL01.NO_TLP_KANTOR, APL01.EMAIL, APL01.PENDIDIKAN_TERAKHIR, APL01.NAMA_PERUSAHAAN, 
					APL01.JABATAN, APL01.ALAMAT_KANTOR, APL01.KODE_POS_PERUSAHAAN, APL01.EMAIL_KANTOR, 
					APL01.FAX_KANTOR, APL01.TUJUAN_ASESMEN, APL01.TUJUAN_ASESMEN_LAINNYA_KETERANGAN, 
					APL01.JENIS_SKEMA, APL01.UUID_SKEMA, SKE.NAMA_SKEMA, SKE.NOMOR_SKEMA');
				$this->db->from("FR_APL_01 AS APL01");
				$this->db->join("SKEMA AS SKE", "APL01.UUID_SKEMA = SKE.UUID_SKEMA", "LEFT");
				$this->db->where('APL01.UUID_APL01', $uuid);
				$this->db->where('APL01.IS_ACTIVE', '1');
				return $this->db->get();
			}
	}
?>