<?php	
/*example user of the database function in action, reading data from the database*/

//remember to call the database function file!
 require_once ($_SERVER['DOCUMENT_ROOT'] . "/databaseConnect");
  
  class Messages{
  public function getMessages($userID){
		$messageArray;

		$query = "SELECT * FROM message WHERE receiver_id = '$userID'";

		$this->database = new Database();
		$messageArray = $this->database->readFromDatabase($query, 2);		

		return $messageArray;

	}
  }


?>
