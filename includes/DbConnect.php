<?php 
class DbConnect{
		private $con;

		function __construct(){

		}

		function connect(){
			include_once dirname(__FILE__) . '/Constants.php';
			$this->con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			if (mysqli_connect_errno()) {
				echo "No se pudo conectar a la base de datos ". mysqli_connect_errno();
			}/*else{
				echo "Conectado a la BD exitosamente.";
			}*/

			return $this->con;

		}
	}