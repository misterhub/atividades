<html>
    <head>
        <title>Cadastro de Produtos</title>           
    </head>
    <body>
        
            <center>
                
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <b>Digite o código do produto para editar:</b><br/><input type="text" name="id" /> </br>
            <br/>
            <?php require_once("campos_produto.php"); ?>
            <input type="submit" value="Editar" />
            
        </form>
                
            </center>
    </body>
</html>
<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastro"])){
        $cadastro = $_SESSION["cadastro"];
        
        foreach($cadastro as $id => $produto){
            if($produto != null){
                echo "[$id] => " . $produto["nome"] . "<br/>";
            }
        }
    }
    else{
        echo "Não existem produtos cadastrados";
    }
        
?>
