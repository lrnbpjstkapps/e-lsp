<?php
	class m_param extends CI_Model{	
		public function getDt_list($result, $recordsTotal, $recordsFiltered)
			{			
				$data 		= array();
				$no			= $_POST['start'];
				
				foreach ($result as $values) 
					{
						$no++;
						$row	= array();
						$row[]	= $no;
						$row[] 	= $values->NO_DOKUMEN;
						$row[] 	= $values->NAMA_SKEMA;
						$row[] 	= date('d-M-y H.i', strtotime($values->DTM_CRT));
						$row[] 	= '<a href="javascript:void(0)" onclick="editDt('."'".$values->UUID_APL01."'".')"><i class="fa fa-edit"></i></a>';
						$row[] 	= '<a href="javascript:void(0)" onclick="deleteDt('."'".$values->UUID_APL01."'".')"><i class="fa fa-trash"></i></a>';
						$data[]	= $row;
					}
		
				$output 	= array
					(
						"draw" => $_POST['draw'],
						"recordsTotal" => $recordsTotal, 
						"recordsFiltered" => $recordsFiltered,
						"data" => $data
					);
				return $output;
			}			
	}
?>