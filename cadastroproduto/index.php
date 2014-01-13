<style>
    .Vermelho{
        color: red;
    }
    .Amarelo{
        color: yellow;
    }
    .Verde{
        color: green;
    }
    
    
</style>
<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastro"])){
        $cadastro = $_SESSION["cadastro"];
        
        echo "<dl>";
        foreach($cadastro as $produto){
            $nome = $produto["nome"];
            $detalhes = $produto["detalhes"];
            $cor = $produto["cor"];
            $prazo = $produto["prazo"];
            $produtoNovo = $produto["aceito"];
            $aceito = $produto["aceito"];
            
            if($produto != null){
                echo "<fieldset>";
                
                echo "<dt class='$cor' ><b>Nome do Produto:</b> " . $produto["nome"] . "</dt>";             
                echo "<dd><b>Cor:</b> " . $cor . "</dd>";
                echo "<dd><b>Prazo de entrega:</b> " . $prazo . "</dd>";
                
                echo "<dd><b>Produto Novo:</b> ";
                if($aceito){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }
                echo "<dd><b>Detalhes:</b> " . $produto["detalhes"] . "</dd>";
                echo "</center>";
                echo "</fieldset>";
                echo "</dd>";
            }
        }
        echo "</dl>";
        
    }
    else{
        echo "<center>Não existem produtos cadastrados</center>";
    }
        
?>

