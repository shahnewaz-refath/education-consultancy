<?php
	class Database{
		public $connection;
		public function __construct(){
			$this->connection = mysqli_connect('localhost','root','','ohesdb');
			if (mysqli_connect_error()) {
				die("database connection failed:" .mysqli_connect_error().mysqli_connect_errno());
			}
		}
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->connection,$var);
			return $return;
		}
	}
	$database = new Database();
?>