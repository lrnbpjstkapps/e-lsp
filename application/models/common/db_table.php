<?php
	class table extends CI_Model{		
		//CREATE
		function insertWithParam($table, $param){
			$column = "(";
			$values = "(";
			$i = 0;
			foreach($param as $col => $val) 
				{
					$column .= $col;
					$values .= $val;
					
					if($i++ < count($param)){
						$column .= ", ";
					}
				}
			$column .= ")";
			$values .= ")";
			$query = "INSERT INTO ".$table." ".$column." VALUES ".$values;
		}
		
		//READ
		function selectWithParam($table, $param){
			$query = "SELECT * FROM ".$table." WHERE ";
			$i = 0;
			foreach($param as $col => $val) 
				{
					$query.= $col." = ".$val;
					
					if($i++ < count($param)){
						$query.= " AND ";
					}
				}
			$result = $this->db->query($query);
			return $result;
		}
		
		//UPDATE
		
		//DELETE
		
	}
?>