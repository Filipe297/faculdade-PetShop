<?php
//configurações e funções do php

    session_start();
	date_default_timezone_set('America/Recife');
    define('INCLUDE_PATH','');
    define('BASE_DIR_PAINEL','');

    $css = '<link href="<?php echo INCLUDE_PATH; ?>CSS/style.css" rel="stylesheet" />';

    //Conectar com banco de dados!
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','pets'); //mudar

    include("classes/classes.php");$painel = New Site(); // carrega classe na variavel painel
    
    $db = $painel->conectar(); //conecta com o banco de dados


?>