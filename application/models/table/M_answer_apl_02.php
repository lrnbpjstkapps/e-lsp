<?php
	class M_answer_apl_02 extends CI_Model{
		public $UUID_ANS_APL02;
		public $UUID_USER;
		public $UUID_APL01;
		public $UUID_APL02;
		public $UUID_UK;
		public $UUID_EK;
		public $UUID_KUK;
		public $IS_KOMPETEN;
		public $UUID_BUKTI;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('ANSWER_APL02', $condition);
			}
		
		public function get_detail_entry($condition)
			{
				$this->db->select('UK.UUID_UK, EK.UUID_EK, KUK.UUID_KUK, UK.JUDUL_UK, KUK.PERTANYAAN, KUK.PERNYATAAN, ANS_APL_02.IS_KOMPETEN, ANS_APL_02.UUID_BUKTI');
				$this->db->from("ANSWER_APL02 AS ANS_APL_02");
				$this->db->join("FR_APL_02 AS APL02", "ANS_APL_02.UUID_APL02 = APL02.UUID_APL02", "LEFT");
				$this->db->join("UNIT_KOMPETENSI AS UK", "ANS_APL_02.UUID_UK = UK.UUID_UK", "LEFT");
				$this->db->join("ELEMEN_KOMPETENSI AS EK", "ANS_APL_02.UUID_EK = EK.UUID_EK", "LEFT");
				$this->db->join("KRITERIA_UNJUK_KERJA AS KUK", "ANS_APL_02.UUID_KUK = KUK.UUID_KUK", "LEFT");
				$this->db->where($condition);
				$this->db->order_by("UK.KODE_UK", "ASC");
				$this->db->order_by("EK.NOMOR_EK", "ASC");
				$this->db->order_by("KUK.NOMOR_KUK", "ASC");
				return $this->db->get();
			}
			
		public function insert_multiple_entry($form_name, $i)
			{
				$uuidBukti 				= '';
				if(isset($this->input->post($form_name[136])[$i]))
					{
						$j 				= 0;
						foreach($this->input->post($form_name[136])[$i] as $val)
							{
								if($j > 0)
									{
										$uuidBukti .= ';'.$val;
									}
								else
									{
										$uuidBukti .= $val;
									}
								$j++;
							}
					}
				else
					{
						$uuidBukti		= null;
					}
					
				$this->UUID_ANS_APL02	= (!$this->input->post($form_name[175]) ? $this->uuid->v4() : $this->input->post($form_name[175]));
				$this->UUID_USER		= (!$this->input->post($form_name[140]) ? null : $this->input->post($form_name[140]));
				$this->UUID_APL01		= (!$this->input->post($form_name[134]) ? null : $this->input->post($form_name[134]));
				$this->UUID_APL02		= (!$this->input->post($form_name[146]) ? null : $this->input->post($form_name[146]));
				$this->UUID_UK			= (!$this->input->post($form_name[143])[$i] ? null : $this->input->post($form_name[143])[$i]);
				$this->UUID_EK			= (!$this->input->post($form_name[177])[$i] ? null : $this->input->post($form_name[177])[$i]);
				$this->UUID_KUK			= (!$this->input->post($form_name[178])[$i] ? null : $this->input->post($form_name[178])[$i]);
				$this->IS_KOMPETEN		= (!isset($this->input->post($form_name[179])[$i]) ? null : $this->input->post($form_name[179])[$i]);
				$this->UUID_BUKTI		= $uuidBukti;
				$this->USR_CRT			= 'Karid Nurvenus';
				$this->DTM_CRT			= date('Y-m-d H:i:s');
				$this->USR_UPD			= 'Karid Nurvenus';
				$this->DTM_UPD			= null;
				$this->IS_ACTIVE		= '1';
				
				return $this->db->insert('ANSWER_APL02', $this);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('ANSWER_APL02', $condition);
			}
		
	}
?>