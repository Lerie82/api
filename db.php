<?php
class Dbase
{
	private $db_host = "127.0.0.1";
	private $db_user = "root";
        private $db_pass = "fxbg";
        private $db_db = "xsec";

	function __construct()
	{
	}

	function getDb()
	{
		$dsn = "mysql:host=".$this->db_host.";dbname=".$this->db_db.";charset=utf8mb4";

		$opt = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		];

		$pdo = new PDO($dsn, $this->db_user, $this->db_pass, $opt);
		return $db;
	}
}
?>
