<?php require_once './shared/header.php';
	  require_once './shared/guard.php';
	  require_once './shared/db.php';
 	/**
 	 * 
 	 */
 	class bd_control
 	{
 		
 		function __construct()
 		{
 			
 		}
 		public static function insertar_info_per($id_user,$name, $middle_name,$last_name,$birth,$about_you,$position,$location){
 			$sql = 'insert into curriculums(id_user, name_user, middle_name, last_name, birth, about_you, position_user, location_user) VALUES ($1,$2,$3,$4,$5,$6,$7,$8) returning id;';
       		$results = $con->runQuery($sql,[$id_user,$name, $middle_name,$last_name,$birth,$about_you,$position,$location]);
	        return $results;
 		}
 	}


  ?>