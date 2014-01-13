<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastro"])){
        echo "Não existem produtos para remover";
    }
    else{
        $id= $_REQUEST["id"];
        
        $cadastro =& $_SESSION["cadastro"];
    
        $cadastro[$id] = null;
        echo "remoçao efetuada com sucesso!";
    
    }
    
    
?>
