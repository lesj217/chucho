<?php 

class Conection{
	private $host 		= "127.0.0.1";
	private $db 		= "biblioteca";
	private $charset	= "utf8";
	private $user 		= "root";
	private $pass 		= "";
	private $connect 	= null;

	public function get_conection(){
		try{
			$this->connect = new PDO("mysql: host=$this->host;dbname=$this->db;charset=$this->charset",$this->user,$this->pass);
			$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			return $this->connect;
		}catch(PDOException $e){
			die("Error al intentar conectar con la DB ".$e->getMessage());
		}finally{
			$this->connect = null;
		}
	}
}

?>