<?php

echo "HOLA MUNDO";

class Conexion{
private $con;

public function __CONSTRUCT(){

	try {
		
	  //$this->con=new PDO("mysql:host=localhost; dbname=susana", 'root','');
          //$this->con= new PDO("sqlsrv:Server=UTJCCD-LAB506-0\SQLEXPRESS03,1433;Database=inquilino", 'sa' , 'sa');
          $this->con= new PDO("sqlsrv:Server=201.131.7.239,1433;Database=dulceria", 'sa' , 'sa');		  
	  // set the PDO error mode to exception
	  $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  echo "Connected successfully";
	
	 }catch(PDOException $e) {
	  echo "Error: " . $e->getMessage();
	 }
}

public function getConection(){
	 	return $this->con;
	}
}


$con=new Conexion();
 ?>