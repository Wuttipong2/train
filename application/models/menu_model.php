<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        
		function getAll(){
			$this->db->select('T_id, station, time_out,to,out,station_destination,to_time,note');
			$this->db->where('station','อุบลราชธาณี');
			$this->db->where('station_destination','กรุงเทพ');
			$result = $this->db->get('train');
			return $result;
		}

        function insert($data){
			$this->db->insert('train',$data);
        }
        
		
}