

<?php
//Include the database connections example below
require_once ($_SERVER['DOCUMENT_ROOT'] . "/controller/example.php");
class Database{
	
		public $dbc;	
		
		public function readFromDatabase($query, $arrayDim){
			
			$dbc = self::connectDatabase();
			
			if(mysqli_ping($dbc)){
				
				
				
			}else{echo 'connect fail';}
			
			$result = mysqli_query($dbc, $query);
			
			$queryResults = array();
			
			while($row = mysqli_fetch_array($result)){
				
				if($arrayDim == 1){
				$queryResults = $row;
				}
				else{
				$queryResults[] = $row;	
				}
			}
			
			echo mysqli_error($dbc);
					
			mysqli_close($dbc);
			
			// Tests
			 /*echo '<br>Results from database<br>';
			print_r($queryResults);
			echo '<br>';  */ 
			
			return $queryResults;		
		}
		
		public function writeToDatabase($query){
		
			$dbc = self::connectDatabase();
			$runQuery = mysqli_query($dbc, $query);
			mysqli_close($dbc);
		}
		
		
		
		public function connectDatabase(){
			
			$details = returnConDetails();
						
			$dbc = mysqli_connect(
			 $details[0],
			 $details[1],
			 $details[2],
			 $details[3])
			 
			OR die(mysqli_connect_error());
			
			return $dbc;
		}
			
		
	}



?>
