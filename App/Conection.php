<?php

	namespace App;

	class Conection {

		public static function getDB(){
			
			try {

				$conn = new \PDO(
					"mysql:host=localhost;dbname=ancient;charset=utf8",
					"root",
					"" 
				);

				return $conn;

			} catch (\PDOException $e) {
				return '<p>Está ocorrendo um erro</p>';
			}

		}

	}

?>