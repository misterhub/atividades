<html>
    <head>
        <title>Remover Produto</title>           
    </head>
    <body>
        
        <fieldset>
        <?php
            require_once("menu.php");
        ?>
        <center>
        <form action="remover.php" method="post">
            Digite o código do produto para remover:<br/><input type="text" name="id" /> </br>
            <input type="submit" value="Remover" />
         
               
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
        echo "Não existem produtos cadastradas";
    }
        echo "</fieldset>";
        
?>
