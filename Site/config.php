<?php
//configurações e funções do php

    session_start();
	date_default_timezone_set('America/Sao_Paulo');
    define('INCLUDE_PATH','');
    define('BASE_DIR_PAINEL','');

    $css = '<link href="<?php echo INCLUDE_PATH; ?>CSS/style.css" rel="stylesheet" />';

    //Conectar com banco de dados!
	define('HOST','');
	define('USER','');
	define('PASSWORD','');
	define('DATABASE',''); //mudar

    include("php/classes.php");$painel = New Site();
    


?>