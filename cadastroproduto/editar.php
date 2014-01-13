<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastro"])){
        echo "Não existem produtos para aditar";
    }
    else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $detalhes = $_REQUEST["detalhes"];
        $cor = $_REQUEST["cor"];
        $prazo = $_REQUEST["prazo"];
        $produtoNovo = $_REQUEST["aceito"];
        $aceito = $_REQUEST["aceito"];
        
        $aceito = false;
        if(isset($_REQUEST["aceito"])){
            $aceito = true;
        }
        
        
        $produto = array();
        $produto["nome"] = $nome;
        $produto["cor"] = $cor;
        $produto["prazo"] = $prazo;
        $produto["aceito"] = $aceito;
        $produto["aceito"] = $produtoNovo;
        $produto["detalhes"] = $detalhes;
        $cadastro =& $_SESSION["cadastro"];
        $cadastro[$id] = $produto;
        echo "<center>Ediçao efetuada com sucesso!</center>";
    
    }
    
    
?>
