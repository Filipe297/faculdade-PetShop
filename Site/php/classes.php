<?php
    // aqui estarão as classes em php

     class Site
    {

        public function __construct(){
            echo "A classe está funcionando";
        }
        
        public function phpalert($msg){
            echo "<h2 style='color:red;'>".$msg."</h2>";
        }
    }
    
?>