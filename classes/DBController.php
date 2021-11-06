<?php


class DBController {
    private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	private function connectDB() {
		$conn = mysqli_connect(
			Config::get('mysql/host'),
			Config::get('mysql/username'),
			Config::get('mysql/password'),
			Config::get('mysql/db')
		);

		mysqli_query($conn,"SET CHARACTER SET utf8"); 
		mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");

		return $conn;
	}




	public function writeLog($text)
	{
		$myfile = fopen("sql_logs.txt", "a+") or die("Unable to open file!");
		$txt = "\n\n\n---------------".date("d-m-Y-h:i:sa")."---------------\n";
		$txt .= $text;
		fwrite($myfile, $txt);
		fclose($myfile);
	}



	function insert($table_name, $data){  
			$sql = "INSERT INTO ".$table_name." (";            
			$sql .= implode(",", array_keys($data)) . ') VALUES (';            
			$sql .= "'" . implode("','", array_values($data)) . "')";  

			//echo $sql; // debug

			$this->writeLog($sql); //write log

			if($this->conn->query($sql) === TRUE)  
			{  
				return true;  
			}  
			else  
			{  
				echo "Error: " . $sql . "<br>" . $this->conn->error;;
				return false;  
			}  
	}
	
	function read($query) {
	
		$this->writeLog($query); //write log
		
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
		else{
			return array();
		}
	}



	function delete($query){
    	return $this->executeUpdate($query);
    }

    function update($query){
    	return $this->executeUpdate($query);
    }

	function count($query) {
		$result = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}

	function executeUpdate($query) {

		$this->writeLog($query); //write log

        $result = mysqli_query($this->conn,$query);        
		return $result;		
    }
    
    
    function readColumn($col,$sql,$replace=null){
        $data[0][$col]=null;
        $data = $this->read($sql);
        if ($data!=null) {
            return $data[0][$col];
        }else{
            return $replace;
        }
    }

	function getInsertID(){
		return $this->conn->insert_id;
	}
	
}
?>