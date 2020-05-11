<?php

class Validar{

    public function admin(){
        session_start();
        $_SESSION['admin'] = "SYS ADMIN";
        header('location: paneladmin.php');
    }

    public function user(){
        session_start();
        $_SESSION['user'] = "Usuario - Capa 8";
        header('location: paneluser.php');    
    }
}



