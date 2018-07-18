<?php
	class M_mma_kuk extends CI_Model{
		public $UUID_MMA_KUK;
		public $UUID_MMA;
		public $UUID_UK;
		public $UUID_EK;
		public $UUID_KUK;
		public $UUID_BUKTI;
		public $JENIS_BUKTI;
		public $METODE;
		public $USR_CRT;
		public $DTM_CRT;
		public $USR_UPD;
		public $DTM_UPD;
		public $IS_ACTIVE;
		
		public function get_entry($condition)
			{
				return $this->db->get_where('MMA_KUK', $condition);
			}
			
		public function insert_multiple_entry($form_name, $i)
			{
				$this->UUID_MMA_KUK		= (!$this->input->post($form_name[236]) ? $this->uuid->v4() : $this->input->post($form_name[236]));
				$this->UUID_MMA			= (!$this->input->post($form_name[145]) ? null : $this->input->post($form_name[145]));
				$this->UUID_UK			= (!$this->input->post($form_name[143])[$i] ? null : $this->input->post($form_name[113])[$i]);
				$this->UUID_EK			= (!$this->input->post($form_name[177])[$i] ? null : $this->input->post($form_name[113])[$i]);
				$this->UUID_KUK			= (!$this->input->post($form_name[178])[$i] ? null : $this->input->post($form_name[113])[$i]);
				$this->UUID_BUKTI		= (!$this->input->post($form_name[136]) ? null : $this->input->post($form_name[136]));
				$this->JENIS_BUKTI		= (!isset($this->input->post($form_name[234])[$i]) ? null : $this->input->post($form_name[234])[$i]);
				$this->METODE			= (!isset($this->input->post($form_name[235])[$i]) ? null : $this->input->post($form_name[235])[$i]);
				$this->USR_CRT			= 'Karid Nurvenus';
				$this->DTM_CRT			= date('Y-m-d H:i:s');
				$this->USR_UPD			= null;
				$this->DTM_UPD			= null;
				$this->IS_ACTIVE		= '1';

				//echo $this->UUID_MMA_KUK." ".$this->UUID_MMA." ".$this->UUID_UK." ".$this->UUID_EK." ".$this->UUID_KUK." \n";
				
				return $this->db->insert('MMA_KUK', $this);
			}
			
		public function delete_entry($condition)
			{
				return $this->db->delete('MMA_KUK', $condition);
			}
		
	}
?>