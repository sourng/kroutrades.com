<?php
class M_Products extends CI_Model{
	
	function get_by_sql($sql, $option=false){
		$query	= $this->db->query($sql);
		
		if($option == 'trace')
			print_r($this->db->queries);		
			
		if(!empty($query))
		{
			$results = array();
			if ( $query->num_rows() > 0 ){
				$results = $query->result_array();
				return $results;
			}else{
				return false;
			}
					
		}
	}



}
