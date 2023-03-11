<?php

class Db
{
	private $servername = "localhost";
	private $dbname = "db_blog";
	private $username = "root";
	private $password = "";
	public $conn = null;

	function __construct() {
		try {
		  $this->conn = new PDO("mysql:host=". $this->servername .";dbname=". $this->dbname, $this->username, $this->password);
		  // set the PDO error mode to exception
		  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}
}

$db = new Db();