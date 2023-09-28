<?php
    // aqui estarão as classes em php

     class Site
    {
        private static $pdo;

        public function __construct(){
            
        }
        
        public function phpalert($msg){
            echo "<h2 style='color:red;'>".$msg."</h2>";
        }

		public static function conectar(){
			if(self::$pdo == null){
				try{
				self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo '<h2>Erro ao conectar ao banco de dados</h2>';
				}
			}

			return self::$pdo;
		}
    }
    
?>