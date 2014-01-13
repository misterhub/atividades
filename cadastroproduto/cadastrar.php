<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastro"])){
        $_SESSION["cadastro"] = array();
    }
    $nome = $_REQUEST["nome"];
    $detalhes = $_REQUEST["detalhes"];
    $cor = $_REQUEST["cor"];
    $prazo = $_REQUEST["prazo"];
    $produtoNovo = $_REQUEST["aceito"];
    $aceito = $_REQUEST["aceito"];
        
    $produtoNovo = false;
    if(isset($_REQUEST["aceito"])){
        $produtoNovo = true;
    }
    
    $produto = array();
    $produto["nome"] = $nome;
    $produto["detalhes"] = $detalhes;
    $produto["cor"] = $cor;
    $produto["prazo"] = $prazo;
    $produto["produtoNovo"] = $produtoNovo;
    $produto["aceito"] = $aceito;
    
    array_push($_SESSION["cadastro"], $produto);
    echo "<center>Cadastro efetuado com sucesso!</center>";
?>
