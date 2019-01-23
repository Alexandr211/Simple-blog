<?php
Class Database
{
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbname = "";
	
	
	public $link;
	public $error;
    public $result;
	
	public function __construct(){
		$this->connectDB();
	}
	
	private function connectDB(){
	$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	if(!$this->link){
		$this->error ="Connection fail".$this->link->connect_error;
		return false;
	}
 }
	
	// Select or Read data
	
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
        $items = array();
        while ($row = mysqli_fetch_array($result)) {
     $items[] = array('title' => $row['title'], 'updated' => $row['updated'], 'name' => $row['name'], 'text' => $row['text'], 'id' => $row['id']);
}

echo json_encode(array('items'=>$items));
       
		} else {
			return false;
		}
}
	    
	// Insert data
	public function insert($query){
	$insert_row = $this->link->query($query);
	if($insert_row){
	
	} else {
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }
  
    // Update data
  	public function update($query){
	$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($update_row){
	
	} else {
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }
  
  // Delete data
   public function delete($query){
	$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($delete_row){
	
	} else {
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }

   
  
}

