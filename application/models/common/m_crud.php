<?php
	class m_crud extends CI_Model{		
		// CREATE
		function insertDt($table, $param){
			$column = "(";
			$values = "(";
			$i = 0;
			foreach($param as $col => $val) 
				{
					$column .= $col;
					$values .= $val;
					
					if(++$i < count($param)){
						$column .= ", ";
						$values .= ", ";
					}
				}
			$column .= ")";
			$values .= ")";
			$query = "INSERT INTO ".$table." ".$column." VALUES ".$values;
			
			$this->db->query($query);
			return $this->db->affected_rows();
		}
		
		// CREATE [ ARRAY ]
		function insertArrDt($table, $paramArr){
			for($n = 0; $n < count($paramArr); $n++)
				{
					$column = "(";
					$values = "(";
					$i = 0;
					foreach($paramArr[$n] as $col => $val) 
						{
							$column .= $col;
							$values .= $val;
							
							if(++$i < count($paramArr[$n])){
								$column .= ", ";
								$values .= ", ";
							}
						}
					$column .= ")";
					$values .= ")";
					$query = "INSERT INTO ".$table." ".$column." VALUES ".$values;

					$this->db->query($query);					
				}
			return $this->db->affected_rows();
		}
		
		// READ	
		function selectDt($table, $addtionalParam){
			$condition		= $addtionalParam['condition'];	
			$optComp		= $addtionalParam['optComp'];
			$optLogic		= $addtionalParam['optLogic'];
			$order			= $addtionalParam['order'];
			
			$query = "SELECT * FROM ".$table." WHERE ";
			$i = 0;
			foreach($condition as $col => $val) 
				{
					$query .= $col." ".$optComp[$i]." ".$val;
					
					if(++$i < count($condition)){
						$query .= " ".$optLogic[$i-1]." ";
					}
				}
				
			if(count($order)>0){
				$query .= " ORDER BY";
			}			
			
			$i = 0;
			foreach($order as $col) 
				{
					$query .= " ".$col;
					
					if(++$i < count($order)){
						$query .= ",";
					}
				}
				
			$result = $this->db->query($query);
			return $result;
		}
		
		// UPDATE
		function updateDt($table, $addtionalParam){
			$param			= $addtionalParam['param'];
			$condition		= $addtionalParam['condition'];	
			$optComp		= $addtionalParam['optComp'];
			$optLogic		= $addtionalParam['optLogic'];
			
			$query = "UPDATE ".$table." SET ";
			
			$i = 0;
			foreach($param as $col => $val) 
				{
					$query .= $col." = ".$val;
					
					if(++$i < count($param)){
						$query .= ", ";
					}
				}
				
			$query .= " WHERE ";
			
			$i = 0;
			foreach($condition as $col => $val) 
				{
					$query.= $col." ".$optComp[$i]." ".$val;
					
					if(++$i < count($condition)){
						$query.= " ".$optLogic[$i-1]." ";
					}
				}
				
			$this->db->query($query);
			return $this->db->affected_rows();
		}
				
		// DELETE
		function deleteDt($table, $addtionalParam){
			$condition		= $addtionalParam['condition'];	
			$optComp		= $addtionalParam['optComp'];
			$optLogic		= $addtionalParam['optLogic'];
			
			$query = "DELETE FROM ".$table." WHERE ";		
			
			$i = 0;
			foreach($condition as $col => $val) 
				{
					$query.= $col." ".$optComp[$i]." ".$val;
					
					if(++$i < count($condition)){
						$query.= " ".$optLogic[$i-1]." ";
					}
				}
			$this->db->query($query);
			
			return $this->db->affected_rows();
		}
	}
?>