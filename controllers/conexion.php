<?php

class Conexion{
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db = "notes";
	private $conect;
	public function __construct(){
		$conexionString="mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
		try{
			$this->conect=new PDO($conexionString,$this->user,$this->pass);
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
		}catch(Exception $e){
			echo "Error: ".$e->getMessage();
		}
	}
	public function connect()
	{
		return $this->conect;
	}
}
