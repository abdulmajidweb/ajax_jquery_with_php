<?php
class Database{
	public $host 	 = DB_HOST;
	public $user 	 = DB_USERNAME;
	public $password = DB_PASSWORD;
	public $db 		 = DB_NAME;
	public $conn;
	public $error;

	public function __construct(){
		$this->connectDB();
	}

	private function connectDB(){
		$this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
		if (!$this->conn) {
			$this->error = "Connection failed!" . $this->conn->connect_error;
			return false;
		}
	}

	public function select($query){
		$result = $this->conn->query($query) or die($this->conn->connect_error);
		if ($result->num_rows > 0) {
			return $result;
		} else {
			return false;
		}
	}

	public function insert($query){
		$result = $this->conn->query($query) or die($this->conn->connect_error);
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}

	public function update($query){
		$result = $this->conn->query($query) or die($this->conn->connect_error);
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}

	public function delete($query){
		$result = $this->conn->query($query) or die($this->conn->connect_error);
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
}
?>